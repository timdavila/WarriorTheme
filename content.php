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
			<header>
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif;
				<p>Posted on October 19, 2014 by Tim Davila</p>
				<p>
					if ( 'post' == get_post_type() )
					warriortheme_posted_on();
			</header>

			<img src="http://lorempixel.com/1000/400" />
			<?php warriortheme_post_thumbnail(); ?>

			<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Quisque molestie pharetra odio quis ultrices.
			Donec dignissim aliquam orci eget congue. Donec varius tempor augue non malesuada. Suspendisse sollicitudin risus non metus varius,
			eget commodo lectus imperdiet. Mauris accumsan risus nibh, ac varius diam iaculis quis. Sed at arcu massa. Suspendisse potenti.
			Fusce at eros nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae molestie eros,
			a tristique nisl. <a href="#">Read more...</a></p>
			<footer>
				<div class="post-cat lf">
				<p>Categories: <a href="#">Category 1</a>, <a href="#">Category 2</a>, <a href="#">Category 3</a></p>
				</div>
				<div class="post-social">
				<p>Share this post:</p>
					<div class="btn-share"><a href="#"><i class="fa fa-facebook"></i></a></div>
					<div class="btn-share"><a href="#"><i class="fa fa-twitter"></i></a></div>
					<div class="btn-share"><a href="#"><i class="fa fa-google-plus"></i></a></div>
					<div class="btn-share"><a href="#"><i class="fa fa-reddit"></i></a></div>
				</div>
				<div class="cf"></div>
			</footer>
		</article>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php warriortheme_post_thumbnail(); ?>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && warriortheme_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'warriortheme' ) ); ?></span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					warriortheme_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'warriortheme' ), __( '1 Comment', 'warriortheme' ), __( '% Comments', 'warriortheme' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'warriortheme' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'warriortheme' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'warriortheme' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
