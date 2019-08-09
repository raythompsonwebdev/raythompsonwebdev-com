<?php
/**
 * Contact page map function.
 *
 * @return void void text
 */
function raythompsonwebdev_com_mapcontainer() {

	if ( is_page( 'contact' ) ) {
		?>

	<script>
		function initMap() {
		var uluru = {lat: 51.55583507664607, lng: -0.06814956665039062};
		var map = new google.maps.Map(document.getElementById('map_container'), {
			zoom: 12,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
		} 
		
	</script>
		
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGDPBvpHN2MKD9lMLk1cfTuURAlxWHAag&callback=initMap">
	</script>

		<?php

	}
}
add_action( 'wp_footer', 'raythompsonwebdev_com_mapcontainer' );