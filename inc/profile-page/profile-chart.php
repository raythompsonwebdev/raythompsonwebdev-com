<?php
/**
 * *PHP version 7.2.
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

$chart_bars = '[
	{
		"id": "1",
		"language":"HTML",
		"datapercentage": "75",
		"dataskill":"Intermediate"
	}, {
		"id": "2",
		"language":"CSS",
		"datapercentage": "75",
		"dataskill":"Intermediate"
	}, {
		"id": "3",
		"language":"Javascript",
		"datapercentage": "80",
		"dataskill":"Intermediate"
	}, {
		"id": "4",
		"language":"PHP",
		"datapercentage": "80",
		"dataskill":"Intermediate"
	}, {
		"id": "5",
		"language":"MYSQL",
		"datapercentage": "70",
		"dataskill":"Intermediate"
	}
]';

$bars = json_decode( $chart_bars, true );

?>

	<section id="prof_cont">

		<h1><?php esc_html_e( 'Coding Languages', 'raythompsonwebdev-com' ); ?></h1>

		<article id="chart">

			<ul id="bars">

			<?php

			foreach ( $bars as $bar ) :

				?>

				<li>
					<div data-percentage="<?php echo esc_html( $bar['datapercentage'], 'raythompsonwebdev-com' ); ?>" class="bar" data-skill="<?php echo esc_html( $bar['dataskill'], 'raythompsonwebdev-com' ); ?>" ></div>
					<span><?php echo esc_html( $bar['language'], 'raythompsonwebdev-com' ); ?></span>
				</li>

			<?php endforeach; ?>



			</ul>

		</article>

	</section><!--end of prof cont-->

<?php


