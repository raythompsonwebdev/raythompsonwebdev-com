<?php
/**
 * *PHP version 7.2.
 * 
 * Template Name: Gallery
 *
 * Archive Gallery | core/page-gallery.php.
 * 
 *
 * @category   Page_Gallery
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
				
				<li class="cat-active" category="prod-cnt"><?php esc_html_e( 'All', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="web-applications"><?php esc_html_e( 'From Scratch', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="wordpress"><?php esc_html_e( 'WordPress', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="bootstrap"><?php esc_html_e( 'Bootstrap', 'raythompsonwebdev-com' ); ?></li>

				<li class="" category="foundation"><?php esc_html_e( 'Foundation', 'raythompsonwebdev-com' ); ?></li>

			</ul>
		</nav>

		<br/>


		<!-- Panel Container Starts Here -->
		<?php
        $args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
		//if ( have_posts() ) :
			//while ( have_posts() ) :
            //the_post();
            ?>
            <!-- display slugs for custom post categories-->
            <div id="panel" class="prod-cnt<?php
            $customterms = get_the_terms( $post->ID, 'gallery-category' );
            foreach ( $customterms as $customterm ) {
                $pic = $customterm->slug . ' ';
                echo esc_html( $pic );
            }?>"<?php post_class(); ?> <?php the_ID(); ?> >

                <figure class="showcase-container " id="showcaseimg1">
                    <div class="showcase-img">
                        <?php the_post_thumbnail( 'websites' ); ?>
                    </div>
                    <figcaption class="showcase-content showcase">
                        <h1> <?php the_title(); ?></h1>
                    
                            <a href="<?php esc_url( the_permalink() ); ?>"><?php esc_html_e( 'See More..', 'raythompsonwebdev-com' ); ?></a>

                    </figcaption>

                </figure>

            </div>
            <!-- Panel Container Ends Here -->
		<?php	endwhile;?>
			
			
	

		<div class="clearfix"></div>

	</div><!-- End of Content -->

	<div class="clearfix"></div>

</div><!-- End of PhotoContainer -->

<div class="clearfix"></div>



<?php get_footer(); ?>
