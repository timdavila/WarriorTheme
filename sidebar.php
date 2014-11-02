<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?>

<!-- sidebar.php -->

	<section class="sidebar desktop" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar' ) ) :
		dynamic_sidebar( 'sidebar' );
	endif; ?>

	</section>

<!-- eof sidebar.php -->