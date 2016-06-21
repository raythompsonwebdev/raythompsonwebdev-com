

<aside id="blogrightside" class="group" role="complementary">

<article class="blogbox">
<h2>Search here</h2> 
<span class="social-1"><?php get_search_form(true); ?></span>
</article>
<article class="blogbox"> 

<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Primary Sidebar') ) : ?>

<?php endif; ?>

</article>
<article class="blogbox"> 
<h2>Tag Cloud</h2> 
<ul class="tagcloud"><?php wp_tag_cloud('smallest=8&largest=28&number=0&orderby=name&order=ASC'); ?></ul>

</article>

</aside>    