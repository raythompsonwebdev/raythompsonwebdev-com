<?php get_header(); ?>

  	
<section id="main-content" class="group" role="main">
<section id="blogleftside">       	       	      	

<article id="blog" class="left-col">
<h1>Images</h1>

<?php

if ( have_posts() ) : while ( have_posts() ) : the_post();

//$photographer = get_post_meta($post_id->ID, $key = 'raythompwebdesign-com_name', $single = true);
//function get_post_meta( $post_id, $key = '', $single = false ) {
//    return get_metadata('post', $post_id, $key, $single);
//}


//$photographerurl = get_post_meta($post_id->ID, $key = 'raythompwebdesign-com_url',$single = true);

//function get_post_meta( $post_id, $key = '', $single = false ) {
//   return get_metadata('post', $post_id, $key, $single);
//}
//$photographerurl = get_metadata('post', $post_id, $key, $single);
//$photographer = get_metadata('post', $post_id, $key, $single);
?>

<article class="post group" 
<?php post_class(); ?> <?php the_ID(); ?>
>
<h1><?php the_title(); ?></h1>

<header class="byline">
 <div class="entry-meta">
           
   
    
    <?php popperscores_index_posted_on(); ?> 
    
    <!-- <span class="posted-on"><?php echo $photographer; ?></span>
    <span class="posted-on">
        <a href="<?php echo $photographerurl ?>" target="_blank" class="photographerurl">
            <?php echo $photographerurl ?></a></span>-->
   
    
 </div>
</header><!--end of by line-->

<div class="entry-attachment">

    <?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>

    <figure class="attachment"><a href="<?php echo wp_get_attachment_url($post_id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" ></a>
</figure>

</div>


<br/>
<footer class="byline">

<p class='right'>
<a class='comments-count' href='<?php the_permalink() ?>'><?php comments_number('0', '1', '%') ?></a>
</p>

<span class="bylinecat"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>

</footer>
    
    
    <?php else : ?>
<a href="<?php echo wp_get_attachment_url($post_id->ID) ?>" title="<?php echo esc_html( get_the_title($post_id), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>

    
    <?php endif; ?>
</article><!--end of post group-->

<?php endwhile; ?>

<?php endif; ?>


</article>

<section class="contact-wide">
<h1>Send Comment</h1>
<?php comments_template(); ?>
</section>
	
</section>

</section>


<?php get_footer(); ?> 