<<<<<<< HEAD
<?php
/**
 * *PHP version 5
 * 
 * Header | core/header.php.
 * 
 * @category   Header
 * @package    Wordpress
 * @subpackage Header
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
?>
<!DOCTYPE html>
<?php if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 8")) {
    header("X-UA-Compatible: IE=7");
} ?>
=======
<!DOCTYPE html>
<<<<<<< HEAD
=======
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) {header("X-UA-Compatible: IE=7");} ?>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link rel="profile" href="http://gmpg.org/xfn/11" >
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
        <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-min.css" >

<<<<<<< HEAD
=======
    <head>

<<<<<<< HEAD
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <title><?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" >
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
        <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-min.css" >
=======
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
<meta charset="<?php bloginfo( 'charset' ); ?>" >
<meta name="msvalidate.01" content="4CB214A27E0A9871DDFEF492EF5A6AD2" />
<meta name="viewport" content="width=device-width, initial-scale=1" >
<title><?php bloginfo('name');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" >
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-min.css" >
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
        <!--[if lt IE 9]>
        <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ie-min.css" />
        <![endif]-->

        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

<<<<<<< HEAD
        <?php wp_head(); ?>
=======
<?php wp_head(); ?>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
    </head>

    <!--[if lt IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://outdatedbrowser.com/en">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <body <?php body_class(); ?>>

        <div id="wrapper_container">


            <header class="group">

<<<<<<< HEAD
                <?php // Display site icon or first letter as logo ?>
                <div class="site-logo">
                    <?php $site_title = get_bloginfo('name'); ?>
                    <a href=" <?php echo esc_url(home_url('/')); ?>" rel="home">
                        <div class="screen-reader-text">
                            <?php printf(esc_html__('Go to the home page of %1$s', 'raythompsonwebdev-com'), $site_title); ?>
=======
                    <?php // Display site icon or first letter as logo ?>
                <div class="site-logo">
                            <?php $site_title = get_bloginfo('name'); ?>
                    <a href=" <?php echo esc_url(home_url('/')); ?>" rel="home">
                        <div class="screen-reader-text">
                        <?php printf(esc_html__('Go to the home page of %1$s', 'raythompsonwebdev-com'), $site_title); ?>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
                        </div>
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            ?>
                            <div class="site-firstletter" aria-hidden="true">
<<<<<<< HEAD
                                <?php echo substr($site_title, 0, 1); ?>
                            </div>
                        <?php } ?>
                    </a>
                </div>


                <?php if (is_front_page() || is_page()) : ?>
                    <hgroup>
                        <h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

                    <?php else : ?>
                        <hgroup>
                            <h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

                        <?php
                        endif;

                        $description = get_bloginfo('description', 'display');

                        if ($description || is_customize_preview()) :
                            ?>
=======
    <?php echo substr($site_title, 0, 1); ?>
                            </div>
<?php } ?>
                    </a>
                </div>


                    <?php if (is_front_page() || is_page()) : ?>
                    <hgroup>
                        <h1 id="logo"><span>RAYTHOMPSON</span><span>WEBDEV</span>.CO.UK</h1>

                        <?php else : ?>
                        <hgroup>
                            <h1 id="logo-blog"><span>RAYTHOMPSON</span><span >WEBDEV</span>BLOG</h1>

                        <?php
                        endif;

                        $description = get_bloginfo('description', 'display');

                        if ($description || is_customize_preview()) :
                            ?>

<<<<<<< HEAD
                            <h2 class="site-description"><?php echo $description; ?></h2>
                        </hgroup>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

                            <h2 class="site-description"><?php echo $description; ?></h2>
                        </hgroup>

<<<<<<< HEAD

                    <?php endif; ?>
=======
                    <?php endif; ?>

                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'popperscores'); ?></button>
=======
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'popperscores' ); ?></button>
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84

                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'raythompsonwebdev-com'); ?></button>

<<<<<<< HEAD
=======
    }

>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864

>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
                    <?php
                    // Checking if there's anything in Top Menu
                    if (has_nav_menu('main')) {
                        // If there is, adds the Top Menu area
<<<<<<< HEAD
                        wp_nav_menu(array(
                            'menu' => 'Main',
                            'container' => 'nav',
                            'menu_class' => 'nav-menu'
                        ));
                    }
                    ?>


            </header>

            <!--Main content -->
<main id="main-content" class="group" role="main">
=======
                        wp_nav_menu(array('menu' => 'Main', 'container' => 'nav', 'menu_class' => 'nav-menu'));
                    }
                    ?>

<<<<<<< HEAD

            </header>
=======
</header>
>>>>>>> 0f8836b434da8d3e31955a7d44ed61c6333c4864
>>>>>>> 06bb6834ff1bdf6bc417acbbb75f423890046b84
