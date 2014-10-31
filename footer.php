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
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'warriortheme_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'warriortheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'warriortheme' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>


<!-- eof footer.php -->