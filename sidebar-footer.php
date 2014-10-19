<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
