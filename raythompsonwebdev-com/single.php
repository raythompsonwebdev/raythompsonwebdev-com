<?php
/**
 * *PHP version 5
 *
 * Single Page | core/single.php.
 *
 * @category   Single_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Single_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk 
 */ 
get_header(); ?>

		<?php

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation();
			
		?>
     
            <section class='contact-wide'>

        <h1>Send your Comments</h2>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
?>

    </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
