<?php
/**
 * Custom template tags for Warrior Theme
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

if ( ! function_exists( 'warriortheme_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Warrior Theme 0.1
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function warriortheme_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="pagination" role="navigation"><span class="prev-link lf">
	<?php next_posts_link( '&laquo; Older Entries', $wp_query->max_num_pages ); ?>
	</span><span class="next-link rf">
	<?php previous_posts_link( 'Newer Entries &raquo;' ); ?>
	</span>
	</nav>
	<?php
}
endif;

if ( ! function_exists( 'warriortheme_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}

	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'warriortheme' ); ?></h1>
		<div class="nav-links">
			<?php
			if ( is_attachment() ) :
				previous_post_link( '%link', __( '<span class="meta-nav">Published In</span>%title', 'warriortheme' ) );
			else :
				previous_post_link( '%link', __( '<span class="meta-nav">Previous Post</span>%title', 'warriortheme' ) );
				next_post_link( '%link', __( '<span class="meta-nav">Next Post</span>%title', 'warriortheme' ) );
			endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'warriortheme_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_posted_on() {

	// Set up and print post meta information.
	printf( '<p class="entry-date">Posted on <time class="entry-date" datetime="%2$s">%3$s</time> by <span class="byline"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		get_the_author()
	);
}
endif;

/**
 * Find out if blog has more than one category.
 *
 * @since Warrior Theme 0.1
 *
 * @return boolean true if blog has more than 1 category
 */
function warriortheme_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'warriortheme_category_count' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'warriortheme_category_count', $all_the_cool_cats );
	}

	if ( 1 !== (int) $all_the_cool_cats ) {
		// This blog has more than 1 category so warriortheme_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so warriortheme_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in warriortheme_categorized_blog.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'warriortheme_category_count' );
}
add_action( 'edit_category', 'warriortheme_category_transient_flusher' );
add_action( 'save_post',     'warriortheme_category_transient_flusher' );

/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index
 * views, or a div element when on single views.
 *
 * @since Warrior Theme 0.1
 */
function warriortheme_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
	<?php
		if ( ( ! is_active_sidebar( 'sidebar-2' ) || is_page_template( 'page-templates/full-width.php' ) ) ) {
			the_post_thumbnail( 'warriortheme-full-width' );
		} else {
			the_post_thumbnail();
		}
	?>
	</div>

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
		if ( ( ! is_active_sidebar( 'sidebar-2' ) || is_page_template( 'page-templates/full-width.php' ) ) ) {
			the_post_thumbnail( 'warriortheme-full-width' );
		} else {
			the_post_thumbnail();
		}
	?>
	</a>

	<?php endif; // End is_singular()
}
