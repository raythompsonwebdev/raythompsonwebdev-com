<?php
/**
 * *PHP version 5
 *
 * Image | core/image.php.
 *
 * @category   Image
 * @package    Raythompsonwebdev-com
 * @subpackage Image
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 
 $metadata = wp_get_attachment_metadata();

 get_header(); ?>

<?php
// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
?>



<section id="blogleftside">                                

<article id="blog" class="left-col">
<h1>Images</h1>

<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

<article class="post group" <?php post_class(); ?> <?php the_ID(); ?>>

<h1><?php the_title(); ?></h1>

<header class="byline">
    
    <div class="entry-meta">

        <?php _e('Featured in: ', 'raythompsonwebdev-com'); ?>
                                
        <span class="parent-post-link">
            <a href="<?php echo get_permalink($post -> post_parent); ?>" rel="gallery"><?php echo get_the_title($post -> post_parent); ?>
            </a>
        </span>
        <?php _e('Full size image: ', 'raythompsonwebdev-com'); ?>
        <span class="full-size-link">
            <a href="<?php echo wp_get_attachment_url(); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?>
            </a>
        </span>
        
        <?php edit_post_link(__('Edit attachment post', 'raythompsonwebdev-com'), '<span class="edit-link">', '</span>.'); ?>

    </div>

</header><!--end of by line-->

<div class="entry-attachment">

       <?php if (wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, 'full'); ?>

        <figure class="attachment<?php
        if (has_excerpt()) {
            echo 'alignnone wp-caption';
        }
        ?>
        "><?php raythompsonwebdev_com_attached_image(); ?>
        <?php if (has_excerpt()) : ?>
                <figcaption class="wp-caption-text">
                        <?php echo get_the_excerpt(); ?>
                </figcaption><!-- .entry-caption -->
        <?php endif; ?>
        </figure>

</div>
    <?php
    the_content();
    ?>

<br/>
<footer class="byline">


    <?php raythompsonwebdev_com_attachment_nav(); ?>

</footer>


<?php else : ?>

    <?php get_template_part('template-parts/content', 'none'); ?>


<?php endif; ?>

</article><!--end of post group-->

<?php endwhile; ?>

<?php endif; ?>


</article>

        <section class="contact-wide">
            <h1>Send Comment</h1>
<?php
// If comments are open or we have at least one comment, load up the comment template
if (comments_open() || '0' !== get_comments_number()) :
    comments_template();
endif;
?>
        </section>

    </section>




<?php get_footer(); ?> 
