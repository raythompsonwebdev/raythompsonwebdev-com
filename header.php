<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raythompsonwebdev-com
 */

?>
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'raythompsonwebdev-com' ); ?></a>


	<header id="masthead" class="site-header">

		<!-- .site-branding -->
		<div class="site-branding">

			<div class="site-logo">

				<?php $raythompsonwebdev_com_site_title = get_bloginfo( 'name' ); ?>

				<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<div class="screen-reader-text">
						<?php
							/* translators: %1$s:, CMSname: WordPress. */
							printf( esc_html_e( 'Go to the home page of %1$s', 'raythompsonwebdev-com' ), esc_html( $raythompsonwebdev_com_site_title ) );
						?>
					</div>
						<?php
						if ( has_custom_logo() ) {
							the_custom_logo();
						}
						?>
				</a>

			</div>

			<?php	if ( is_front_page() || is_page( array( 'about', 'contact', 'privacy-policy', 'archive-page' ) ) ) : ?>

			<hgroup>
				<h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

				<?php elseif ( is_page( 'projects' ) || 'project' === get_post_type() ) : ?>

			<hgroup>
				<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>PROJECTS</h1>

				<?php	else : ?>
			<hgroup>
				<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>
					<?php
				endif;
				$raythompsonwebdev_com_description = get_bloginfo( 'description', 'display' );
				if ( $raythompsonwebdev_com_description || is_customize_preview() ) :
					?>
				<h2 class="site-description"><?php echo $raythompsonwebdev_com_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
				<?php endif; ?>
			</hgroup>

		</div>
		<!-- #site-navigation -->

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( ' Menu', 'raythompsonwebdev-com' ); ?></button>

		<nav id="site-navigation" class="main-navigation">

			<?php

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
		</nav>

	</header><!-- #masthead -->

	<?php if ( is_home() || is_archive() ) : ?>
	<span class="social-1"><?php get_search_form(); ?></span>
	<?php endif; ?>

	<!-- #page start -->
	<main id="page">
