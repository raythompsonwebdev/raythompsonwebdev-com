<?php
/**
 * *PHP version 7.2.
 *
 * Footer | core/footer.php.
 *
 * @category   Footer
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

?>

</main> <!-- #page end -->
<br>
<br>
<br>
	<footer id="colophon" class="site-footer">
	<aside class="social-icons">

	<a class="social-icon" href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>">
		<!-- <span>
		<i class="fab fa-linkedin" aria-hidden="true"></i>
		</span> -->
		<span class="dashicons dashicons-linkedin"></span>
	</a>


	<a class="social-icon" href="<?php echo esc_url( 'http://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>">
		<!-- <span>
		<i class="fab fa-twitter" aria-hidden="true"></i>
		</span> -->
		<span class="dashicons dashicons-twitter"></span>
	</a>

	<a class="social-icon" href="<?php echo esc_url( 'https://www.facebook.com/raythompsonwebdeveloper', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Facebook', 'raythompsonwebdev-com' ); ?>">
		<!-- <span>
		<i class="fab fa-facebook" aria-hidden="true"></i>
		</span> -->
		<span class="dashicons dashicons-facebook-alt"></span>
	</a>

	<a class="social-icon" href="<?php echo esc_url( 'https://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>">
		<!-- <span>
		<i class="fab fa-github" aria-hidden="true"></i>
		</span> -->
		<span class="dashicons dashicons-github"></span>
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
				sprintf( esc_html__( 'Theme: %1$s by %2$s.', 'raythompsonwebdev-com' ), 'raythompsonwebdev-com', '<a href="https://raythompsonwebdev.co.uk">raythompsonwebdev</a>' );
				?>
	</div><!-- .site-info -->


</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>
