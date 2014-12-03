<?php
/**
 * Implement Custom Header functionality for Warrior Theme
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

/**
 * Set up the WordPress core custom header settings.
 *
 * @since Warrior Theme 0.1
 *
 */
function warriortheme_custom_header_setup() {
	/**
	 * Filter Warrior Theme custom-header support arguments.
	 *
	 * @since Warrior Theme 0.1
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type bool   $header_text            Whether to display custom header text. Default false.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 1260.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 240.
	 *     @type bool   $flex_height            Whether to allow flexible-height header images. Default true.
	 *     @type string $admin_head_callback    Callback function used to style the image displayed in
	 *                                          the Appearance > Header screen.
	 *     @type string $admin_preview_callback Callback function used to create the custom header markup in
	 *                                          the Appearance > Header screen.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'warriortheme_custom_header_args', array(
		'width'                  => 260,
		'height'                 => 90,
		'flex-height'            => false,
		'header-text'            => false
	) ) );
}
add_action( 'after_setup_theme', 'warriortheme_custom_header_setup' );
