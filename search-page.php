<?php get_header(); ?>

<section id="main-content" class="group" role="main">       	

<section id="blogleftside"> 


<article id="blog" class="left-col">

<article class="post group">
	<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'raythompwebdesign-com' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_content();

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'raythompwebdesign-com' ),
				'next_text'          => __( 'Next page', 'raythompwebdesign-com' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'raythompwebdesign-com' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			echo 'Sorry No info';

		endif;
		?>


<br/>
</article>

</section>
<?php get_sidebar(); ?>
</section>
          



<div class="clearfix"></div>
<?php get_footer(); ?>