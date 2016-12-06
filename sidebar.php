

<aside id="blogrightside" class="group" role="complementary">

<<<<<<< HEAD
    <article class="blogbox">
        <h2>Twitter</h2>

    </article>

    <article class="blogbox">
=======
    <article class="blogbox"> 
        <h2>Twitter</h2> 

    </article>

    <article class="blogbox"> 
>>>>>>> origin/master

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>

        <?php endif; ?>

    </article>
<<<<<<< HEAD
    <article class="blogbox">
      
=======
    <article class="blogbox"> 
        <h2>Tag Cloud</h2> 
        <ul class="tagcloud"><?php 
            wp_tag_cloud($args);
            $args = array(
                'smallest'                  => 8, 
                'largest'                   => 22,
                'unit'                      => 'pt', 
                'number'                    => 45,  
                'format'                    => 'flat',
                'separator'                 => "\n",
                'orderby'                   => 'name', 
                'order'                     => 'ASC',
                'exclude'                   => null, 
                'include'                   => null, 
                'topic_count_text_callback' => default_topic_count_text,
                'link'                      => 'view', 
                'taxonomy'                  => 'post_tag', 
                'echo'                      => true,
                'child_of'                  => null, // see Note!
        ); 
            
            
            ?></ul>

>>>>>>> origin/master
    </article>

</aside>
