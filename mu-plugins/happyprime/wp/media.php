<?php
/**
 * Adjust media defaults.
 *
 * @package happyprime
 */

namespace HappyPrime\WP\Media;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'upload_size_limit', __NAMESPACE__ . '\increase_max_upload_size', 20 );

/**
 * Set the maximum file upload (media) size limit to 100 mb.
 *
 * @param int $size The size limit.
 * @return int The modified limit.
 */
function increase_max_upload_size( $size ): int {
	// 100 MB (weird # because it is x 1024 bytes).
	return 100 * MB_IN_BYTES;
}
