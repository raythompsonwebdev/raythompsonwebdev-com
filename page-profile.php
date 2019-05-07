<?php
/**
 * *PHP version 7.2
 *
 * Template Name: Profile
 *
 * Profile page | core/page-profile.php.
 *
 * @category   Profile_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Profile_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header();
?>

<div id="profile_container">

    <h1><?php echo esc_html( 'About Me', 'raythompsonwebdev-com' ); ?></h1>

    <article id="text-box-profile">

        <div class="introimg">
            <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">

                <img src="<?php echo esc_url('https://raythompsonwebdev.co.uk/wp-content/themes/raythompsonwebdev-com/images/raythompsonwebdev.jpg','display');?>" alt="<?php echo esc_attr_e('young-raythompsonwebdev','raythompsonwebdev-com');?>" rel="prefetch" />
            </a>
        </div>

        <p><?php echo __('I have a passion for web design and web development and like using HTML, CSS and Javascipt for front-end development, responsive web development and PHP and MySQL for back end development and WordPress theme development .','raythompsonwebdev-com');?></p>
<p><?php echo __('I became interested web design and development after attend a web design course at the East London Advanced Technology Training Center in East London between November 2011 and Oct 2012. I gained a city and guilds cerificate in basic web design and development');?></p>
        <p>
            <?php echo __('Since then whenever I am not working in public sector revenues and benefits during the day, I spend most of my free time building');?><strong><a href="<?php echo esc_url('https://raythompsonwebdev.co.uk/website-projects', 'display');?>" target="new"> web applications</a></strong><?php echo __(', experimenting with new coding techniques , attempting to solve coding problems and helping others when ever I can with any website related');?><strong><a href="<?php echo esc_url('https://raythompsonwebdev.co.uk/raythompsonwebdev-blog','display');?>" target="new"> problems</a></strong>.
        </p>
    

        <p><?php echo __('Web development I have noticed has changed rapidly over the past five years with things like responsive development being the standard and the rise of Javascript.');?> </p>
        <div class="clearfix"></div>
    </article>

    <?php echo do_shortcode('[chart]');?>

    <article id="text-box-profile-a">

        <p> 
            <?php echo esc_html('I continue to keep up to date as much as time will allow with the constant changes in web development by following online tutorials and doing coding exercises and challenges on websites like');?><strong><a href="<?php echo esc_url('https://www.freecodecamp.org/raythompsonwebdev','display');?>" target="new" > FreeCode Camp</a></strong> and<strong> <a href="<?php echo esc_url('https://www.codeacademy.com','display');?>" target="new">CodeAcademy</a></strong><?php echo esc_html(', listening to web development podcasts and attending local events, even short courses like');?> <strong><a href="<?php echo esc_url('https://vimeo.com/232481032','display');?>" target="new">Digital Futures 2017</a></strong><?php echo esc_html(', and volunteering at');?> <strong><a href="<?php echo esc_url('https://2018.london.wordcamp.org/attendees/','display');?>" target="new">WordCamp 2018</a></strong> in London &#046;
        </p>

        <p><?php echo esc_html('I do like coding websites and web applications from scratch but in most situations I will use a framework like laravell or vue or CMS like Wordpress. I  .');?> </p>

        <p><?php echo esc_html('Other than web development and my day job i enjoy spending time listeniing to music like 90\'s Hip Hop and Dancehall, Watching movies (Big Marvel movie fan) and spending time with family and friends.');?></p>

    </article>

    <?php echo do_shortcode('[hero]');?>

</div>

<div class="clearfix"></div>

<?php get_footer(); ?>
