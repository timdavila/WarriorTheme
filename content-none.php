<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?>

<!-- content-none.php -->

<article>
	<header class="entry-header">
	<h1 class="page-title"><?php _e( 'Nothing Found', 'warriortheme' ); ?></h1>
	</header>

<div class="entry-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'warriortheme' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'warriortheme' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'warriortheme' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div>
</article>
