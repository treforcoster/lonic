<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Class Forminator_Text
 *
 * @since 1.6
 */
class Forminator_Textarea extends Forminator_Field {

	/**
	 * @var string
	 */
	public $name = '';

	/**
	 * @var string
	 */
	public $slug = 'textarea';

	/**
	 * @var string
	 */
	public $type = 'textarea';

	/**
	 * @var int
	 */
	public $position = 7;

	/**
	 * @var array
	 */
	public $options = array();

	/**
	 * @var string
	 */
	public $category = 'standard';

	/**
	 * @var bool
	 */
	public $is_input = true;

	/**
	 * @var bool
	 */
	public $has_counter = true;

	/**
	 * @var string
	 */
	public $icon = 'sui-icon-blog';

	/**
	 * Forminator_Text constructor.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		parent::__construct();

		$this->name = esc_html__( 'Textarea', 'forminator' );
	}

	/**
	 * Field defaults
	 *
	 * @since 1.0
	 * @return array
	 */
	public function defaults() {
		return array(
			'input_type'  => 'line',
			'limit_type'  => 'characters',
			'field_label' => esc_html__( 'Text', 'forminator' ),
			'placeholder' => esc_html__( "E.g. text placeholder\nYou can add new line", 'forminator' ),
		);
	}

	/**
	 * Autofill Setting
	 *
	 * @since 1.0.5
	 *
	 * @param array $settings
	 *
	 * @return array
	 */
	public function autofill_settings( $settings = array() ) {
		$providers = apply_filters( 'forminator_field_' . $this->slug . '_autofill', array(), $this->slug );

		$autofill_settings = array(
			'text' => array(
				'values' => forminator_build_autofill_providers( $providers ),
			),
		);

		return $autofill_settings;
	}

