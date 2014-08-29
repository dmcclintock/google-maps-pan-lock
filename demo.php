<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Maps Pan Lock</title>
	<link rel="stylesheet" type="text/css" href="includes/styles.css">

	<!-- Begin Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3abDeXiFejCuhSme78fem_Ck7UBBk6Fw&sensor=false"></script>
	<script>
		google.maps.event.addDomListener(window, 'load', init);
		function init() {
			var mapOptions = {
				zoom: 10,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: new google.maps.LatLng(43.020763, -85.741734),
				// styles: []
			};
			var mapElement = document.getElementById('3damap');
			// var mapElement = document.getElementById('gmpl-map');
			var map = new google.maps.Map(mapElement, mapOptions);
		}
	</script>
	<!-- // END Google Maps API -->

</head>
<body>

	<!--

			============== DIV ID/CLASS NAME CHANGES: ==============

			.map-overlay-lock 								=			.gmpl-btn-lock
			#mapcontainer 										=			#gmpl-wrapper
			.map-overlay 											= 		.gmpl-overlay
			#3damap 													= 		#gmpl-map

			NOTE: Commented lines will replace those directly above
						them once ID/CLASS changes are made.
	-->

	<a href="#" class="map-overlay-lock"><strong>Lock Map</strong></a>
	<!-- <a href="#" class="gmpl-btn-lock"><strong>Lock Map</strong></a> -->
	<!-- ^ TOGGLE ACTIVE, INITIALLY INACTIVE -->

	<div id="mapcontainer" class="map-wrap">
	<!-- <div id="gmpl-wrapper"> -->

		<a href="#" class="map-overlay active">
		<!-- <a href="#" class="gmpl-overlay active"> -->
		<!-- ^ TOGGLE ACTIVE, LOADS ACTIVE -->
			<strong><span class="touch">Tap </span><span class="screen">Click </span>to pan map</strong>
		</a>
		<div id="3damap" style="width: 100%; height: 400px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: #F2F2F2;"></div>
		<!-- <div id="gmpl-map" style="..." -->
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="includes/scripts.js"></script>
</body>
</html>
