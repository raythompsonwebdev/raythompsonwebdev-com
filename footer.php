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

</main>
<br/>
<br/>
<div class="clearfix"></div>

<footer role="contentinfo">

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


</footer>

<p id="copyr" >

	<?php echo esc_attr( '&copy; 2016 - Raymond Thompson - UK :', 'raythompsonwebdev-com' ); ?>

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

</p>
</div>



<?php wp_footer(); ?>



</body>

</html>
