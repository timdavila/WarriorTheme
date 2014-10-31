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

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'warriortheme_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'warriortheme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'warriortheme' ), 'WordPress' ); ?></a>
			</div>

			<div class="foot-col">
				<ul>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
				</ul>
			</div>
			<div class="cf"></div>
		</footer>

		<div class="scripts offscreen">
		<?php wp_footer(); ?>
		</div>
</body>
</html>


<!-- eof footer.php -->