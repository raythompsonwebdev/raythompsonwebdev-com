<?php
/**
 * *PHP version 5
 * 
 * Search | core/search.php.
 *
 * @category   Search
 * @package    Wordpress
 * @subpackage Search
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php get_header(); ?>

<<<<<<< HEAD


<?php if (have_posts()) : ?>

    <h1 id="pageTitle">Here's what we've found:</h1>
=======
<section id="main-content" class="group">  
    <?php if (have_posts() ) : ?>

    <h1 id="pageTitle">Here's what we've found:</h1>

    <?php while ( have_posts() ) : the_post(); ?>

>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

    <article class="post group" <?php post_class() ?> id="post-<?php the_ID(); ?>">

<<<<<<< HEAD
    <?php while (have_posts()) : the_post(); ?>


        <article class="post group" <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

            <figure class="thumb"><?php the_post_thumbnail('thumb'); ?></figure>

            <?php $query = new WP_Query(array('post_type' => 'post', 'post_
count' => '5'));

            while ($query->have_posts()) : $query->the_post();
                ?>

                <?php the_excerpt(); ?>

        <?php endwhile; ?>


        </article>

    <?php endwhile; ?>
=======
        <h1>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h1>

        <figure class="thumb"><?php the_post_thumbnail('thumb'); ?></figure>

        <?php $query = new WP_Query(
            array ( 'post_type' => 'post', 'post_
    count' => '5' ) 
        );

        while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php the_excerpt(); ?>

        <?php endwhile; ?>


    </article>

    <?php endwhile; ?>

    <?php else : ?>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

        <?php get_template_part('templates/content', 'none'); ?>

<<<<<<< HEAD
    <?php get_template_part('templates/content', 'none'); ?>

<?php endif; ?>

<br/>



<?php get_sidebar(); ?>



<?php get_footer(); ?>
=======
    <?php endif; ?>
    <br/>
    <?php get_sidebar(); ?>
</section>
          
<?php get_footer(); ?>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
