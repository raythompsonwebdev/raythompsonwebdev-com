<?php
/**
 * *PHP version 7.2.
 *
 * Header | core/header.php.
 *
 * @category   Header
 * @package    Raythompsonwebdev-com
 * @subpackage Header
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<link href="https://fonts.googleapis.com/css?family=Cabin|PT+Sans&display=swap" rel="stylesheet">
		
		<?php wp_head(); ?>
	</head>

	<!--[if lt IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://outdatedbrowser.com/en">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<body <?php body_class(); ?>>

		<div id="wrapper_container">

		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			
			</a>
		<?php endif; // End header image check. ?>

			<header class="group" role="banner">

				<?php // Display site icon or first letter as logo. ?>
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
						} else {
							?>
							<div class="site-firstletter" aria-hidden="true">

								<?php echo esc_html( substr( $site_title, 0, 1 ) ); ?>

							</div>
						<?php } ?>
					</a>
				</div>


				<?php if ( is_front_page() || is_page(array('about','contact','privacy-policy-2','archives')) ) : ?>
					<hgroup>
						<h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>
						
						<?php elseif ( is_page('projects') || 'project' == get_post_type() ) : ?>
			
						<hgroup>
						<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>PROJECTS</h1>
						
						<?php else : ?>
						<hgroup>
							<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( esc_html( $description ) || is_customize_preview() ) :	?>

							<h2 class="site-description">
								<?php _e( $description ); ?>
							</h2>
					</hgroup>
				<?php endif; ?>

				<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'raythompsonwebdev-com' ); ?></button>

				<?php
					// Checking if there's anything in Top Menu.
					if ( has_nav_menu( 'main' ) ) {
						// If there is, adds the Top Menu area.
						wp_nav_menu(
							array(
								'menu'       => 'Main',
								'container'  => 'nav',
								'menu_class' => 'nav-menu',
							)
						);
					}
				?>


			</header>

			<!--Main content -->
<main id="main-content" class="group" role="main">
