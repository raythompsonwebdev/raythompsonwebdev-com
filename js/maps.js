/*function initMap() {
    // Map options
    var options = {
        zoom: 8,
        center: {
            lat: 51.55583507664607,
            lng: -0.06814956665039062
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
                lat: 51.55583507664607,
            	lng: -0.06814956665039062
            },
            iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
            content: '<h1>Lynn MA</h1>'
            },
        {
            coords: {
                lat: 51.55583507664607,
            	lng: -0.06814956665039062
            },
            content: '<h1>Amesbury MA</h1>'
            },
        {
            coords: {
				lat: 51.55583507664607,
            	lng: -0.06814956665039062
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


