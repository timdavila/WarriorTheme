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
			<div class="foot-wrap">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<div class="cf"></div>
			</div>
		</footer>

		<div class="scripts offscreen">
		<?php wp_footer(); ?>
		</div>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

<!-- Page generated on <?php echo date('l jS \of F Y h:i:s A e'); ?> -->

</body>
</html>