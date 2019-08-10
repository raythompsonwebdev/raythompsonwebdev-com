<?php
/**
 * *PHP version 7.2.
 * 
 * Template Name: Projects
 *
 * Archive Gallery | core/page-projects.php.
 * 
 *
 * @category   Page_Projects
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk
 * @package    raythompsonwebdev.co.uk
 */

get_header();
?>

<h1><?php post_type_archive_title(); ?></h1>
<div class="main-text">
<p><?php echo esc_html( 'Check out websites and web applications I am currently working on.', 'raythompsonwebdev-com' ); ?></p>
</div>



<div id="photocontainer" ><!-- Container Starts Here -->

	<div class="content">

		<nav class="menuSwitch" role="navigation">

			<ul>
				
				<li class="cat-active" category="prod-cnt"><?php _e( 'All', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="vanilla"><?php _e( 'Vanilla', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="wordpress"><?php _e( 'WordPress', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="bootstrap"><?php _e( 'Bootstrap', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="foundation"><?php _e( 'Foundation', 'raythompsonwebdev-com' ); ?></li>

			</ul>
		</nav>

		<br/>


		<!-- Panel Container Starts Here -->
		<?php
        $args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
       if ( have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post();
		
			//while ( have_posts() ) :
            //the_post();
            ?>
            <!-- display slugs for custom post categories-->
            <div id="panel" class="prod-cnt
            <?php
            $customterms = get_the_terms( $post->ID, 'project-category' );
            foreach ( $customterms as $customterm ) {
                $pic = $customterm->slug . ' ';
                echo esc_html( $pic );
            }?>"<?php post_class(); ?><?php the_ID(); ?> >

                <figure class="showcase-container " id="showcaseimg1">
                    <div class="showcase-img">
                        <?php the_post_thumbnail( 'websites' ); ?>
                    </div>
                    <figcaption class="showcase-content showcase">
                        <h1> <?php the_title(); ?></h1>
                    
                            <a href="<?php the_permalink(); ?>">
                                <?php _e( 'See More..', 'raythompsonwebdev-com' ); ?>
                            </a>

                    </figcaption>

                </figure>

            </div>
            <!-- Panel Container Ends Here -->
        <?php	endwhile;?>
        
        <?php	endif;?>
					

		<div class="clearfix"></div>

	</div><!-- End of Content -->

	<div class="clearfix"></div>

</div><!-- End of PhotoContainer -->

<div class="clearfix"></div>



<?php get_footer(); ?>