	/**
	 * Field front-end markup
	 *
	 * @since 1.0
	 *
	 * @param $field
	 * @param Forminator_Render_Form $views_obj Forminator_Render_Form object.
	 *
	 * @return mixed
	 */
	public function markup( $field, $views_obj, $draft_value = null ) {

		$settings            = $views_obj->model->settings;
		$use_ajax_load       = ! empty( $settings['use_ajax_load'] ) || ! empty( $field['parent_group'] );
		$this->field         = $field;
		$this->form_settings = $settings;

		$html           = '';
		$name           = self::get_property( 'element_id', $field );
		$id             = self::get_field_id( $name );
		$required       = self::get_property( 'required', $field, false, 'bool' );
		$default        = esc_html( self::get_property( 'default', $field, false ) );
		$placeholder    = $this->sanitize_value( self::get_property( 'placeholder', $field ) );
		$design         = $this->get_form_style( $settings );
		$label          = esc_html( self::get_property( 'field_label', $field, '' ) );
		$description    = self::get_property( 'description', $field, '' );
		$limit          = self::get_property( 'limit', $field, 0, 'num' );
		$limit_type     = self::get_property( 'limit_type', $field, '', 'str' );
		$editor_type    = self::get_property( 'editor-type', $field, false, 'bool' );
		$default_height = self::get_property( 'default-height', $field, 140 );

		$autofill_markup = $this->get_element_autofill_markup_attr( self::get_property( 'element_id', $field ) );

		$textarea = array(
			'name'        => $name,
			'placeholder' => $placeholder,
			'id'          => $id,
			'class'       => 'forminator-textarea',
			'rows'        => 6,
			'style'       => 'min-height:' . $default_height . 'px;',
		);

		// Add maxlength attribute if limit_type is characters.
		if ( ! empty( $limit ) && 'characters' === $limit_type ) {
			$textarea['maxlength'] = $limit;
		}

		if ( isset( $draft_value['value'] ) ) {

			$default = wp_kses_post( $draft_value['value'] );

		} elseif ( $this->has_prefill( $field ) ) {
			// We have pre-fill parameter, use its value or $value.
			$default = $this->get_prefill( $field, $default );
		}

		if ( ! empty( $default ) ) {
			$textarea['content'] = $default;
		} elseif ( isset( $autofill_markup['value'] ) ) {
			$textarea['content'] = $autofill_markup['value'];
			unset( $autofill_markup['value'] );
		}

		// Add required class if form ajax load is enabled.
		if ( $required && true === $editor_type && $use_ajax_load ) {
			$textarea['class'] .= esc_attr( ' do-validate forminator-wp-editor-required' );
		}

		if ( ! empty( $description ) ) {
			$textarea['aria-describedby'] = $id . '-description';
		}

		$textarea = array_merge( $textarea, $autofill_markup );

		$html .= '<div class="forminator-field">';
		if ( true === $editor_type && ! $use_ajax_load ) {
			$html .= self::create_wp_editor( $textarea, $label, '', $required, $default_height, $limit );
			$desc_id = 'forminator-wp-editor-' . $id . '-description';
		} else {
			$html .= self::create_textarea( $textarea, $label, '', $required, $design );
			$desc_id = $id . '-description';
			if ( true === $editor_type && $use_ajax_load ) {
				$args   = self::get_tinymce_args( $id );
				$script = '<script>wp.editor.initialize("' . esc_attr( $id ) . '", ' . $args . ');</script>';
				// if it's inside group field and 'Load form using AJAX' option is disabled.
				if ( empty( $settings['use_ajax_load'] ) && ! empty( $field['parent_group'] ) ) {
					// wrap into document ready.
					$script = str_replace( array( '<script>', '</script>' ), array( '<script>jQuery(function() {', '});</script>' ), $script );
				}
				$html .= $script;

				Forminator_CForm_Front::$load_wp_enqueue_editor = true;
			}
		}
		// Counter.
		if ( ! empty( $description ) || ( ! empty( $limit ) && ! empty( $limit_type ) ) ) {
			$html .= sprintf( '<span id="%s" class="forminator-description">', esc_attr( $desc_id ) );

			if ( ! empty( $description ) ) {
				$html .= self::esc_description( $description, $name );
			}

			if ( ( ! empty( $limit ) && ! empty( $limit_type ) ) ) {
				$html .= sprintf( '<span data-limit="%s" data-type="%s">0 / %s</span>', $limit, $limit_type, $limit );
			}
			$html .= '</span>';
		}
		$html .= '</div>';

		return apply_filters( 'forminator_field_text_markup', $html, $field );

	}

	/**
	 * Return field inline validation rules
	 *
	 * @since 1.0
	 * @return string
	 */
	public function get_validation_rules() {
		$field       = $this->field;
		$id          = self::get_property( 'element_id', $field );
		$is_required = $this->is_required( $field );
		$has_limit   = $this->has_limit( $field );
		$rules       = '';

		if ( ! isset( $field['limit'] ) ) {
			$field['limit'] = 0;
		}

		if ( $is_required || $has_limit ) {
			$rules = '"' . $this->get_id( $field ) . '": {';
			if ( $is_required ) {
				$rules .= '"required": true,';
			}

			if ( $has_limit ) {
				if ( isset( $field['limit_type'] ) && 'characters' === trim( $field['limit_type'] ) ) {
					$rules .= '"maxlength": ' . $field['limit'] . ',';
				} else {
					$rules .= '"maxwords": ' . $field['limit'] . ',';
				}
			}
			$rules .= '},';
		}

		return apply_filters( 'forminator_field_text_validation_rules', $rules, $id, $field );
	}

