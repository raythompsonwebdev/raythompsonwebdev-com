<?php
/**
 * PHP version 7.2.
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
 */

	$raythompsonwebdev_com_slider_panel_text = '[
		{
			"id": "1",
			"title": "Adobe Certified Associates",
			"header": "Visual Communication: Photoshop CS4",
			"subheader": "Topics",
			"task1": "Setting project requirements",
			"task2": "Identifying Design Elements",
			"task3": "Understanding Photoshop Interface",
			"task4": "Manipulating Images",
			"task5": "Evaluating Digital Images",
			"buttonname": "Adobe",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Large-Photoshop-Certicate.jpg"
		}, {
			"id": "2",
			"title": "ELATT",
			"header": "City & Guilds ITQ Level 1,2,3 Web Design",
			"subheader": "Topics",
			"task1": "Improving productivity using IT",
			"task2": "IT Communication Fundementals",
			"task3": "Adding Content",
			"task4": "IT User fundementals",
			"task5": "Organizing Content",
			"buttonname": "ELATT",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/ITQ-USERS-LEVEL3-LARGE.jpg"
		}, {
			"id": "3",
			"title": "Codepen",
			"header": "Various",
			"subheader": "Topics",
			"task1": "Product Landing Page",
			"task2": "Technical Documentation Page",
			"task3": "WeatherApp",
			"task4": "Random Quote Generator",
			"task5": "Personal Portfolio",
			"buttonname": "Codepen",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/codepen-io-your-work-2020-10-17-22.png"
		}, {
			"id": "4",
			"title": "FreeCodeCamp",
			"header": "Frontend Developer Certificate",
			"subheader": "Topics",
			"task1": "Responsive Web Design Certification",
			"task2": "Javascript Algorithms And Data Structures",
			"task3": "Learning Python",
			"task4": "Javascript Projects",
			"task5": "Responsive Web Design Projects",
			"buttonname": "FreeCodeCamp",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/freecodecamp-org-certification-raythompsonwebdev-javascript-algorithms-and-data-structures-2020-09-30-13_44_12.png"
		}, {
			"id": "5",
			"title": "Lynda.com",
			"header": "Lynda.com",
			"subheader": "Topics",
			"task1": "Become a Front-End Web Developer",
			"task2": "Become a Junior Developer",
			"task3": "Programming Fundementals",
			"task4": "CSS Fundementals",
			"task5": "Javascript Essentials",
			"buttonname": "Lynda.com",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/CertificateOfCompletion_Javascript-Essential-Training-2011.png"
		}, {
			"id": "6",
			"title": "Python for Everybody (PY4E)",
			"header": "PY4E",
			"subheader": "Topics",
			"task1": "Introduction to Python",
			"task2": "Python Data Structures",
			"task3": " ",
			"task4": " ",
			"task5": " ",
			"buttonname": "PY4E",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/py4e-badges.png"
		}, {
			"id": "7",
			"title": "Code Academy",
			"header": "Various",
			"subheader": "Topics",
			"task1": "Learn Ruby",
			"task2": "Learn HTML",
			"task3": "Learn Javascript",
			"task4": "Learn PHP",
			"task5": " ",
			"buttonname": "Code Academy",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/codecademy-profiles-raythompsonwebdev-certificates.png"
		}, {
			"id": "8",
			"title": "Udacity",
			"header": "Various",
			"subheader": "Topics",
			"task1": "Progressive Web Apps",
			"task2": "Networking for Web Developers(http)",
			"task3": "Data Structures & Algorithms in Python",
			"task4": "Website Performance Optimisation",
			"task5": "Version Control with Git",
			"buttonname": "Udacity",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Udacity_logo.png"
		}, {
			"id": "9",
			"title": "Digital Futures 2017",
			"header": "Interactive Programming",
			"subheader": "Topics",
			"task1": "Debate Skills with DebateMate.",
			"task2": "Musical Composition.",
			"task3": "Block programming using Crumble.",
			"task4": "Negotiation skills with CitizenUK.",
			"task5": "Music creation using Sonic Pi",
			"buttonname": "Digital Futures",
			"bgimage": "wp-content/themes/raythompsonwebdev-com/images/certificates/Digital-Futures-2017-Certificate-of-Participation-large.jpg"
		}
	]';

	$raythompsonwebdev_com_slider_buttons = '[
		{
			"id": "1",
			"buttonname": "Adobe"
		}, {
			"id": "2",
			"buttonname": "ELATT"
		}, {
			"id": "3",
			"buttonname": "Codepen"
		}, {
			"id": "4",
			"buttonname": "FreeCodeCamp"
		}, {
			"id": "5",
			"buttonname": "Lynda.com"
		}, {
			"id": "6",
			"buttonname": "PY4E"
		}, {
			"id": "7",
			"buttonname": "Code Academy"
		}, {
			"id": "8",
			"buttonname": "Udacity"
		}, {
			"id": "9",
			"buttonname": "Digital Futures"
		}
	]';

	$raythompsonwebdev_com_slider_panels = json_decode( $raythompsonwebdev_com_slider_panel_text, true );
	$raythompsonwebdev_com_courses_tabs  = json_decode( $raythompsonwebdev_com_slider_buttons, true );

?>
	<section id="prof_cont-a">

	<h1><?php esc_html_e( 'Web Development Activities', 'raythompsonwebdev-com' ); ?></h1>

	<!-- #hero-slider -->
	<article class="hero-slider">
		<ul id="list">
			<?php foreach ( $raythompsonwebdev_com_courses_tabs as $raythompsonwebdev_com_courses_tab ) : ?>
		<li>
			<a href="#" rel="#panel-<?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['id'] ), 'raythompsonwebdev-com' ); ?>" class="hero-btn active" title="<?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['buttonname'] ), 'raythompsonwebdev-com' ); ?>" ><?php printf( '%s', esc_html( $raythompsonwebdev_com_courses_tab['buttonname'] ), 'raythompsonwebdev-com' ); ?></a>
		</li>
			<?php endforeach; ?>

		</ul>
		<!--mask-->
		<div class="mask">
			<!--slider body -->
			<div class="slider-body">

				<?php foreach ( $raythompsonwebdev_com_slider_panels as $raythompsonwebdev_com_slider_panel ) : ?>

				<article class="panel" id="panel-<?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['id'] ), 'raythompsonwebdev-com' ); ?>">

					<h2><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['title'] ), 'raythompsonwebdev-com' ); ?> </h2>

					<figure class="slider-panel">

						<a
							href="<?php echo esc_url( home_url( '/' ) ); ?><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['bgimage'] ), 'raythompsonwebdev-com' ); ?>"
							class="fancybox"
							title="<?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['title'] ), 'raythompsonwebdev-com' ); ?>">
							<span></span>
						</a>

						<figcaption>
							<h3><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['header'] ), 'raythompsonwebdev-com' ); ?></h3>
							<h4><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['subheader'] ), 'raythompsonwebdev-com' ); ?></h4>

							<ul>
								<li><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task1'] ), 'raythompsonwebdev-com' ); ?></li>
								<li><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task2'] ), 'raythompsonwebdev-com' ); ?></li>
								<li><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task3'] ), 'raythompsonwebdev-com' ); ?></li>
								<li><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task4'] ), 'raythompsonwebdev-com' ); ?></li>
								<li><?php printf( '%s', esc_html( $raythompsonwebdev_com_slider_panel['task5'] ), 'raythompsonwebdev-com' ); ?></li>
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




