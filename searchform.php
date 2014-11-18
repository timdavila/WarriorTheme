<?php
/**
 * The search form for the theme
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?>

<!-- searchform.php -->

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="in-search" placeholder="<?php echo esc_attr_x( 'Search this site...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search this site', 'label' ) ?>" required />
	<button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
</form>
<div class="cf"></div>
<!-- eof searchform.php -->