
<?php get_header(); ?>

<section id="main-content" class="group" role="main">
<h1 class="archive-title"><?php
        // Output the category title
        if (is_category()) {
            single_cat_title();
        }
        // Output the tag title
        elseif (is_tag()) {
            single_tag_title();
            // For everything else
        } else {
            _e('Browsing the Archive', 'raythompsonwebdev-com');
        }
        ?>

    </h1>

    
    
    <?php
    the_archive_title('<h2 class="page-title">', '</h2>');
    ?>

    <?php if (have_posts()) : ?>


    <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">


            <header class="byline">
                <br/>
                <div class="entry-meta">
                    <?php popperscores_posted_on(); ?>

                </div><!-- .entry-meta -->

            </header>


            <?php while (have_posts()) : the_post(); ?>

                <h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>
            
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
                <div class="entry">
                  
                    <?php the_excerpt(); ?>

                </div>

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

            <?php endwhile; ?>
        <?php else: ?>
           
<?php get_template_part( 'templates/content', 'none' ); ?>
            
    <?php endif; ?>      

    </article>
  	

    <section class="contact-wide">

        <h1>Archives</h1>

    </section>


    <?php get_sidebar('archive'); ?> 


</section>

<?php get_footer(); ?>







