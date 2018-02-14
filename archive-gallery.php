<?php
/**
 * *PHP version 5
 * 
 * Archive-Gallery page | core/archive-gallery.php.
 *
 * @category   Archive-Gallery_Page
 * @package    Wordpress
 * @subpackage Archive-Gallery_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php
/**
 * website taxonomy archive
 */
get_header();

$terms = get_term_by('slug', get_query_var('term'), get_query_var('gallery-category'));
?>


<h1>Websites</h1>

<div class="clear"></div>
<div class="clear"></div>

<div id="photocontainer" ><!-- Container Starts Here -->

    <div class="content">

        <nav class="menuSwitch" role="navigation">

            <ul>
<?php
?>

                <li class="cat-active" category="prod-cnt">All</li>

                <li class="" category="web-applications">From Scratch</li>

                <li class="" category="wordpress">Wordpress</li>

                <li class="" category="bootstrap">Bootstrap</li>

                <li class="" category="foundation">Foundation</li>

            </ul>
        </nav>

        <br/>

        <!-- Panel Container Starts Here -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <!-- display slugs for custom post categories-->
                <div id="panel" class="prod-cnt <?php
        $terms;
        $terms = get_the_terms($post->ID, 'gallery-category');
        foreach ($terms as $term) {
            echo $term->slug . ' ';
        }
        ?>"
                <?php post_class(); ?> <?php the_ID(); ?> >

                    <figure class="showcase-container " id="showcaseimg1">
                        <div class="showcase-img">
        <?php the_post_thumbnail('websites'); ?>
                        </div>
                        <figcaption class="showcase-content showcase">
                            <h1> <?php the_title(); ?></h1>

                            <div class="links">
                                <!--<?//https://www.raythompsonwebdev.co.ukphp echo home_url();?>/website/camping-advice-->
                                <a href="<?php the_permalink() ?>">See More..</a></div>
                        </figcaption>

                    </figure>

                </div>
                <!-- Panel Container Ends Here -->
        <?php
    endwhile;
else:
    ?>

            <p><?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages'); ?></p>

<?php endif; ?>

        <div class="clearfix"></div>

    </div><!-- End of Content -->

    <div class="clearfix"></div>

</div><!-- End of PhotoContainer -->

<div class="clearfix"></div>



<?php get_footer(); ?>
