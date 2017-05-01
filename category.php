
<?php get_header(); ?>
   	
<section id="main-content" class="group" >
  <?php 
    // Check if there are any posts to display
    if ( have_posts() ) : ?>

    <h1 class="archive-title">
        Category: <?php single_cat_title( '', true ); ?>
    </h1>

        <?php
// Display optional category description
 if ( category_description() ) : ?>

<div class="archive-meta"><?php echo category_description(); ?></div>

<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

<article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">
     
    <h1>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h1>

    <header class="byline">

        <div class="entry-meta">
            <?php popperscores_posted_on(); ?>
        </div><!-- .entry-meta -->

    </header>

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
    <?php } ?>

    <div class="entry">

        <?php the_excerpt(); ?>

    </div>

    <footer class="byline">
    <p class="postmetadata">
<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');?>
        </p>
    </footer>
    
 </article>

<?php endwhile;  else: ?>

   <?php get_template_part( 'templates/content', 'none' ); ?>
    
<?php endif; ?>

    <!--end of Comment box-->
    <div class="clearfix"></div>    
<?php get_sidebar(); ?>
</section>
 
<?php get_footer(); ?> 