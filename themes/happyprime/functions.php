<?php
/**
 * Happy Prime Theme functions and definitions
 *
 * @package happyprime
 */

add_action( 'wp_enqueue_scripts', 'happyprime_enqueue_styles', 11 );

/**
 * Enqueue the child theme's stylesheet.
 */
function happyprime_enqueue_styles() {
	wp_enqueue_style(
		'happyprime-child',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}
