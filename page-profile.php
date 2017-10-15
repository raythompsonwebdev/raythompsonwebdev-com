<?php
/*

  Template Name: Profile

 */
?>

<?php get_header(); ?>

<section id="main-content" class="group" role="main">

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

                    <li><div data-percentage="60" class="bar"></div><span>Web Design</span></li>

                    <li><div data-percentage="80" class="bar"></div><span>Jquery/Ajax</span></li>

                    <li><div data-percentage="90" class="bar"></div><span>HTML/CSS</span></li>

                    <li><div data-percentage="80" class="bar"></div><span>Wordpress</span></li>

                    <li><div data-percentage="75" class="bar"></div><span>PHP/MySQL</span></li>

                    <li><div data-percentage="75" class="bar"></div><span>Javascript</span></li>

                </ul>


            </article>
      
        </section><!--end of prof cont--> 
        
        <?php the_content(); ?> 
        
        <section id="prof_cont-a"><!--prof cont-->

            <h1>Web Development Related Courses Taken</h1>

            <article class="hero-slider"><!-- #hero-slider -->

                <ul id="list">
                    <li><a href="#" rel="#panel-1" class="active" title="Adobe Certificate in Visual Communication" >Photoshop</a></li>
                    <li><a href="#" rel="#panel-2" title="City and Guilds Web Design Certificate Level One" >City &amp; Guilds 1</a></li>
                    <li><a href="#" rel="#panel-3" title="City and Guilds Web Design Certificate Level Two">City &amp; Guilds 2</a></li>
                    <li><a href="#" rel="#panel-4" title="City and Guilds Web Design Certificate Level Three">City &amp; Guilds 3</a></li>
                    <li><a href="#" rel="#panel-5" title="Lynda-com online course certifications">Lynda.com</a></li>
                    <li><a href="#" rel="#panel-6" title="Shaw Academy Online course certificate">Mobile App Development</a></li>
                    <li><a href="#" rel="#panel-7" title="Shaw Academy course certificate">Digital Marketing</a></li>
                    <li><a href="#" rel="#panel-8" title="Shaw Academy course certificate">Content Marketing</a></li>
                    <li><a href="#" rel="#panel-9" title="digital-futures-2017">Digital Futures 2017</a></li>
                </ul>

                <div class="mask"><!--mask-->
                    <div class="slider-body"><!--slider body -->

                        <article class="panel" id="panel-1">

                            <h2>Adobe Certified Associates </h2>

                            <figure class="abobe">


                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Large-Photoshop-Certicate-.jpg" class="fancybox" title="Adobe Certificate in Visual Communication">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Small-photoshop-Certicate.jpg" alt="Adobe-Photoshop-Visual-Communication-Certificate">

                                </a>

                                <span class="profile-image-rollover">
                                    <p>
                                        Click to see Larger Image
                                    </p>
                                </span>


                                <figcaption>
                                    <h3>Visual Communication: Photoshop CS4</h3>
                                    <h4>Topics&#58;</h4>
                                    <ul>
                                        <li><a href="">Setting project requirements</a></li>
                                        <li><a href="">Identifying Design Elememts when Preparing Images</a></li>
                                        <li><a href="">Understanding Photoshop Interface</a></li>
                                        <li><a href="">Manipulating Images</a></li>
                                        <li><a href="">Evaluating Digital Images</a></li>

                                    </ul>

                                    <div class="clearfix"></div>
                                </figcaption>


                            </figure>

                        </article>

                        <article class="panel" id="panel-2">

                            <h2>City &amp; Guilds Level 1</h2>

                            <figure class="cert">

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL1-LARGE.jpg" class="fancybox" title="City and Guilds Level One">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL1-SMALL.gif" alt="City-and-Guilds-Level-One">

                                </a>

                                <figcaption>
                                    <h3>City &#38; Gulds ITQ Level 1 &#45; Web Design</h3>
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

                            <h2>City &amp; Guilds Level 2</h2>

                            <figure class="cert">

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL2-LARGE.jpg" class="fancybox" title="City and Guilds Level Two">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL2-SMALL.gif" alt="City-and-Guilds-Level-Two">

                                </a>
                                <figcaption>
                                    <h3>City &#38; Gulds ITQ Level 2 &#45; Web Design</h3>
                                    <h4>Topics&#58;</h4>

                                    <ul>
                                        <li><a href="">Database software</a></li>
                                        <li><a href="">Design Software</a></li>
                                        <li><a href="">Imaging Software</a></li>
                                        <li><a href="">Website Software</a></li>
                                        <li><a href="">Improving Productivity using IT</a></li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </figcaption>

                            </figure>

                        </article>

                        <article class="panel" id="panel-4">

                            <h2>City &amp; Guilds Level 3</h2>

                            <figure class="cert">

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL3-LARGE.jpg" class="fancybox" title="City and Guilds Level Three">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/ITQ-USERS-LEVEL3-SMALL.gif" alt="City-and-Guilds-Level-Three">

                                </a>
                                <figcaption>
                                    <h3>City &#38; Gulds ITQ Level 3 &#45; Web Design</h3>
                                    <h4>Topics&#58;</h4>

                                    <ul>
                                        <li><a href="">Database software</a></li>
                                        <li><a href="">Design Software</a></li>
                                        <li><a href="">Imaging Software</a></li>
                                        <li><a href="">Website Software</a></li>
                                        <li><a href="">Using Internet</a></li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </figcaption>

                            </figure>


                        </article>

                        <article class="panel" id="panel-5">

                            <h2>Lynda.com</h2>

                            <figure class="abobe">

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/cert-montage.png" class="fancybox" title="City and Guilds Level Three">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Small-Udemy-Certicate.jpg" alt="City-and-Guilds-Level-Three">

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

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Mobile-web-applications-Certificate-Foundation-large.jpg" class="fancybox" title="Mobile-web-applications-Certificate-Foundation">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Mobile-web-applications-Certificate-Foundation-small.jpg" alt="Mobile-web-applications-Certificate-Foundation">

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

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Digital-Marketing-Certificate-Foundation.jpg" class="fancybox" title="Digital-Marketing-Certificate-Foundation">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Digital-Marketing-Certificate-Foundation-small.jpg" alt="Digital-Marketing-Certificate-Foundation">

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

                                <a href="<?php echo home_url(); ?>/wp-content/uploads/2017/03/Content-Marketing-Certificate-Foundation.jpg" class="fancybox" title="Digital-Marketing-Certificate-Foundation">

                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Content-Marketing-Certificate-Foundation-Small.jpg" alt="Digital-Marketing-Certificate-Foundation">

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

                                <a href="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Digital-Futures-2017-Certificate-of-Participation-large.jpg" class="fancybox" title="Digital-Futures-2017-Certificate-of-Participation">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/raythompsonwebdev-com/images/Digital-Futures-2017-Certificate-of-Participation-small.jpg" alt="Digital-Futures-2017-Certificate-of-Participation"></a>
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

</section>

<?php get_footer(); ?>
