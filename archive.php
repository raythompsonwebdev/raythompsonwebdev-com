
<?php get_header(); ?>

<section id="main-content" class="group" role="main">
	

<h1><?php // Output the category title
	if ( is_category() ) { single_cat_title(); } 
	      // Output the tag title
		elseif ( is_tag() ) { single_tag_title();
	      // For everything else

	} else { _e('Browsing the Archive', 'raythompwebdesign-com'); }
	?>
</h1>
		
<section id="blogleftside">
	
<article id="blog" class="left-col">
    	
	        
<article class="entry-content">
 
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    
 				

<article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

<header class="byline">
    
<div class="entry-meta">
           
    <div class="meta-content">

   <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
         
    ?>
       
    </div>
</div><!-- .entry-meta -->

</header>



<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute()?>;">

<?php 
    if ( has_post_thumbnail() ) { ?>
        <figure class="featuredImage">
                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail('featured-image'); ?>
                </a>
        </figure>
    <?php }else{?>
    <figure class="featuredImage">
                <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail(); ?>
                </a>
        </figure>
    <?php }
    ?>

        
<section class="newsExcerpt"><?php the_excerpt();?></section>

<br/>

<footer class="byline">

<p class='right'>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
</p>

<span class="bylinecat">Posted in <?php the_category(', ') ?> </span>
<span class="bylinecat"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>


<p><?php $lastmodified = get_the_modified_time('U'); $posted = get_the_time('U');
			if ($lastmodified > $posted) {
			echo "Edited " . human_time_diff(get_the_time('U'),	get_the_modified_time('U')) . " later";
			}?>
</p>

</footer>


</article>
<?php endwhile; ?>
<?php else: ?>

<h1>No posts to show</h1>

<figure class="featuredImage"><?php the_post_thumbnail('featured-image');?></figure>

<p>Sorry, we got nada. Nothing. Bupkis. Zippo. Diddly-squat. Sorry to disappoint.</p>
<?php endif; ?>	


   
</article >
   
	

</article>

<br/>
<article class="contact-wide">

<h2>Archives</h2>
  
</article>

</section>

<?php get_sidebar('sidebar-archive'); ?> 
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>







