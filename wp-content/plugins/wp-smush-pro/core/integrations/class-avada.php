<?php
/**
 * Avada integration module.
 *
 * @since 3.3.0
 * @package Smush\Core\Integrations
 */

namespace Smush\Core\Integrations;

use Smush\Core\CDN\CDN_Helper;
use Smush\Core\Modules\Helpers\Parser;
use Smush\Core\Settings;

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class Avada
 */
class Avada {
	private $cdn_helper;

	/**
	 * Avada constructor.
	 *
	 * @since 3.3.0
	 */
	public function __construct() {
		$settings = Settings::get_instance();
		if ( $settings->is_cdn_active() ) {
			add_filter( 'wp_smush_updated_element_markup', array( $this, 'replace_cdn_links' ) );

			if ( defined( 'FUSION_BUILDER_PLUGIN_DIR' ) ) {
				// TODO: the filter smush_after_process_background_images is deprecated now, this might not be needed with the new framework
				add_filter( 'smush_after_process_background_images', array( $this, 'smush_cdn_image_replaced' ), 10, 3 );
			}
		}
		$this->cdn_helper = CDN_Helper::get_instance();
	}

	/**
	 * Replace all the image src with cdn link.
	 *
	 * @param string $content Content of the current post.
	 * @param string $image   Backround Image tag without src.
	 * @param string $img_src Image src.
	 * @return string
	 */
	public function smush_cdn_image_replaced( $content, $image, $img_src ) {
		if ( $this->cdn_helper->is_supported_url( $img_src ) ) {
			$new_src = $this->cdn_helper->generate_cdn_url( $img_src );

			if ( $new_src ) {
				$content = str_replace( $img_src, $new_src, $content );
			}
		}

		return $content;
	}

	/**
	 * Replace images from data-bg-url with CDN links.
	 *
	 * @since 3.3.0
	 *
	 * @param string $img  Image.
	 *
	 * @return string
	 */
	public function replace_cdn_links( $img ) {
		$image_src = Parser::get_attribute( $img, 'data-bg-url' );
		if ( $image_src ) {
			// Store the original source to be used later on.
			$original_src = $image_src;

			// Replace the data-bg-url of the image with CDN link.
			if ( $this->cdn_helper->is_supported_url( $image_src ) ) {
				$image_src = $this->cdn_helper->generate_cdn_url( $image_src );

				if ( $image_src ) {
					$img = preg_replace( '#(data-bg-url=["|\'])' . $original_src . '(["|\'])#i', '\1' . $image_src . '\2', $img, 1 );
				}
			}
		}

		return $img;
	}

}