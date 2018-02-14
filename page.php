<?php
/**
 * *PHP version 5
 * 
 * Page | core/page.php.
 *
 * @category   Page
 * @package    Wordpress
 * @subpackage Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php get_header(); ?>



    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            get_template_part('templates/content', 'page');

        endwhile;

    else :
        echo '<p>No content found</p>';

    endif;
    ?>


<?php get_footer(); ?>
