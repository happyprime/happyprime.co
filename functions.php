<?php
/**
 * Happy Prime Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package happyprime
 */

add_action( 'wp_enqueue_scripts', 'happyprime_enqueue_styles', 11 );

/**
 * Enqueue the child theme's stylesheet.
 */
function happyprime_enqueue_styles() {
	$asset_data = require 'style.css.php';
	wp_enqueue_style(
		'happyprime-child',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		$asset_data['version']
	);
}
