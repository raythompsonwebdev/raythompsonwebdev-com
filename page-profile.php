<?php
/**
 * *PHP version 7.4
 *
 * Template Name: Profile
 *
 * Profile page | core/page-profile.php.
 *
 * @category   Profile_Page
 * @package    WordPress
 * @subpackage Raythompsonwebdev-com
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */
get_header();
?>

<header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
</header><!-- .page-header -->
<div class="page-content">
<?php
while ( have_posts() ) :
	the_post();

	the_content();


		endwhile; // End of the loop.
?>
</div>
<br/>
<br/>
<br/>



<?php get_footer(); ?>
