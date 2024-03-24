<?php

namespace Smush\Core\Integrations;

use Smush\Core\Controller;
use Smush\Core\Transform\Transformer;

class WooCommerce extends Controller {
	public function __construct() {
		$this->register_filter( 'wp_smush_transform_rest_response_item', array(
			$this,
			'transform_rest_woo_product',
		), 10, 3 );
	}

	public function should_run() {
		return function_exists( 'is_woocommerce' )
		       && class_exists( 'WooCommerce' );
	}

	/**
	 * @param $item array
	 * @param $request \WP_REST_Request
	 * @param $transformer Transformer
	 *
	 * @return array
	 */
	public function transform_rest_woo_product( $item, $request, $transformer ) {
		if ( ! str_starts_with( $request->get_route(), '/wc/v3/products' ) ) {
			return $item;
		}

		$product_url = empty( $item['permalink'] ) ? '' : $item['permalink'];
		if ( ! empty( $item['description'] ) ) {
			$item['description'] = $transformer->transform_content( $item['description'], $product_url );
		}

		if ( ! empty( $item['short_description'] ) ) {
			$item['short_description'] = $transformer->transform_content( $item['short_description'], $product_url );
		}

		$images = empty( $item['images'] ) ? array() : $item['images'];
		foreach ( $images as $index => $image ) {
			if ( ! empty( $image['src'] ) ) {
				$item['images'][ $index ]['src'] = $transformer->transform_url( $image['src'] );
			}
		}

		return $item;
	}
}