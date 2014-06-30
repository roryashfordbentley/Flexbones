/**
 * Maps
 */

// Only load if we are on the contact page


// Map colours
var clr_red = 			'#ee5065';
var clr_blue = 			'#4b6578';
var clr_light_blue = 	'#78a9cc';
var clr_light_gray = 	'#f3f5f5';
var clr_white = 		'#ffffff';
var clr_water = 		'#79a8be';

function initialize() {
	var mapOptions = {
		center: new google.maps.LatLng(53.6493644,-1.7763918),
		zoom: 10,
		disableDefaultUI: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			 position: google.maps.ControlPosition.LEFT_TOP
		},
		scrollwheel: false,
		styles: [{
			"featureType": "road.highway",
			"elementType": "geometry.fill",
			"stylers": [
				{ "color": clr_blue }
			]
		},{
			// Motorway stroke colour
			"featureType": "road.highway",
			"elementType": "geometry.stroke",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			// Medium sized road colour
			"featureType": "road.arterial",
			"stylers": [
				{ "color": clr_light_blue }
			]
		},{
			// Local road fill colour
			"featureType": "road.local",
			"elementType": "geometry.fill",
			"stylers": [
				{ "color": clr_white }
			]
		},{
			// Local road stroke colour
			"featureType": "road.local",
			"elementType": "geometry.stroke",
			"stylers": [
				{ "color": '#ccdae4' }
			]
		},{
			// Label text colour
			"elementType": "labels.text.fill",
			"stylers": [
				{ "color": clr_red }
			]
		},{
			// Label text stroke
			"elementType": "labels.text.stroke",
			"stylers": [
				{ "color": clr_white }
			]
		},{
			// Places of interest
			"featureType": "poi",
			"stylers": [
				{ "visibility": "off" }
			]
		},{
			// Water
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
				{ "color": clr_water }
			]
		},{
			// Highway label background
			"featureType": "road",
			"elementType": "labels",
			"stylers": [
				{ "visibility": "off" }
			]
		}
	]};

	function setMarker(map) {
		// Add markers to the map

		var image = {
			url: stylesheet_root['dir'] + '/assets/imgs/icons/map-pin-icon.png',

			size: new google.maps.Size(64, 64),
			origin: new google.maps.Point(0,0),
			anchor: new google.maps.Point(64, 32)
		};

		var shape = {
			coord: [0, 0, 0, 64, 64, 64, 64 , 0],
			type: 'poly'
		};

		var marker = new google.maps.Marker({
		    position: new google.maps.LatLng(53.6493644,-1.7763918),
		    map: map,
		    icon: image,
		    shape: shape,
		    title: "Code Blue Digital HQ"
		});

	}

	function customControls(){

		var zoomIn = document.getElementById('zoomIn');

		google.maps.event.addDomListener(zoomIn, 'click', function() {
			map.setZoom(map.getZoom() + 1);
		});

		var zoomIn = document.getElementById('zoomOut');

		google.maps.event.addDomListener(zoomOut, 'click', function() {
			map.setZoom(map.getZoom() - 1);
		});

	}

	if($("#map__canvas").length > 0){
   		var map = new google.maps.Map(document.getElementById("map__canvas"),mapOptions);
	}else{
		return false;
	}

	setMarker(map);
	customControls();
}

// Call maps

google.maps.event.addDomListener(window, 'load', initialize);
