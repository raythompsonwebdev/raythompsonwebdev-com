<?php
/**
 * *PHP version 7.2.
 *
 * Header | core/header.php.
 *
 * @category   Header
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

?>
<<<<<<< HEAD
=======
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

<!--Since Chrome 73, preloading can be used along with responsive images to combine both patterns for much faster image loading.-->
<!-- <link
  rel="preload"
  as="image"
  href="wolf.jpg"
  imagesrcset="wolf_400px.jpg 400w, wolf_800px.jpg 800w, wolf_1600px.jpg 1600w"
  imagesizes="50vw"
/> -->
>>>>>>> underscores

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >
	<link rel="preconnect" href="https://fonts.gstatic.com">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php wp_head(); ?>
	</head>

	<!--[if lt IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://outdatedbrowser.com/en">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<body <?php body_class(); ?>>

		<div id="wrapper_container">


			<header class="group" role="banner">

				<div class="site-logo">

        <?php $site_title = get_bloginfo( 'name' ); ?>

					<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div class="screen-reader-text">
							<?php
								/* translators: %1$s:, CMSname: WordPress. */
								printf( esc_html_e( 'Go to the home page of %1$s', 'raythompsonwebdev-com' ), esc_html( $site_title ) );
							?>
						</div>
						<?php
							if ( has_custom_logo() ) {
								the_custom_logo();
							}
						?>

					</a>
				</div>

<<<<<<< HEAD
=======
			<?php	if ( is_front_page() || is_page( array( 'about', 'contact', 'privacy-policy', 'archive-page' ) ) ) : ?>
>>>>>>> underscores

				<?php if ( is_front_page() || is_page( array( 'about', 'contact', 'privacy-policy-2', 'archive-page' ) ) ) : ?>
					<hgroup>
						<h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

						<?php elseif ( is_page( 'projects' ) || 'project' === get_post_type() ) : ?>

						<hgroup>
						<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>PROJECTS</h1>

						<?php else : ?>
						<hgroup>
							<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

							<?php
						endif;

						$raythompsonwebdev_com_description = get_bloginfo( 'description', 'display' );
						if ( $raythompsonwebdev_com_description || is_customize_preview() ) :
							?>

							<h2 class="site-description">
							<?php echo $raythompsonwebdev_com_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</h2>
				<?php endif; ?>
					</hgroup>


				<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'raythompsonwebdev-com' ); ?></button>

				<?php
					// Checking if there's anything in Main Menu.
				if ( has_nav_menu( 'main' ) ) {
					wp_nav_menu(
						array(
							'menu'           => 'main',
							'container'      => 'nav',
							'container_id'   => 'main-menu',
							'menu_class'     => 'nav-menu',
							'theme_location' => 'Main',

						)
					);
				}
				?>

<<<<<<< HEAD

			</header>
	<?php if ( is_home() || is_archive() ) : ?>
	<span class="social-1"><?php get_search_form(); ?></span>
	<?php endif; ?>
		<!--Main content -->
<main id="main-content" class="group" role="main">
	<!--search form -->

=======
	<?php if ( is_home() || is_archive() ) : ?>
	<span class="social-1"><?php get_search_form(); ?></span>
	<?php endif; ?>

	<!-- #page start -->
	<main id="page">
>>>>>>> underscores
