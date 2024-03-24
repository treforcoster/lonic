<?php

namespace Smush\Core\Transform;

use Smush\Core\Controller;
use Smush\Core\Server_Utils;
use Smush\Core\Settings;

class Transformation_Controller extends Controller {

	/**
	 * @var Transformer
	 */
	private $transformer;
	/**
	 * @var Settings|null
	 */
	private $settings;
	/**
	 * @var Server_Utils
	 */
	private $server_utils;

	public function __construct() {
		$this->transformer  = new Transformer();
		$this->settings     = Settings::get_instance();
		$this->server_utils = new Server_Utils();

		$this->register_action( 'template_redirect', array( $this, 'hook_transformation_method' ), 1 );
		$this->register_filter( 'rest_pre_echo_response', array( $this, 'transform_rest_response' ), 10, 3 );
	}

	public function should_run() {
		$should_transform = ! is_admin()
		                    && ! is_customize_preview()
		                    && ! wp_doing_ajax()
		                    && ! wp_doing_cron();

		return apply_filters( 'wp_smush_should_transform', $should_transform );
	}

	public function hook_transformation_method() {
		ob_start( array( $this, 'transform_content' ) );
	}

	public function transform_content( $content ) {
		return $this->transformer->transform_content(
			$content,
			$this->server_utils->get_current_url()
		);
	}

	/**
	 * @param $response array
	 * @param $server \WP_REST_Server
	 * @param $request \WP_REST_Request
	 *
	 * @return array
	 */
	public function transform_rest_response( $response, $server, $request ) {
		$context            = $request->get_param( 'context' );
		$referer            = $request->get_header( 'referer' );
		$referer_from_admin = $referer && ( false !== strpos( $referer, admin_url() ) || false !== strpos( $referer, network_admin_url() ) );
		$should_skip_parse  = 'view' !== $context || $referer_from_admin;
		if ( $should_skip_parse ) {
			return $response;
		}

		return $this->transformer->transform_rest_response( $response, $request );
	}
}