

<aside id="side-bar" class="group" role="complementary">

    
    <article class="side-bar-box"> 

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>

        <?php endif; ?>

    </article>
    
    
    <article class="side-bar-box"> 
        <h2>Tag Cloud</h2> 
        <ul class="tagcloud">
            
            <?php wp_tag_cloud();?></ul>

    </article>
    
    <article class="side-bar-box"> 

        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar')) : ?>

        <?php endif; ?>

    </article>

</aside>    