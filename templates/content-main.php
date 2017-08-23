<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raythompsonwebdev.com
 */
?>

<!--Post loop start -->
    <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>     
            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

               <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1 class="post-title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>
                <?php endif; ?>
           
            
				<!--Post entry Header-->
                <header class="byline">
                    <div class="entry-meta">
                       <?php if ('post' === get_post_type()) : ?>
                        <div class="meta-content">

                            <?php popperscores_index_posted_on(); ?> 

                        </div>
                        <?php endif; ?>
                    </div>
                </header>

				<!--featured Image-->
                <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute() ?>;">

                    <?php if (has_post_thumbnail()) { ?>
                        <figure class="featuredImage">
                            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                                <?php the_post_thumbnail('featured-image'); ?>
                            </a>
                        </figure>
                    <?php } else { ?>
                        <figure class="featuredImage">
                            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </figure>
                    <?php }
                    ?>
				</a>
                <!--featured Image end-->


                   
                  <!--Post entry--> 
                    <div class="entry">
                    
                    <?php the_excerpt(); ?>
                    
                    </div>
                    
                    
                    <div class="continue-reading">
        <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
<?php
printf(
        /* Translators: %s = Name of the current post. */
        wp_kses(__('Continue reading %s', 'raythompsonwebdev-com'), array('span' => array('class' => array()))), the_title('<span class="screen-reader-text">"', '"</span>', false)
);
?>
        </a>
    </div>
                    
                    <!--Post entry footer-->
                    <footer class="byline">

                        <p class='right'>
                            <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                        </p>

                        <span class="bylinecat">Posted in <?php the_category(', ') ?> </span>
                        <span class="bylinecat"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>


                        <p><?php
                            $lastmodified = get_the_modified_time('U');
                            $posted = get_the_time('U');
                            if ($lastmodified > $posted) {
                                echo "Edited " . human_time_diff(get_the_time('U'), get_the_modified_time('U')) . " later";
                            }
                            ?>
                        </p>

                    </footer>


            </article>
        <?php endwhile; ?>
    <?php else: ?>

        <?php get_template_part( 'templates/content', 'none' ); ?>
        
    <?php endif; ?>	
<!--Post loop end -->

