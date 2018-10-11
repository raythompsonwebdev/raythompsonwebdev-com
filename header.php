<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/css?family=Cabin:400,700">

		<?php wp_head(); ?>
	</head>

	<!--[if lt IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://outdatedbrowser.com/en">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<body <?php body_class(); ?>>

		<div id="wrapper_container">


			<header class="group" role="banner">

				<?php // Display site icon or first letter as logo ?>
				<div class="site-logo">

					<?php $site_title = get_bloginfo( 'name' ); ?>
				
					<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div class="screen-reader-text">
							
							<?php 
/* translators: %1$s:, CMSname: Wordpress. */
printf( esc_html_e( 'Go to the home page of %1$s', 'raythompsonwebdev-com' ), esc_html($site_title) ); ?>
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


				<?php if ( is_front_page() || is_page() ) : ?>
					<hgroup>
						<h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>
						
						<?php elseif(is_home() || is_single()) : ?>
			
						<hgroup>
						<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

					<?php else : ?>
						<hgroup>
							<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>GALLERY</h1>

						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );



if ( esc_html( $description ) || is_customize_preview() ) :
	?>

							<h2 class="site-description">
							<?php echo $description; ?></h2>
						</hgroup>


					<?php endif; ?>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'raythompsonwebdev-com' ); ?></button>

					<?php
					// Checking if there's anything in Top Menu
					if ( has_nav_menu( 'main' ) ) {
						// If there is, adds the Top Menu area
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
