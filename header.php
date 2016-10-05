<!doctype html>

<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");} ?>

<html class="no-js" <?php language_attributes(); ?>>

<head>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>

<!--[if lt IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://outdatedbrowser.com/en">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<body <?php body_class($class); ?>>

<div id="wrapper_container">
 	

<header class="group">

<nav >
<ul id="innernav" > 
<?php
  // Checking if there's anything in Top Menu
  if ( has_nav_menu( 'main' ) ) {
  	// If there is, adds the Top Menu area
  	wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); 
  }
?>
</ul>
 

<?php  wp_nav_menu( array('menu' => 'mobile', 'container_id' => 'mobile-nav' ));?>


</nav>
<?php  if ( is_front_page() || is_page()) : ?>
	
<h1 id="logo"><span>RAYTHOMPSON-</span><span>WEBDEV</span>.COM</h1>
<?php else : ?>
<h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>-BLOG</h1>            
<?php endif;

$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) : ?>

<h2 class="site-description"><?php echo $description; ?></h2>

<?php endif; ?>




</header>



