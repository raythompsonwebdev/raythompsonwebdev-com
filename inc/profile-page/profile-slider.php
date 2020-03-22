<?php
/**
 * *PHP version 7.2.
 *
 * Profile Page Courses Slider | inc/profile-chart.php.
 *
 * @category   Profile page courses slider
 * @package    WordPress
 * @subpackage raythompsonwebdev-com
 * @since      1.0
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 *
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 * 
 */

	require 'slider-panel-text.php';
	require 'slider-buttons.php';

	$slider_panels = json_decode( $slider_panel_text, true );
	$courses_tabs  = json_decode( $slider_buttons, true );

?>
	<section id="prof_cont-a">

	<h1><?php esc_html_e( 'Web Development Courses', 'raythompsonwebdev-com' ); ?></h1>

	<!-- #hero-slider -->
	<article class="hero-slider">

	  <ul id="list">
			<?php foreach ( $courses_tabs as $courses_tab ) : ?>   
			  
		  <li>
			  <a href="#" rel="#panel-<?php echo esc_html( $courses_tab['id'] ); ?>" class="hero-btn active" title="<?php echo esc_html( $courses_tab['title'] ); ?>" ><?php echo esc_html( $courses_tab['buttonname'] ); ?></a>
		  </li>             
			  
		<?php endforeach; ?>

	  </ul>
	  <!--mask-->
	  <div class="mask">
		  <!--slider body -->
		  <div class="slider-body">

			  <?php foreach ( $slider_panels as $slider_panel ) : ?> 

				<article class="panel" id="panel-<?php echo esc_html( $slider_panel['id'] ); ?>">

					<h2><?php echo esc_html( $slider_panel['title'], 'raythompsonwebdev-com' ); ?> </h2>

					<figure class="slider-panel">

						<a 
						  href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( $slider_panel['bgimage'] ); ?>" 
						  class="fancybox" 
						  title="<?php echo esc_attr( $slider_panel['title'], 'raythompsonwebdev-com' ); ?>">
						  <span></span>                                  
						</a>

						<figcaption>
							<h3><?php echo esc_html( $slider_panel['header'], 'raythompsonwebdev-com' ); ?></h3>
							<h4><?php echo esc_html( $slider_panel['topics'], 'raythompsonwebdev-com' ); ?></h4>

							<ul>
								<li><?php echo esc_html( $slider_panel['task1'], 'raythompsonwebdev-com' ); ?></li>
								<li><?php echo esc_html( $slider_panel['task2'], 'raythompsonwebdev-com' ); ?></li>
								<li><?php echo esc_html( $slider_panel['task3'], 'raythompsonwebdev-com' ); ?></li>
								<li><?php echo esc_html( $slider_panel['task4'], 'raythompsonwebdev-com' ); ?></li>
								<li><?php echo esc_html( $slider_panel['task5'], 'raythompsonwebdev-com' ); ?></li>
							</ul>

							<div class="clearfix"></div>

						</figcaption>

					</figure>

				</article>
			  <?php endforeach; ?>

		  </div>
		  <!--slider body end-->
	  </div>
	  <!-- .mask end -->

	</article>
	<!-- hero-slider end -->

  </section>
<?php




