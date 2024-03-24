<?php

namespace Smush\Core;

class Url_Utils {
	public function get_extension( $url ) {
		$path = wp_parse_url( $url, PHP_URL_PATH );
		if ( empty( $path ) ) {
			return false;
		}

		return strtolower( pathinfo( $path, PATHINFO_EXTENSION ) );
	}

	public function get_url_scheme( $url ) {
		$url_parts = wp_parse_url( $url );

		return empty( $url_parts['scheme'] )
			? false
			: $url_parts['scheme'];
	}
}