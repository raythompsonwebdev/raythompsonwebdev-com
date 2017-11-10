<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raythompsonwebdev.com
 */
?>

<?php
// Is this the first post of the front page?
$first_post = $wp_query->current_post == 0 && !is_paged() && is_home();
?>

<!--Post loop start -->
    <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

               <?php if ( is_home() && !is_front_page() ) : ?>
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
                  	<?php
		if ( $first_post == false ) { ?>
			<footer class="byline">
				<?php raythomp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php } else { 
			echo popper_modify_read_more_link();
		}
?>


            </article>
        <?php endwhile; ?>
    <?php else: ?>

        <?php get_template_part( 'templates/content', 'none' ); ?>

    <?php endif; ?>
<!--Post loop end -->
