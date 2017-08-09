<?php get_header(); ?>

<section id="main-content" class="group" role="main">

    <h1>Interested in web design and web development&#63;</h1>

    <p>Whether you have just started learning or are alreading building websites I would like to share with you what I have learnt so far about web design and web development through the tons of valuable web development and web design related resources I have read, watched and listened to&#46;</p>
   
<br/>
    <?php if (is_home() || is_archive()) : ?>
        <span class="social-1"><?php get_search_form(true); ?></span>
    <?php else : ?>
        <span class="social-1"></span>
    <?php endif; ?>
   <!-- <button id="find-search">Search</button>-->
   <br/>
    <br/>
    <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
        
            <article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

                <h1 class="post-title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>

                <header class="byline">
                    <div class="entry-meta">
                        <div class="meta-content">

                            <?php popperscores_index_posted_on(); ?> 

                        </div>
                    </div><!-- .entry-meta -->
                </header>


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


            </article>
        <?php endwhile; ?>
    <?php else: ?>

        <?php get_template_part( 'templates/content', 'none' ); ?>
        
    <?php endif; ?>	


    <div class="clearfix"></div>
    <section class="contact-wide">
        <h1>Related Items</h1> 		
    </section>


    <?php get_sidebar(); ?> 

</section>

<div class="clearfix"></div>
<?php get_footer(); ?>