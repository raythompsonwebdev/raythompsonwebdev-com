<?php
/**
 * *PHP version 7.4.
 *
 * Profile Page Chart | inc/profile-chart.php.
 *
 * @category   Profile page chart
 * @package    WordPress
 * @subpackage raythompsonwebdev-com
 * @since        1.0
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 *
 * @version    GIT: https://github.com/raythompsonwebdev/raythompsonwebdev-com.git
 * @link       https:www.raythompsonwebdev.co.uk custom template
 */

$raythompsonwebdev_com_chart_bars = '[
	{
		"id": "1",
		"language":"HTML",
		"datapercentage": "75",
		"dataskill":"INTERMEDIATE"
	}, {
		"id": "2",
		"language":"CSS",
		"datapercentage": "75",
		"dataskill":"INTERMEDIATE"
	}, {
		"id": "3",
		"language":"JAVASCRIPT",
		"datapercentage": "80",
		"dataskill":"INTERMEDIATE"
	}, {
		"id": "4",
		"language":"PHP",
		"datapercentage": "80",
		"dataskill":"INTERMEDIATE"
	}, {
		"id": "5",
		"language":"MYSQL",
		"datapercentage": "70",
		"dataskill":"INTERMEDIATE"
	}
]';

$raythompsonwebdev_com_bars = json_decode( $raythompsonwebdev_com_chart_bars, true );

?>

	<section id="prof_cont">

		<h1><?php esc_html_e( 'Coding Languages', 'raythompsonwebdev-com' ); ?></h1>

		<article id="chart">

			<ul id="bars">

			<?php

			foreach ( $raythompsonwebdev_com_bars as $raythompsonwebdev_com_bar ) :

				?>

				<li>
					<div
						data-percentage="<?php	printf( '%s', esc_html( $raythompsonwebdev_com_bar['datapercentage'] ), 'raythompsonwebdev-com' ); ?>"	class="bar"	data-skill="<?php printf( '%s', esc_html( $raythompsonwebdev_com_bar['dataskill'] ), 'raythompsonwebdev-com' ); ?>" ></div>
					<span><?php printf( '%s', esc_html( $raythompsonwebdev_com_bar['language'] ), 'raythompsonwebdev-com' ); ?></span>
				</li>

			<?php endforeach; ?>



			</ul>

		</article>

	</section><!--end of prof cont-->

<?php


