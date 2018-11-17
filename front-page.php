<?php
/**
 * *PHP version 5
 *
 * Template Name :Home
 *
 * Home page | core/front-page.php.
 *
 * @category   Home_page
 * @package    Raythompsonwebdev-com
 * @subpackage Home_page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 get_header(); ?>

<div id="frontpage_container">
<?php echo do_shortcode('[slider]');?>
<div id="textboxfront">
<h1>Hello, I'm a Web Developer</h1>

<p>My name is Raymond. I am a web developer and I create custom wordPress themes, customise wordpress themes and build websites and web applications.</p>

<p>Whether it's for a small business or a personal goal, I can help you achieve your on-line goals with a website or web application specifically tailored for your needs.</p>
<section id="calltoaction">
            <article class="frntpgbox">
                <h1>Code</h1>
                    <ul>
                        <li>HTML/CSS</li>
                        <li>PHP</li>
                        <li>Javascript(ES6)</li>
                        <li></li>
                    </ul>
            
            </article>

            <article class="frntpgbox">
                    <h1>Optimisation</h1>
                    <ul>
                        <li>CRO</li>
                        <li>SEO</li>
                        <li>Google Analytics</li>
                 
                    </ul>

            </article>

            <article class="frntpgbox">
                    <h1>WordPress</h1>
                        <ul>
                            <li>Installation</li>
                            <li>Maintenance</li>
                            <li>Custom Themes</li>
                           
                        </ul>
            </article>

            <article class="frntpgbox">
                <h1>Maintenance</h1>
                    <ul>
                        <li>Security</li>
                        <li>Backups</li>
                        <li>Debugging</li>
                        
                    </ul>
            </article>
            
        </section>
<p>From idea to launch I can help you build your project with the focus on simplicity, usability and accessibility for all your users. I use clean semantic code and following latest web standards compliances and best practices. I can ensure any website or web application built can be found by most search engines, viewed within in most modern browsers and have fast page loading for a great user experience.</p>
 
</div>
</div>


<?php get_footer(); ?>
