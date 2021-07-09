<?php
/**
 * *PHP version 7.2.
 *
 * 404 page | core/404.php.
 *
 * @category   Error_Page
 * @package    WordPress
 * @subpackage raythompsonwebdev-com
 * @since        1.0
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 *
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

get_header(); ?>

	<div id="primary" class="site-main">

		<!-- <section class="error-404 not-found"> -->
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'raythompsonwebdev-com' ); ?></h1>
			</header><!-- .page-header -->

</section>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'raythompsonwebdev-com' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$raythompsonwebdev_com_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'raythompsonwebdev-com' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$raythompsonwebdev_com_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		<!-- </section>.error-404 -->

	</div><!-- #main -->

<?php
get_footer();
