<?php
/**
 * *PHP version 5
 *
 * Footer | core/footer.php.
 *
 * @category   Footer
 * @package    Raythompsonwebdev-com
 * @subpackage Footer
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

</main>

<br/>
<br/>
<br/>
<div class="clearfix"></div>


<footer role="contentinfo">


<div class="socialpics">

<a class="social-icon linkedin-icon" href="<?php echo esc_url( 'http://www.linkedin.com/in/raymond-thompson-1b42b7b8', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on LinkedIn', 'raythompsonwebdev-com' ); ?>">
  <span>
	<i class="fa fa-linkedin"></i>
  </span>
</a>

<a class="social-icon twitter-icon" href="<?php echo esc_url( 'http://twitter.com/RayThompWeb', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Twitter', 'raythompsonwebdev-com' ); ?>">
  <span>
	<i class="fa fa-twitter"></i>
  </span>
</a>

<a class="social-icon facebook-icon" href="<?php echo esc_url( 'https://www.facebook.com/raythompwebdesigncom-1228332087181328', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on Facebook', 'raythompsonwebdev-com' ); ?>">
  <span>
	<i class="fa fa-facebook"></i>
  </span>
</a>


<a class="social-icon google-icon" href="<?php echo esc_url( 'http://github.com/raythompsonwebdev/', 'display' ); ?>" target="new" title="<?php esc_attr_e( 'Follow me on GitHub', 'raythompsonwebdev-com' ); ?>">
  <span>
	<i class="fa fa-github"></i>
  </span>
</a>


</div>


<?php
if ( has_nav_menu( 'Secondary' ) ) {

	wp_nav_menu(
		array(
			'menu'      => 'Secondary',
			'container' => 'footer',
		)
	);
}
?>

<p id="copyr" > <?php echo esc_attr( '&copy; 2016 - Raymond Thompson - UK :', 'raythompsonwebdev-com' ); ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raythompsonwebdev-com' ) ); ?>"></a>
			<span class="sep"> | </span>
    
	<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'raythompsonwebdev-com' ), 'raythompsonwebdev-com', '<a href="http://www.raythompsonwebdev.co.uk" rel="designer">Raymond Thompson</a>' ); ?>
<br/>

<?php

$dt             = time();
$mysql_datetime = strftime( '%Y-%m-%d %H:%M:%S', $dt );
printf( esc_html__( 'Page was last updated :', 'raythompsonwebdev-com' ), esc_html( $mysql_datetime, 'raythompsonwebdev-com' ), 'raythompsonwebdev-com' );

?>



</p>

</footer>

</div>


<?php wp_footer(); ?>



</body>

</html>
