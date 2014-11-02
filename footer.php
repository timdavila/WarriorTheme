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

			<div class="foot-col">
				<ul>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
				</ul>
			</div>
			<div class="foot-col">
				<p class="copy">
					&copy; <?php bloginfo( 'name' ); ?> 2014<br />
					All rights reserved.
				</p>
			</div>
			<div class="cf"></div>
		</footer>

		<div class="scripts offscreen">
		<?php wp_footer(); ?>
		</div>
</body>
</html>


<!-- eof footer.php -->