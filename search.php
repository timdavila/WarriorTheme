<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

get_header(); ?>

<!-- template search.php -->

<div class="sitewrap">
	<main id="content" role="main">

			<?php if ( have_posts() ) : ?>

			<div class="archive-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'warriortheme' ), get_search_query() ); ?></h1>
			</div>

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next post navigation.
					warriortheme_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
	</main>

<?php
get_sidebar();
get_footer(); ?>
