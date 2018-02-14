<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
/**
 * *PHP version 5
 * 
 * Attachment page | core/attachment.php.
 * 
 * @category   Attachment
 * @package    Wordpress
 * @subpackage Attachment_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<?php get_header(); ?>
=======

>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
<<<<<<< HEAD
?>



    <section id="blogleftside">       	       	      	
=======
 ?>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864


<section id="main-content" class="group" role="main">
    <section id="blogleftside">                                

        <article id="blog" class="left-col">

<<<<<<< HEAD
            <h1>Images</h1>
=======
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

        <article id="blog" class="left-col">
            <h1>Images</h1>

<<<<<<< HEAD
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    ?>

                    <article class="post group" <?php post_class(); ?> <?php the_ID(); ?>>

                        <h1><?php the_title(); ?></h1>

                        <header class="byline">
                            
                            <div class="entry-meta">

        <?php _e('Featured in: ', 'raythompsonwebdev-com'); ?>
                                
                                <span class="parent-post-link">
                                    <a href="<?php echo get_permalink($post->post_parent); ?>" rel="gallery"><?php echo get_the_title($post->post_parent); ?>
                                    </a>
                                </span>.
        <?php _e('Full size image: ', 'raythompsonwebdev-com'); ?>
                                <span class="full-size-link">
                                    <a href="<?php echo wp_get_attachment_url(); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?>
                                    </a>
                                </span>
                                
                                <?php edit_post_link(__('Edit attachment post', 'raythompsonwebdev-com'), '<span class="edit-link">', '</span>.'); ?>

                            </div>

=======
<?php
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

            <?php if (have_posts()) : while (have_posts()): the_post();
                    ?>

                    <article class="post group" <?php post_class(); ?> 
                        <?php the_ID(); ?>>

                        <h1><?php the_title(); ?></h1>

                        <header class="byline">
                            <div class="entry-meta">

<<<<<<< HEAD
                                <?php popperscores_index_posted_on(); ?> 
=======
<header class="byline">
 <div class="entry-meta">
    
    <?php _e('Featured in: ', 'raythompsonwebdev-com'); ?><span class="parent-post-link"><a href="<?php echo get_permalink($post -> post_parent); ?>" rel="gallery"><?php echo get_the_title($post -> post_parent); ?></a></span>.
	<?php _e('Full size image: ', 'raythompsonwebdev-com'); ?><span class="full-size-link"><a href="<?php echo wp_get_attachment_url(); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?></a></span>.
	<?php edit_post_link(__('Edit attachment post', 'raythompsonwebdev-com'), '<span class="edit-link">', '</span>.'); ?>
    
 </div>
    
</header><!--end of by line-->
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

                            </div>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
                        </header><!--end of by line-->

                        <div class="entry-attachment">

<<<<<<< HEAD
        <?php if (wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, "full"); ?>

                                <figure class="attachment<?php
                                if (has_excerpt()) {
                                    echo " alignnone wp-caption";
                                }
                                ?>"><?php popper_the_attached_image(); ?>
                                <?php if (has_excerpt()) : ?>
=======
<<<<<<< HEAD
                            <?php if (wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, "full"); ?>

                                <figure class="attachment">
                                    <a href="<?php echo wp_get_attachment_url($post_id); ?>" title="<?php the_title(); ?>" rel="attachment">
                                        <img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" >
                                    </a>
                                </figure>

                            </div>
=======
    <figure class="attachment<?php
	if (has_excerpt()) { echo " alignnone wp-caption";
	}
 ?>"><?php popper_the_attached_image(); ?>
                                    <?php if ( has_excerpt() ) : ?>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
                                        <figcaption class="wp-caption-text">
                                                <?php echo get_the_excerpt(); ?>
                                        </figcaption><!-- .entry-caption -->
                                        <?php endif; ?>
                                </figure>

<<<<<<< HEAD
                            </div>
            <?php
            the_content();
                       
            ?>

                            <br/>
                            <footer class="byline">

                                <p class='right'>
                                    <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                                </p>

                                <span class="bylinecat"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>

                            </footer>


        <?php else : ?>

                            <?php get_template_part('templates/content', 'none'); ?>


        <?php endif; ?>
                    </article><!--end of post group-->

    <?php endwhile; ?>

            <?php endif; ?>


        </article>

        <section class="contact-wide">
            <h1>Send Comment</h1>
=======
</div>
<?php
the_content();
wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'popper') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>', ));
                            ?>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

                            <br/>
                            <footer class="byline">

                                <p class='right'>
                                    <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                                </p>

                                <span class="bylinecat">
                                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                                </span>

<<<<<<< HEAD
                            </footer>
=======
</footer>
    
    
    <?php else : ?>
    
<?php get_template_part('templates/content', 'none'); ?>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864


                        <?php else : ?>
                            <a href="<?php echo wp_get_attachment_url($post_id->ID) ?>" title="<?php echo esc_html(get_the_title($post_id), 1) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>


                        <?php endif; ?>

                    </article><!--end of post group-->

<<<<<<< HEAD
            <?php endwhile; ?>

            <?php endif; ?>


        </article>

        <section class="contact-wide">
            <h1>Send Comment</h1>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </section>

    </section>
=======
<section class="contact-wide">
<h1>Send Comment</h1>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
<?php
// If comments are open or we have at least one comment, load up the comment template
if (comments_open() || '0' != get_comments_number()) :
    comments_template();
endif;
<<<<<<< HEAD
?>
        </section>

    </section>

=======
			?>
</section>
	
</section>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84



<?php get_footer(); ?> 
