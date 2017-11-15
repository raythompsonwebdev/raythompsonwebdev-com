<<<<<<< HEAD
function initMap() {
=======
/*function initMap() {
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
    // Map options
    var options = {
        zoom: 8,
        center: {
<<<<<<< HEAD
            lat: 42.3601,
            lng: -71.0589
=======
            lat: 51.55583507664607,
            lng: -0.06814956665039062
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
        } // map coordinates from google maps
    }

    // New map
    var map = new google.maps.Map(document.getElementById('map-container'), options);

    // Listen for click on map
    google.maps.event.addListener(map, 'click', function (event) {

        // Add marker
        addMarker({
            coords: event.latLng
        });

    });

    /*
    // Add marker
    var marker = new google.maps.Marker({
      position:{lat:42.4668,lng:-70.9495},
      map:map,
      icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
    });

    var infoWindow = new google.maps.InfoWindow({
      content:'<h1>Lynn MA</h1>'
    });

    marker.addListener('click', function(){
      infoWindow.open(map, marker);
    });
    */

    // Array of markers
    var markers = [
        {
            coords: {
<<<<<<< HEAD
                lat: 42.4668,
                lng: -70.9495
=======
                lat: 51.55583507664607,
            	lng: -0.06814956665039062
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
            },
            iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            content: '<h1>Lynn MA</h1>'
            },
        {
            coords: {
<<<<<<< HEAD
                lat: 42.8584,
                lng: -70.9300
=======
                lat: 51.55583507664607,
            	lng: -0.06814956665039062
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
            },
            content: '<h1>Amesbury MA</h1>'
            },
        {
            coords: {
<<<<<<< HEAD
                lat: 42.7762,
                lng: -71.0773
=======
				lat: 51.55583507664607,
            	lng: -0.06814956665039062
>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
            }
            }
          ];

    // Loop through markers
    for (var i = 0; i < markers.length; i++) {
        // Add marker
        addMarker(markers[i]);
    }

    // Add Marker Function
    function addMarker(props) {
        var marker = new google.maps.Marker({
            position: props.coords,
            map: map,
            //icon:props.iconImage
        });

        // Check for customicon
        if (props.iconImage) {
            // Set icon image
            marker.setIcon(props.iconImage);
        }

        // Check content
        if (props.content) {
            var infoWindow = new google.maps.InfoWindow({
                content: props.content
            });

            marker.addListener('click', function () {
                infoWindow.open(map, marker);
            });
        }
    }
}



<<<<<<< HEAD
=======
  /*function initMap() {
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
*/


>>>>>>> 77f09739064381219ec7ab43fb579e85f4f1413c
