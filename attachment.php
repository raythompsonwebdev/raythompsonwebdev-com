<?php
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


<section id="main-content" class="group" role="main">
    <section id="blogleftside">                                

        <article id="blog" class="left-col">

            <h1>Images</h1>

            <?php if (have_posts()) : while (have_posts()): the_post();
                    ?>

                    <article class="post group" <?php post_class(); ?> 
                        <?php the_ID(); ?>>

                        <h1><?php the_title(); ?></h1>

                        <header class="byline">
                            <div class="entry-meta">

                                <?php popperscores_index_posted_on(); ?> 

                            </div>
                        </header><!--end of by line-->

                        <div class="entry-attachment">

                            <?php if (wp_attachment_is_image($post->id)) : $att_image = wp_get_attachment_image_src($post->id, "full"); ?>

                                <figure class="attachment">
                                    <a href="<?php echo wp_get_attachment_url($post_id); ?>" title="<?php the_title(); ?>" rel="attachment">
                                        <img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" >
                                    </a>
                                </figure>

                            </div>

                            <br/>
                            <footer class="byline">

                                <p class='right'>
                                    <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                                </p>

                                <span class="bylinecat">
                                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                                </span>

                            </footer>


                        <?php else : ?>
                            <a href="<?php echo wp_get_attachment_url($post_id->ID) ?>" title="<?php echo esc_html(get_the_title($post_id), 1) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>


                        <?php endif; ?>

                    </article><!--end of post group-->

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

</section>


<?php get_footer(); ?> 
