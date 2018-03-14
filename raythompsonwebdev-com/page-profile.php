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

        <h1>Web Skills Graph</h1>

        <article id="chart">

            <ul id="numbers">

                <li><span>100%</span></li>

                <li><span>80%</span></li>

                <li><span>60%</span></li>

                <li><span>40%</span></li>

                <li><span>20%</span></li>

                <li><span>0%</span></li>

            </ul>


            <ul id="bars">

                <li>
                    <div data-percentage="60" class="bar"></div>
                    <span>Web Design</span>
                </li>

                <li>
                    <div data-percentage="80" class="bar"></div>
                    <span>Jquery/Ajax</span>
                </li>

                <li>
                    <div data-percentage="90" class="bar"></div>
                    <span>HTML/CSS</span>
                </li>

                <li>
                    <div data-percentage="80" class="bar"></div>
                    <span>Wordpress</span>
                </li>

                <li>
                    <div data-percentage="75" class="bar"></div>
                    <span>PHP/MySQL</span>
                </li>

                <li>
                    <div data-percentage="75" class="bar"></div>
                    <span>Javascript</span>
                </li>

            </ul>


        </article>

    </section><!--end of prof cont-->

    <?php the_content(); ?>

    <section id="prof_cont-a"><!--prof cont-->

        <h1>Web Development Related Courses Taken</h1>

        <article class="hero-slider"><!-- #hero-slider -->

            <ul id="list">
                <li>
                    <a href="#" rel="#panel-1" class="active" title="Adobe Certificate in Visual Communication" >Adobe</a>
                </li>
                <li>
                    <a href="#" rel="#panel-2" title="City and Guilds Web Design Certificate Level One" >ELATT</a>
                </li>
                <li>
                    <a href="#" rel="#panel-3" title="City and Guilds Web Design Certificate Level Two">Udemy</a>
                </li>
                <li>
                    <a href="#" rel="#panel-4" title="City and Guilds Web Design Certificate Level Three">FreeCodeCamp</a>
                </li>
                <li>
                    <a href="#" rel="#panel-5" title="Lynda-com online course certifications">Lynda.com</a>
                </li>
                <li>
                    <a href="#" rel="#panel-6" title="Shaw Academy Online course certificate">Shaw Academy</a>
                </li>
                <li>
                    <a href="#" rel="#panel-7" title="Shaw Academy course certificate">Shaw Academy</a>
                </li>
                <li>
                    <a href="#" rel="#panel-8" title="Shaw Academy course certificate">Shaw Academy</a>
                </li>
                <li>
                    <a href="#" rel="#panel-9" title="digital-futures-2017">Digital Futures 2017</a>
                </li>
            </ul>

            <div class="mask"><!--mask-->
                <div class="slider-body"><!--slider body -->

                    <article class="panel" id="panel-1">

                        <h2>Adobe Certified Associates </h2>

                        <figure class="abobe">


                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Large-Photoshop-Certicate-.jpg" class="fancybox" title="Adobe Certificate in Visual Communication">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Small-photoshop-Certicate.jpg" alt="Adobe-Photoshop-Visual-Communication-Certificate">

                            </a>



                            <figcaption>
                                <h3>Visual Communication: Photoshop CS4</h3>
                                <h4>Topics&#58;</h4>
                                <ul>
                                    <li>
                                        <a href="">Setting project requirements</a>
                                    </li>
                                    <li>
                                        <a href="">Identifying Design Elememts when Preparing Images</a>
                                    </li>
                                    <li>
                                        <a href="">Understanding Photoshop Interface</a>
                                    </li>
                                    <li>
                                        <a href="">Manipulating Images</a>
                                    </li>
                                    <li>
                                        <a href="">Evaluating Digital Images</a>
                                    </li>

                                </ul>

                                <div class="clearfix"></div>
                            </figcaption>


                        </figure>

                    </article>

                    <article class="panel" id="panel-2">

                        <h2>East London Advanced Technology Training</h2>

                        <figure class="cert">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/ITQ-USERS-LEVEL1-LARGE.jpg" class="fancybox" title="City and Guilds Level One, Two, Three">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/ITQ-USERS-LEVEL1-SMALL.gif" alt="City and Guilds Level One, Two, Three">

                            </a>

                            <figcaption>
                                <h3>City &#38; Gulds ITQ Level 1,2,3 &#45; Web Design</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">Improving productivity using IT</a></li>
                                    <li><a href="">IT Communication Fundementals</a></li>

                                    <li><a href="">Adding Content</a></li>
                                    <li><a href="">IT User fundementals</a></li>
                                    <li><a href="">Organizing Content</a></li>
                                    <li><a href="">Using the Internet</a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>
                        </figure>


                    </article>

                    <article class="panel" id="panel-3">

                        <h2>Udemy</h2>

                        <figure class="abobe">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Udemy-Large.jpg" class="fancybox" title="Udemy.com">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Udemy-Small.jpg" alt="Udemy.com">

                            </a>
                            <figcaption>
                                <h3>Various</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">ES 2016 Essentials</a></li>
                                    <li><a href="">Sass Workflow</a></li>
                                    <li><a href="">Rich Snippets - schema.org</a></li>
                                    <li><a href="">Object Oriented PHP </a></li>
                                    <li><a href="">NPM for Beginners - Essentials</a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>

                    </article>

                    <article class="panel" id="panel-4">

                        <h2>FreeCodeCamp</h2>

                        <figure class="cert">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/FreeCodeCamp-large.png" class="fancybox" title="FreeCodeCamp">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/FreeCodeCamp-small.png" alt="FreeCodeCamp">

                            </a>
                            <figcaption>
                                <h3>Frontend Developer Certificate</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">HTML5/CSS3</a></li>
                                    <li><a href="">Javascript</a></li>
                                    <li><a href="">Jquery</a></li>
                                    <li><a href="">Basic Algorythyms</a></li>
                                    <li><a href="">JSON/API's</a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-5">

                        <h2>Lynda.com</h2>

                        <figure class="abobe">

                            <a href="<?php echo home_url();?>wp-content/uploads/2018/03/lynda_logo1k-d_72x72.png" class="fancybox" title="Lynda.com">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/lynda_logo1k-d_72x72.png" alt="Lynda.com">

                            </a>
                            <figcaption>
                                <h3>Lynda.com&#45; Various</h3>
                                <h4>Topics&#58;</h4>

                                <ul id="lyndalinks">
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/paths/become-a-front-end-web-developer">Become a Front-End Web Developer</a></li>
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/paths/become-a-junior-wordpress-developer">Become a Junior WordPress Developer</a></li>
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/foundations-of-programming-fundamentals">Programming Fundementals</a></li>
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/css-fundamentals">CSS Fundementals</a></li>
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/javascript-essential-training">Javascript Essentials</a></li>
                                    <li><a class="lyndalink" href="http://www.linkedin.com/learning/jquery-essential-training-2">jQuery Essential Training</a></li>

                                    <br/>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-6">

                        <h2>Shaw Academy</h2>

                        <figure class="cert">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Mobile-web-applications-Certificate-Foundation-large.jpg" class="fancybox" title="Mobile-web-applications-Certificate-Foundation">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Mobile-web-applications-Certificate-Foundation-small.jpg" alt="Mobile-web-applications-Certificate-Foundation">

                            </a>

                            <figcaption>
                                <h3>Mobile App Development&#46;</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">Introduction to Mobile App Development</a></li>
                                    <li><a href="">Designing our App</a></li>
                                    <li><a href="">User Interfaces with HTML</a></li>
                                    <li><a href="">Coding Functions</a></li>
                                    <li><a href="">Web Hosting/Deploying Apps</a></li>
                                    <li><a href="">Mobile App Dev Life Cycle</a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>

                    </article>

                    <article class="panel" id="panel-7">

                        <h2>Shaw Academy</h2>

                        <figure class="cert">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Digital-Marketing-Certificate-Foundation.jpg" class="fancybox" title="Digital-Marketing-Certificate-Foundation">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Digital-Marketing-Certificate-Foundation-small.jpg" alt="Digital-Marketing-Certificate-Foundation">

                            </a>

                            <figcaption>
                                <h3>Diploma in Digital Marketing</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">Adwords/Pay Per Click</a></li>
                                    <li><a href="">Search Engine Optimisation</a></li>
                                    <li><a href="">Affiliate Marketing</a></li>
                                    <li><a href="">Social Media</a></li>
                                    <li><a href="">Web Analytics</a></li>
                                    <li><a href="">Blogging</a></li>

                                </ul>
                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-8">

                        <h2>Shaw Academy</h2>

                        <figure class="cert">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Content-Marketing-Certificate-Foundation.jpg" class="fancybox" title="Digital-Marketing-Certificate-Foundation">

                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Content-Marketing-Certificate-Foundation-Small.jpg" alt="Digital-Marketing-Certificate-Foundation">

                            </a>

                            <figcaption>
                                <h3>Diploma in Blogging &#38; Content Marketing</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">Blogging</a></li>
                                    <li><a href="">Vlogging</a></li>
                                    <li><a href="">Content Marketing</a></li>
                                    <li><a href="">Building online communities</a></li>
                                    <li><a href="">Content curation</a></li>
                                    <li><a href="">Monetising blogs</a></li>

                                </ul>

                                <div class="clearfix"></div>
                            </figcaption>

                        </figure>


                    </article>

                    <article class="panel" id="panel-9">

                        <h2>Digital Futures 2017</h2>

                        <figure class="abobe">

                            <a href="<?php echo home_url();?>/wp-content/uploads/2018/03/Digital-Futures-2017-Certificate-of-Participation-large.jpg" class="fancybox" title="Digital-Futures-2017-Certificate-of-Participation">
                                <img src="<?php echo home_url();?>/wp-content/uploads/2018/03/Digital-Futures-2017-Certificate-of-Participation-small.jpg" alt="Digital-Futures-2017-Certificate-of-Participation"></a>
                            <figcaption>
                                <h3>Interactive Programming</h3>
                                <h4>Topics&#58;</h4>

                                <ul>
                                    <li><a href="">Debate Skills with DebateMate</a></li>
                                    <li><a href="">Musical Composition</a></li>
                                    <li><a href="">Block programming using Crumble</a></li>
                                    <li><a href="">Negotiation skills with CitizenUK</a></li>
                                    <li><a href="">Music creation using Sonic Pi</a></li>
                                    <li><a href="">Conflict Resolution</a></li>

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
