<?php
/**
 * Warrior Theme back compat functionality
 *
 * Prevents Warrior Theme from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible beyond that
 * and relies on many newer functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

/**
 * Prevent switching to Warrior Theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'warriortheme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'warriortheme_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Warrior Theme on WordPress versions prior to 3.6.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_upgrade_notice() {
	$message = sprintf( __( 'Warrior Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'warriortheme' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_customize() {
	wp_die( sprintf( __( 'Warrior Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'warriortheme' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'warriortheme_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.6.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Warrior Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'warriortheme' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'warriortheme_preview' );