	/**
	 * Return field inline validation errors
	 *
	 * @since 1.0
	 * @return string
	 */
	public function get_validation_messages() {
		$field            = $this->field;
		$id               = self::get_property( 'element_id', $field );
		$is_required      = $this->is_required( $field );
		$has_limit        = $this->has_limit( $field );
		$messages         = '';
		$required_message = self::get_property( 'required_message', $field, '' );

		if ( $is_required || $has_limit ) {
			$messages .= '"' . $this->get_id( $field ) . '": {';

			if ( $is_required ) {
				$required_error = apply_filters(
					'forminator_text_field_required_validation_message',
					( ! empty( $required_message ) ? $required_message : esc_html__( 'This field is required. Please enter text.', 'forminator' ) ),
					$id,
					$field
				);
				$messages      .= '"required": "' . forminator_addcslashes( $required_error ) . '",' . "\n";
			}

			if ( $has_limit ) {
				if ( isset( $field['limit_type'] ) && 'characters' === trim( $field['limit_type'] ) ) {
					$max_length_error = apply_filters(
						'forminator_text_field_characters_validation_message',
						esc_html__( 'You exceeded the allowed amount of characters. Please check again.', 'forminator' ),
						$id,
						$field
					);
					$messages        .= '"maxlength": "' . forminator_addcslashes( $max_length_error ) . '",' . "\n";
				} else {
					$max_words_error = apply_filters(
						'forminator_text_field_words_validation_message',
						esc_html__( 'You exceeded the allowed amount of words. Please check again.', 'forminator' ),
						$id,
						$field
					);
					$messages       .= '"maxwords": "' . forminator_addcslashes( $max_words_error ) . '",' . "\n";
				}
			}

			$messages .= '},';
		}

		return $messages;
	}

	/**
	 * Field back-end validation
	 *
	 * @since 1.0
	 *
	 * @param array        $field
	 * @param array|string $data
	 */
	public function validate( $field, $data ) {
		$id = self::get_property( 'element_id', $field );
		$data = html_entity_decode( $data );

		if ( ! isset( $field['limit'] ) ) {
			$field['limit'] = 0;
		}

		if ( $this->is_required( $field ) ) {
			$required_message = self::get_property( 'required_message', $field, '' );
			if ( empty( $data ) ) {
				$this->validation_message[ $id ] = apply_filters(
					'forminator_text_field_required_validation_message',
					( ! empty( $required_message ) ? $required_message : esc_html__( 'This field is required. Please enter text.', 'forminator' ) ),
					$id,
					$field
				);
			}
		}
		if ( $this->has_limit( $field ) ) {
			if ( ( isset( $field['limit_type'] ) && 'characters' === trim( $field['limit_type'] ) ) && ( mb_strlen( strip_tags( $data ) ) > $field['limit'] ) ) {
				$this->validation_message[ $id ] = apply_filters(
					'forminator_text_field_characters_validation_message',
					esc_html__( 'You exceeded the allowed amount of characters. Please check again.', 'forminator' ),
					$id,
					$field
				);
			} elseif ( ( isset( $field['limit_type'] ) && 'words' === trim( $field['limit_type'] ) ) ) {
				$words = preg_split( '/[\s]+/', $data );
				if ( is_array( $words ) && count( $words ) > $field['limit'] ) {
					$this->validation_message[ $id ] = apply_filters(
						'forminator_text_field_words_validation_message',
						esc_html__( 'You exceeded the allowed amount of words. Please check again.', 'forminator' ),
						$id,
						$field
					);
				}
			}
		}
	}

	/**
	 * Sanitization was improved and moved to class-core.php - sanitize_array
	 *
	 * Sanitize data
	 *
	 * @since 1.0.2
	 *
	 * @param array        $field
	 * @param array|string $data - the data to be sanitized.
	 *
	 * @return array|string $data - the data after sanitization
	 */
	public function sanitize( $field, $data ) {
		$original_data = $data;
		$editor_type   = self::get_property( 'editor-type', $field, false, 'bool' );
		// Sanitize.
		if ( true === $editor_type ) {
			$data = wp_kses_post( $data );
		} else {
			$data = forminator_sanitize_textarea( $data );
		}

		return apply_filters( 'forminator_field_text_sanitize', $data, $field, $original_data );
	}
}