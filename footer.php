<!-- footer-->
<br/>


<footer>


<div class="socialpics">

<a class="social-icon linkedin-icon" href="http://uk.linkedin.com/in/raymond-thompson-1b42b7b8" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

<a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow me on Twitter"><span><i class="fa fa-twitter"></i></span></a>

<a class="social-icon facebook-icon" href="http://en-gb.facebook.com/raythompsonwebdeveloper" target="new" title="Follow me on Facebook"><span><i class="fa fa-facebook"></i></span></a>

<a class="social-icon google-icon" href="http://github.com/raythompsonwebdev/" target="new" title="Follow me on GitHub"><span><i class="fa fa-github"></i></span></a>

</div>


<?php 
  if ( has_nav_menu( 'Secondary' ) ) {

    wp_nav_menu( array('menu' => 'Secondary', 'container' => 'footer' ));
  }
?>

<p id="copyr" > &copy; 2016 - Raymond Thompson - UK :
    	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raythompsonwebdev-com' ) ); ?>"></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'raythompsonwebdev-com' ), 'raythompsonwebdev-com', '<a href="http://www.raythompsonwebdev.co.uk" rel="designer">Raymond Thompson</a>' ); ?>
<br/>
<?php
$page = "Page was last updated : ";
$dt = time();
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
    echo $page . $mysql_datetime;
?>

</p>

</footer>
 
</div>

<?php add_action('wp_footer','add_google_analytics');//Google Analytics
function add_google_analytics() {
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-86655310-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86655310-1');
</script>




<?php } ?>



<?php wp_footer(); ?>

</body>

</html>
