<?php get_header(); ?>

  	
<section id="main-content" class="group" role="main">
<section id="blogleftside">       	       	      	

<article id="blog" class="left-col">
<h1>Images</h1>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
$photographer = get_post_meta($post->ID, 'raythompwebdesign-com_name', true);
$photographerurl = get_post_meta($post->ID, 'raythompwebdesign-com_url', true);
?>
<article class="post group" <?php post_class(); ?> <?php the_ID(); ?>>
<h1><?php the_title(); ?></h1>

<section class="byline"><?php echo $photographer; ?></span><a href="<?php echo $photographerurl ?>" target="_blank" class="photographerurl"><?php echo $photographerurl ?></a></section><!--end of by line-->

<div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
<figure class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
</figure></div>
<?php else : ?>
<a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo esc_html( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
</article><!--end of post group-->

<?php endwhile; ?>

<?php endif; ?>


</article>

<article class="contact-wide">
<h2>Send Comment</h2>
<?php comments_template(); ?>
</article>
	
</section>
<?php get_sidebar(); ?>
</section>


<?php get_footer(); ?> 