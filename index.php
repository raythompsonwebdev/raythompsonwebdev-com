<?php get_header(); ?>

<section id="main-content" class="group" role="main">

<h1>Interested in web design and web development&#63;</h1>

<p>Whether you are just beginning to learn or are alreading building websites I would like to share  what I have learnt so far about web design and web development through the tons of valuable web development and web design related resources I have read, watched and listened to over the past few years&#46; content like</p>
<hr class="blog-spacer">

<?php  if ( is_home() || is_archive() ) : ?>
<span class="social-1"><?php get_search_form(true); ?></span>
<?php else : ?>

<?php endif; ?>

<section id="blogleftside"> 
	
<article id="blog" class="left-col">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
 				

<article class="post group <?php post_class() ?>" id="post-<?php the_ID(); ?>">

<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

<header class="byline">
    
<div class="entry-meta">
           
    <div class="meta-content">

    <?php popperscores_posted_on(); ?> 
    


        
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

</article>
<div class="clearfix"></div>
<article class="contact-wide">
<h2>Related Items</h2> 		
</article>

</section>
<?php get_sidebar(); ?> 

</section>


<div class="clearfix"></div>
<?php get_footer(); ?>