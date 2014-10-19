<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->
