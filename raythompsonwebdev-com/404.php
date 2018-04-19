<?php
/**
 * *PHP version 5
 *
 * 404 page | core/404.php.
 *
 * @category   Error_Page
 * @package    Raythompsonwebdev-com
 * @subpackage Error_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
get_header(); ?>

    <h1><?php esc_html__('404: Page not Found!?', 'raythompsonwebdev-com'); ?></h1>

    <h2><?php esc_html__('Just move along back to the', 'raythompsonwebdev-com'); ?><a href="<?php echo home_url(); ?>">
        <span style="color:#fff;">Homepage</span>
        </a>.
    </h2>


<?php get_footer(); ?>

