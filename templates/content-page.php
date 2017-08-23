<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package raythompsonwebdev-com
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!--Post entry Header-->
                <header class="byline">

                    <div class="entry-meta">
                       
                        <div class="meta-content">

                          
                        </div>
                        
                    </div>
                </header>

	<div class="entry">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'raythompsonwebdev-com' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<!--Post entry footer-->
                    <footer class="byline">
                       
                  <?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'raythompsonwebdev-com' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>

                        <p><?php
                            $lastmodified = get_the_modified_time('U');
                            $posted = get_the_time('U');
                            if ($lastmodified > $posted) {
                                echo "Edited " . human_time_diff(get_the_time('U'), get_the_modified_time('U')) . " later";
                            }
                            ?>
                        </p>

                    </footer>
</article><!-- #post-## -->