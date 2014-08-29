<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Maps Pan Lock</title>
	<link rel="stylesheet" type="text/css" href="styles.css">

	<!-- Begin Google Maps API, must load before DOM -->
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
			var map = new google.maps.Map(mapElement, mapOptions);
		}
	</script>
	<!-- // End Google Maps API -->

</head>
<body>
	<header>
		<a href="#" class="map-overlay-lock hide-overlay">
			<strong>=Lock Map</strong>
		</a>
	</header>
	<div id="mainwrap">
		<div id="mapcontainer" class="map-wrap">
			<a href="#" class="map-overlay" id="mapoverlayshadow">
				<strong><span class="touch">Tap</span><span class="browser">Click</span> to pan map</strong>
			</a>
			<!-- Begin Map Embed -->
			<div id="3damap" style="width: 100%; height: 400px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: #F2F2F2;"></div>
			<!-- // End Map Embed -->
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>
