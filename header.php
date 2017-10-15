<!doctype html>
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");} ?>

<html class="no-js" <?php language_attributes(); ?>>

<head>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title><?php bloginfo('name');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />-->
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-min.css" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

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
                        <?php printf( esc_html__('Go to the home page of %1$s', 'raythompsonwebdev-com'), $site_title ); ?>
                    </div>
                    <?php
                    if ( has_custom_logo() ) {
                            the_custom_logo();
                    } else { ?>
                            <div class="site-firstletter" aria-hidden="true">
                                    <?php echo substr($site_title, 0, 1); ?>
                            </div>
                    <?php } ?>
            </a>
    </div>


<?php  if ( is_front_page() || is_page()) : ?>
 <hgroup>
    <h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

<?php else : ?>
<hgroup>
    <h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>
<?php endif;

    $description = get_bloginfo( 'description', 'display' );

    if ( $description || is_customize_preview() ) : ?>

    <h2 class="site-description"><?php echo $description; ?></h2></hgroup>


<?php endif;?>


<?php
    // Checking if there's anything in Top Menu
    if ( has_nav_menu( 'main' ) ) {
    // If there is, adds the Top Menu area
    wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' ));

    }

    wp_nav_menu( array('menu' => 'mobile', 'container' => 'nav', 'container_id' => 'mobile-nav' ));
  



 ?>



</header>
