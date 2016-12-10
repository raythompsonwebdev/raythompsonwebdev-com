
<?php get_header(); ?>

<section id="main-content" class="group" role="main">   	
    <h1>Single</h1>	


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post group" <?php post_class(); ?> <?php the_ID(); ?> >
                <h1><?php the_title(); ?></h1>
                <header class="byline">


                    <div class="entry-meta">
                        <?php popperscores_posted_on(); ?>
                    </div><!-- .entry-meta -->



                </header><!--end of by line-->

                <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute() ?>;">
                    <figure class="featuredImage"><?php the_post_thumbnail('custom'); ?></figure>
                </a>

                <?php the_content(); ?>


                <footer class="byline">

                    <p class='right'>
                        <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
                    </p>

                </footer>

                <?php edit_post_link('Edit this post', '<p>Admin: ', '</p>'); ?>
            </article><!--end of post group-->

            <!--navigation-->

            <nav class="navi">
                <span class="right"><?php next_post_link('Newer Posts: <strong>%link</strong>'); ?><?php wp_link_pages(); ?></span> 
                <span class="right"><?php previous_post_link('Older Posts: <strong>%link</strong>'); ?><?php wp_link_pages(); ?></span> 
            </nav><!--end of right navigation-->


            <!--end of navigation-->

        <?php endwhile;
    else:
        ?>

        <p><?php load_theme_textdomain($domain, $path) ?></p>
<?php endif; ?>
    <!--end of Comment box-->



<section class="contact-wide" >

    <h1>Send your Comments</h2>

<?php comments_template(); ?>


</section>


<?php get_sidebar(); ?>

</section><!--end of main content-->


<div class="clearfix"></div>
<?php get_footer(); ?> 