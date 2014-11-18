<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */

get_header(); ?>

<!-- template 404.php -->

<div class="sitewrap">
	<main id="content" role="main">

		<article>
			<header class="entry-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'warriortheme' ); ?></h1>
			</header>

			<div class="entry-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'warriortheme' ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</article>
	</main>

<?php
get_sidebar();
get_footer();
