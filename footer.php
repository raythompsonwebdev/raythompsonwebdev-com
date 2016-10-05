<!-- footer-->           	



<footer>


<div class="socialpics">

<a class="social-icon linkedin-icon" href="https://uk.linkedin.com/pub/raymond-thompson/b8/2b7/1b4" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

<a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow me on Twitter"><span><i class="fa fa-twitter"></i></span></a>

<a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Follow me on Facebook"><span><i class="fa fa-facebook"></i></span></a>

<a class="social-icon google-icon" href="https://github.com/DigbyCeaser/RayThompWeb" target="new" title="Follow me on GitHub"><span><i class="fa fa-github"></i></span></a>

</div>


<?php wp_nav_menu( array('menu' => 'Secondary', 'container' => 'footer' )); ?>

<p id="copyr" > &copy; 2016 - Raymond Thompson - UK : 
<?php
$page = "Page was last updated : ";
$dt = time();
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
    echo $page . $mysql_datetime;
?>
</p>

</footer> 
 

</div>





<?php wp_footer(); ?> 

</body>

</html>