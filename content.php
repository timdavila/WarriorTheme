<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?>
<!-- content.php -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php

			/*if ( is_sticky() && is_home() && ! is_paged() ) :
			// put this somewhere
				<i class="fa fa-thumb-tack"></i>
			endif;*/

			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;

			if ( 'post' == get_post_type() )
				warriortheme_posted_on();


			edit_post_link( __( 'Edit', 'warriortheme' ), ' / <span class="edit-link">', '</span></p>' );
		?>
	</header>

	<?php warriortheme_post_thumbnail(); ?>

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Read more...', 'warriortheme' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'warriortheme' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div>
	<?php endif; ?>
	<footer>

	<?php if ( is_single() ) :
			the_tags( '<div class="post-cat post-tag lf"><span class="tag-links">', '', '</span></div>' ); ?>

			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && warriortheme_categorized_blog() ) : ?>
			<div class="post-cat lf">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'warriortheme' ) ); ?></span>
			</div>

			<?php endif;
				  endif; ?>

			<div class="entry-meta">
				<?php
					if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
				?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'warriortheme' ), __( '<span class="comments">1</span> Comment', 'warriortheme' ), __( '<span class="comments">%</span> Comments', 'warriortheme' ) ); ?></span>
				<?php
					endif;

				?>
		</div>


			<div class="post-social">
				<span>Share this post:</span>
				<div class="btn-share fb"><a href="#"><i class="fa fa-facebook"></i></a></div>
				<div class="btn-share tw"><a href="#"><i class="fa fa-twitter"></i></a></div>
				<div class="btn-share gp"><a href="#"><i class="fa fa-google-plus"></i></a></div>
				<div class="btn-share rd"><a href="#"><i class="fa fa-reddit"></i></a></div>
			</div>
			<div class="cf"></div>
	</footer>
</article>

<!-- eof content.php -->