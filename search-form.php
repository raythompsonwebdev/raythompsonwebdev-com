<?php
/**
 * *PHP version 5
 *
 * Search | core/search-form.php.
 *
 * @category   Search
 * @package    Raythompsonwebdev-com
 * @subpackage Search
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */
?>

<form role="search" method="get" id="searchform" action="<?= esc_url( home_url( '/' ) ); ?>">
	<div>
			<label>
					<span class="screen-reader-text">
		<?php _e( 'Search', 'label', 'raythompsonwebdev-com' ); ?>
						</span>

			</label>
			<input type="search" class="search-field"  value="<?= get_search_query(); ?>" name="s" title="<?= esc_attr( 'Search', 'label', 'raythompsonwebdev-com' ); ?>" />
			<input type="submit" class="search-submit" value="Find" />
	</div>
</form>
		  
