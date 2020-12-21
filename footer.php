<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raythompsonwebdev-com
 */

?>

</div><!-- #page end -->

	<footer id="colophon" class="site-footer">
	<aside class="social-icons">

	<a class="social-icon" href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>">
		<span>
		<i class="fab fa-linkedin"></i>
		</span>
	</a>


	<a class="social-icon" href="<?php echo esc_url( 'http://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>">
		<span>
		<i class="fab fa-twitter"></i>
		</span>
	</a>

	<a class="social-icon" href="<?php echo esc_url( 'https://www.facebook.com/raythompsonwebdeveloper', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Facebook', 'raythompsonwebdev-com' ); ?>">
		<span>
		<i class="fab fa-facebook"></i>
		</span>
	</a>

	<a class="social-icon" href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>">
		<span>
		<i class="fab fa-github"></i>
		</span>
	</a>
</aside>

		<?php
		if ( has_nav_menu( 'secondary' ) ) {

			wp_nav_menu(
				array(
					'menu'           => 'secondary',
					'container'      => 'footer',
					'theme_location' => 'Secondary',
				)
			);
		}
		?>

	</footer><!-- #colophon -->

	<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raythompsonwebdev-com' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'raythompsonwebdev-com' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'raythompsonwebdev-com' ), 'raythompsonwebdev-com', '<a href="https://raythompsonwebdev.co.uk">raythompsonwebdev</a>' );
				?>
	</div><!-- .site-info -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
