
<?php get_header(); ?>

<section id="main-content" class="group" role="main">   	
    
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post group" <?php post_class(); ?> <?php the_ID(); ?> >

        <h1><?php the_title(); ?></h1>

        <header class="byline">

            <div class="entry-meta">
               
                
            </div><!-- .entry-meta -->

        </header><!--end of by line-->

        <a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute() ?>;">
            
            <figure class="websiteImage">
                <?php the_post_thumbnail('websites'); ?>
            </figure>
        </a>

    <div class="website-text">
        <?php the_meta(); ?>
        <div class="links"> 
        <p class="formats">
            <span>Website Formats</span>
            <span><a href="" class="fancybox" title="Desktop"><i class="fa fa-desktop"></i></a></span>
            <span><a href="" class="fancybox" title="Desktop"><i class="fa fa-tablet" title="Tablet"></i></a></span>
            <span><a href="" class="fancybox" title="Desktop"><i class="fa fa-mobile"></i></a></span>

  </p>
       </div>
        
       <div class="links"> 
  <a href="" title="">Visit Website</a> 
  </div>
    </div>

        <footer class="byline">

            <p class='right'>
                <a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
            </p>

        </footer>

        <?php edit_post_link('Edit this post', '<p>Admin: ', '</p>'); ?>
    </article><!--end of post group-->

        <!--navigation-->

        <nav class="navi">
          
            <span class="right"> </span> 
            
            
        </nav><!--end of right navigation-->

        <!--end of navigation-->

    <?php
    endwhile;
    else:
        ?>

        <p><?php load_theme_textdomain('raythompsonwebdev-com', get_template_directory() . '/languages'); ?></p>
        
<?php endif; ?>

    <section class='contact-wide'>

        <h1>Send your Comments</h2>
        
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
                comments_template();
        endif;
?>
            
    </section>


<?php get_sidebar(); ?>

</section><!--end of main content-->

<div class="clearfix"></div>

<?php get_footer(); ?> 