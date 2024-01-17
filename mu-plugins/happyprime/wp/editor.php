<?php
/**
 * Editor customizations.
 *
 * @package happyprime
 */

namespace HappyPrime\WP\Editor;

add_action( 'plugins_loaded', __NAMESPACE__ . '\remove_default_actions' );

/**
 * Remove the default duotone SVGs output by WordPress.
 */
function remove_default_actions() {
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
	remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}
