<?php
/**
 * *PHP version 5
 * 
 * Footer | core/footer.php.
 * 
 * @category   Category
 * @package    Wordpress
 * @subpackage Footer
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<br/>


<footer>


    <div class="socialpics">

        <a class="social-icon linkedin-icon" href="http://www.linkedin.com/in/raymond-thompson-1b42b7b8" target="new" title="Follow me on LinkedIn"><span><i class="fa fa-linkedin"></i></span></a>

        <a class="social-icon twitter-icon" href="http://twitter.com/RayThompWeb" target="new" title="Follow me on Twitter"><span><i class="fa fa-twitter"></i></span></a>

        <a class="social-icon facebook-icon" href="https://www.facebook.com/raythompwebdesigncom-1228332087181328" target="new" title="Follow me on Facebook"><span><i class="fa fa-facebook"></i></span></a>


        <a class="social-icon google-icon" href="http://github.com/raythompsonwebdev/" target="new" title="Follow me on GitHub"><span><i class="fa fa-github"></i></span></a>


    </div>


    <?php
    if (has_nav_menu('Secondary')) {

        wp_nav_menu(array('menu' => 'Secondary', 'container' => 'footer'));
    }
    ?>

    <p id="copyr" > &copy; 2016 - Raymond Thompson - UK :
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'raythompsonwebdev-com')); ?>"></a>
        <span class="sep"> | </span>
        <?php printf(esc_html__('Theme: %1$s by %2$s.', 'raythompsonwebdev-com'), 'raythompsonwebdev-com', '<a href="http://www.raythompsonwebdev.co.uk" rel="designer">Raymond Thompson</a>'); ?>
        <br/>
        <?php
        $page = "Page was last updated : ";
        $dt = time();
        $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
        echo $page . $mysql_datetime;
        ?>

    </p>

</footer>
<<<<<<< HEAD

</div>


<?php wp_footer(); ?>

<script type="text/javascript" async>

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-86655310-1']);
    _gaq.push(['_trackPageview']);
=======
 
</div>


<?php wp_footer(); ?>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

<<<<<<< HEAD
</script>
=======
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

</body>

</html>
