<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Warrior_Theme
 * @since Warrior Theme 0.1
 */
?>

<!-- footer.php -->
		</div>

		<footer class="site-footer cf" role="contentinfo">

			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<div class="cf"></div>
		</footer>

		<div class="scripts offscreen">
		<?php wp_footer(); ?>
		</div>
</body>
</html>