<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

get_header(); ?>

<!-- template page.php -->

<div class="sitewrap">
	<main id="content" role="main">


<?php
	if ( is_front_page() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
</main>

<?php
get_sidebar();
get_footer(); ?>