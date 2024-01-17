<?php
/**
 * Plugin Name: Happy Prime Features
 * Description: Provide the functionality for happyprime.co
 *
 * @package happyprime
 */

/**
 * Load all mu-plugins within subfolders where a PHP file exists with
 * the same name as the directory name.
 *
 *  Example: /must-use-local/must-use-local.php
 *
 * If you're looking at this file in the Must Use Local mu-plugin, and need
 * something like it, copy it to your `wp-content/mu-plugins/` directory.
 */
$dirs = glob( __DIR__ . '/*', GLOB_ONLYDIR );
foreach ( $dirs as $dir ) {
	if ( file_exists( $dir . DIRECTORY_SEPARATOR . basename( $dir ) . '.php' ) ) {
		require $dir . DIRECTORY_SEPARATOR . basename( $dir ) . '.php';
	}
}
