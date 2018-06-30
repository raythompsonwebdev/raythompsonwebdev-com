<?php
/**
 * *PHP version 5
 * 
 * Template Name: Profile
 *
 * Privacy page | core/page-privacy.php.
 *
 * @category   Privacy_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Privacy_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

<h1><?php the_title(); ?></h1>

<!--profile panel-->
<div id="profile_container">

    <section id="prof_cont">

        <h1><?php _e('Web Skills Graph', 'raythompsonwebdev-com'); ?></h1>

        <article id="chart">

            <ul id="numbers">

                <li><span><?php _e('100%', 'raythompsonwebdev-com'); ?></span></li>

                <li><span><?php _e('80%', 'raythompsonwebdev-com'); ?></span></li>

                <li><span><?php _e('60%', 'raythompsonwebdev-com'); ?></span></li>

                <li><span><?php _e('40%', 'raythompsonwebdev-com'); ?></span></li>

                <li><span><?php _e('20%', 'raythompsonwebdev-com'); ?></span></li>

                <li><span><?php _e('0%', 'raythompsonwebdev-com'); ?></span></li>

            </ul>


            <ul id="bars">

                <li>
                    <div data-percentage="90" class="bar"></div>
                    <span><?php _e('CSS', 'raythompsonwebdev-com'); ?></span>
                </li>

                <li>
                    <div data-percentage="75" class="bar"></div>
                    <span><?php _e('Jquery/Ajax', 'raythompsonwebdev-com'); ?></span>
                </li>

                <li>
                    <div data-percentage="90" class="bar"></div>
                    <span><?php _e('HTML', 'raythompsonwebdev-com'); ?></span>
                </li>

                <li>
                    <div data-percentage="65" class="bar"></div>
                    <span><?php _e('Wordpress', 'raythompsonwebdev-com'); ?></span>
                </li>

                <li>
                    <div data-percentage="65" class="bar"></div>
                    <span><?php _e('PHP/MYSQL', 'raythompsonwebdev-com'); ?></span>
                </li>

                <li>
                    <div data-percentage="70" class="bar"></div>
                    <span><?php _e('Javascript', 'raythompsonwebdev-com'); ?></span>
                </li>

            </ul>


        </article>

    </section><!--end of prof cont-->

    <?php the_content(); ?>

    <section id="prof_cont-a"><!--prof cont-->

        <h1><?php _e('Web Development Related Courses Taken', 'raythompsonwebdev-com'); ?></h1>

        <article class="hero-slider"><!-- #hero-slider -->

            <ul id="list">
                <li>
                    <a href="#" rel="#panel-1" class="active" title="<?php esc_attr_e('Adobe Certificate in Visual Communication', 'raythompsonwebdev-com');?>" ><?php _e('Adobe', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-2" title="<?php esc_attr_e('City and Guilds Web Design Certificate Level One');?>"> <?php _e('ELATT', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-3" title="<?php esc_attr_e('City and Guilds Web Design Certificate Level Two');?>"><?php _e('Udacity', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-4" title="<?php esc_attr_e('City and Guilds Web Design Certificate Level Three');?>"><?php _e('FreeCodeCamp', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-5" title="<?php esc_attr_e('Lynda-com online course certifications');?>"><?php _e('Lynda.com', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-6" title="<?php esc_attr_e('Shaw Academy Online course certificate');?>"><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-7" title="<?php esc_attr_e('Shaw Academy course certificate');?>"><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-8" title="<?php esc_attr_e('Shaw Academy course certificate');?>"><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></a>
                </li>
                <li>
                    <a href="#" rel="#panel-9" title="<?php esc_attr_e('Digital-Futures-2017'); ?>"><?php _e('Digital Futures 2017', 'raythompsonwebdev-com'); ?></a>
                </li>
            </ul>

            <div class="mask"><!--mask-->
                <div class="slider-body"><!--slider body -->

                    <article class="panel" id="panel-1">

                        <h2><?php _e('Adobe Certified Associates', 'raythompsonwebdev-com'); ?> </h2>

                        <figure class="abobe">

                            <a href="<?php echo esc_url(home_url('/') );?>/wp-content/uploads/2018/03/Large-Photoshop-Certicate-.jpg" class="fancybox" title="<?php esc_attr_e('Adobe Certificate in Visual Communication', 'raythompsonwebdev-com');?>">
                                <img src="<?php echo esc_url(home_url('/') );?>/wp-content/uploads/2018/03/Small-photoshop-Certicate.jpg" alt="<?php esc_attr_e('Adobe Certificate in Visual Communication', 'raythompsonwebdev-com');?>">
                            </a>


                            <figcaption>
                            <h3><?php _e('Visual Communication: Photoshop CS4', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>
                                
                                <ul>
                                    <li>
                                        <a href="#"><?php _e('Setting project requirements', 'raythompsonwebdev-com'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e('Identifying Design Elements', 'raythompsonwebdev-com'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e('Understanding Photoshop Interface', 'raythompsonwebdev-com'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e('Manipulating Images', 'raythompsonwebdev-com'); ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php _e('Evaluating Digital Images', 'raythompsonwebdev-com'); ?></a>
                                    </li>

                                </ul>

                                <div class="clearfix"></div>
                            </figcaption>


                        </figure>

                    </article>

                    <article class="panel" id="panel-2">

                        <h2><?php _e('East London Advanced Technology Training', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="cert">

                            <a href="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/ITQ-USERS-LEVEL1-LARGE.jpg" class="fancybox" title="<?php esc_attr_e('City and Guilds Level One, Two, Three', 'raythompsonwebdev-com');?>">

                                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/ITQ-USERS-LEVEL1-SMALL.gif" alt="<?php esc_attr_e('City and Guilds Level One, Two, Three', 'raythompsonwebdev-com');?>">

                            </a>

                            <figcaption>
                            <h3><?php _e('City & Guilds ITQ Level 1,2,3 Web Design', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>
  
                                <ul>
                                    <li>
                                    <a href="#">
                                    <?php _e('Improving productivity using IT', 'raythompsonwebdev-com'); ?></a>
                                    </li>
                                    <li>
                                    <a href="#">
                                    <?php _e('IT Communication Fundementals', 'raythompsonwebdev-com'); ?>
                                    
                                    </a>
                                    </li>

                                    <li><a href="#"><?php _e('Adding Content', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('IT User fundementals', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Organizing Content', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Using the Internet', 'raythompsonwebdev-com'); ?></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>
                        </figure>


                    </article>

                    <article class="panel" id="panel-3">

                        <h2><?php _e('Udacity', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="abobe">

                            <a href="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/Large-Udemy-Certicate-.jpg" class="fancybox" title="<?php esc_attr_e('Udemy.com', 'raythompsonwebdev-com');?>">

                                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/Udemy-Small.jpg" alt="<?php esc_attr_e('Udemy.com', 'raythompsonwebdev-com');?>">

                            </a>
                            <figcaption>
                                <h3><?php _e('  Udacity', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>
   
                                <ul>
                                    <li><a href="#"><?php _e('Progressive Web Apps', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Networks for webdevelopers', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Intro to Javascript', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('ES2016', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Git', 'raythompsonwebdev-com'); ?></a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>

                    </article>

                    <article class="panel" id="panel-4">

                        <h2><?php _e('FreeCodeCamp', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="cert">

                            <a href="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/FreeCodeCamp-large.png" class="fancybox" title="<?php esc_attr_e('FreeCode Camp', 'raythompsonwebdev-com');?>">

                                <img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/FreeCodeCamp-small.png" alt="<?php esc_attr_e('FreeCode Camp', 'raythompsonwebdev-com');?>">

                            </a>
                            <figcaption>
                            <h3><?php _e('Frontend Developer Certificate', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                                <ul>
                                    <li><a href="#"><?php _e('HTML5/CSS3', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Javascript', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Jquery', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Basic Algorithims', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('JSON/APIs', 'raythompsonwebdev-com'); ?></a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-5">

                        <h2><?php _e('Lynda.com', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="abobe">

                            <a 
                            href="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/lynda_logo1r-d_72x72.png" 
                            class="fancybox" 
                            title="<?php esc_attr_e('Lynda.com', 'raythompsonwebdev-com');?>">

                                <img 
                                src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/2018/03/lynda_logo1k-d_72x72.png" 
                                alt="<?php esc_attr_e('Lynda.com', 'raythompsonwebdev-com');?>"
                                >

                            </a>

                            <figcaption>
                            <h3><?php _e('Lynda.com', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                                <ul id="lyndalinks">
                                    <li>
                                    <a 
                                    class="lyndalink" 
                                    href="<?php echo esc_url('http://www.linkedin.com/learning/paths/become-a-front-end-web-developer', 'raythompsonwebdev-com'); ?>"
                                    ><?php _e('Become a Front-End Web Developer');?></a>
                                    
                                    </li>
                                    <li>
                                    <a 
                                    class="lyndalink" 
                                    href="<?php echo esc_url('http://www.linkedin.com/learning/paths/become-a-junior-wordpress-developer', 'raythompsonwebdev-com'); ?>"><?php _e('Become a Junior Developer');?> </a>
                                    </li>

                                    <li>
                                    <a 
                                    class="lyndalink" 
                                    href=" <?php echo esc_url('http://www.linkedin.com/learning/foundations-of-programming-fundamentals', 'raythompsonwebdev-com'); ?>"><?php _e('Foundations of Programming Fundementals');?> </a>
                                    
                                    </li>
                                    <li>
                                    <a 
                                    class="lyndalink" 
                                    href="<?php echo esc_url('http://www.linkedin.com/learning/css-fundamentals',                  'raythompsonwebdev-com'); ?>"><?php _e('CSS Fundementals');?></a>
                                    
                                    </li>

                                    <li>
                                    <a 
                                    class="lyndalink" 
                                    href="<?php echo esc_url('http://www.linkedin.com/learning/javascript-essential-training', 'raythompsonwebdev-com'); ?>"><?php _e('Javascript Essentials');?></a>
                                    </li>

                                    <li>
                                   <a 
                                   class="lyndalink" 
                                   href="<?php echo esc_url('http://www.linkedin.com/learning/jquery-essential-training-2', 'raythompsonwebdev-com'); ?>">
                                   <?php _e('jQuery Essential Training');?></a>
                                    </li>

                                    <br/>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-6">

                        <h2><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="cert">

                            <a href="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Mobile-web-applications-Certificate-Foundation-large.jpg" class="fancybox" title="<?php esc_attr_e('Mobile-web-applications-Certificate-Foundation', 'raythompsonwebdev-com');?>">

                                <img src="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Mobile-web-applications-Certificate-Foundation-small.jpg" 
                                alt="<?php esc_attr_e('Mobile-web-applications-Certificate-Foundation', 'raythompsonwebdev-com');?>"
                                
                                >

                            </a>

                            <figcaption>
                            <h3><?php _e('Mobile App Development', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                                <ul>
                                    <li><a href="#"><?php _e('Introduction to Mobile App Development', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Designing our App', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('User Interfaces with HTML', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Coding Functions', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Web Hosting/Deploying Apps', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Mobile App Dev Life Cycle', 'raythompsonwebdev-com'); ?></a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>

                    </article>

                    <article class="panel" id="panel-7">

                        <h2><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="cert">

                            <a href="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Digital-Marketing-Certificate-Foundation.jpg" class="fancybox" title="<?php esc_attr_e('Digital-Marketing-Certificate-Foundation', 'raythompsonwebdev-com');?>">

                                <img src="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Digital-Marketing-Certificate-Foundation-small.jpg" 
                                alt="<?php esc_attr_e('Digital-Marketing-Certificate-Foundation', 'raythompsonwebdev-com');?>"

                            </a>

                            <figcaption>
                            <h3><?php _e('Diploma in Digital Marketing', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                                <ul>
                                    <li><a href="#"><?php _e('Adwords/Pay Per Click', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Search Engine Optimisation', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Affiliate Marketing', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Social Media', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Web Analytics', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Blogging', 'raythompsonwebdev-com'); ?></a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-8">

                        <h2><?php _e('Shaw Academy', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="cert">

                            <a href="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Content-Marketing-Certificate-Foundation.jpg" class="fancybox" title="<?php esc_attr_e('Digital-Marketing-Certificate-Foundation', 'raythompsonwebdev-com' );?>">

                                <img src="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Content-Marketing-Certificate-Foundation-Small.jpg" 
                                alt="<?php esc_attr_e('Digital-Marketing-Certificate-Foundation', 'raythompsonwebdev-com' );?>"

                            </a>

                            <figcaption>
                            <h3><?php _e('Diploma in Blogging & Content Marketing', 'raythompsonwebdev-com'); ?></h3>
                                <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                                <ul>
                                    <li><a href="#"><?php _e('Blogging', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Vlogging', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Content Marketing', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Building online communities', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Content curation', 'raythompsonwebdev-com'); ?></a></li>
                                    <li><a href="#"><?php _e('Monetising blogs', 'raythompsonwebdev-com'); ?></a></li>

                                </ul>

                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-9">

                        <h2><?php _e('Digital Futures 2017', 'raythompsonwebdev-com'); ?></h2>

                        <figure class="abobe">

                        <a href="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Digital-Futures-2017-Certificate-of-Participation-large.jpg" class="fancybox" title="<?php esc_attr_e('Digital-Futures-2017-Certificate-of-Participation','raythompsonwebdev-com');?>">
                            <img src="<?php echo esc_url(home_url('/'));?>/wp-content/uploads/2018/03/Digital-Futures-2017-Certificate-of-Participation-small.jpg" 
                            alt="<?php esc_attr_e('Digital-Futures-2017-Certificate-of-Participation','raythompsonwebdev-com');?>">
                            </a>
                        <figcaption>
                            <h3><?php _e('Interactive Programming', 'raythompsonwebdev-com'); ?></h3>
                            <h4><?php _e('Topics :', 'raythompsonwebdev-com'); ?></h4>

                            <ul>
                                <li><a href=""><?php _e('Debate Skills with DebateMate.', 'raythompsonwebdev-com'); ?></a></li>
                                <li><a href=""><?php _e('Musical Composition.', 'raythompsonwebdev-com'); ?></a></li>
                                <li><a href=""><?php _e('Block programming using Crumble.', 'raythompsonwebdev-com'); ?></a></li>
                                <li><a href=""><?php _e('Negotiation skills with CitizenUK.', 'raythompsonwebdev-com'); ?></a></li>
                                <li><a href=""><?php _e('Music creation using Sonic Pi.', 'raythompsonwebdev-com'); ?></a></li>
                                <li><a href=""><?php _e('Conflict Resolution.', 'raythompsonwebdev-com'); ?></a></li>

                            </ul>
                                    <div class="clearfix"></div>

                                </figcaption>
                            </figure>

                    </article>


                </div><!--slider body end-->
            </div><!-- .mask end -->

        </article><!-- hero-slider end -->

    </section><!--end of prof cont-->

    <div class="clearfix"></div>

</div><!--profile-panel end-->

<?php get_footer(); ?>
