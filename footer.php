<!-- footer-->
<br/>


<footer>


<div class="socialpics">

<a class="social-icon linkedin-icon" href="http://www.linkedin.com/in/raymond-thompson-1b42b7b8" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

<a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow me on Twitter"><span><i class="fa fa-twitter"></i></span></a>

<a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Follow me on Facebook"><span><i class="fa fa-facebook"></i></span></a>

<a class="social-icon google-icon" href="https://github.com/DigbyCeaser/RayThompWeb" target="new" title="Follow me on GitHub"><span><i class="fa fa-github"></i></span></a>

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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86655310-1', 'auto');
  ga('send', 'pageview');

</script>



<?php } ?>



<?php wp_footer(); ?>

</body>

</html>
