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
			var map = new google.maps.Map(mapElement, mapOptions);
		}
	</script>
	<!-- // END Google Maps API -->

</head>
<body>

	<!-- "Lock Map" button. Defaults to display:none, visible while map is unlocked. -->
	<a href="#" class="map-overlay-lock">
		<strong>Lock Map</strong>
	</a>

	<!-- Div wrap to set overlay -->
	<div id="mapcontainer" class="map-wrap">

		<!-- "Unlock Map" button & opaque overlay. Defaults to display:block, hidden while map is unlocked. -->
		<a href="#" class="map-overlay active" id="mapoverlayshadow">
			<strong>
				<span class="touch">Tap </span> <!-- For Touch Displays -->
				<span class="screen">Click </span> <!-- For Screen Displays -->
				to pan map
			</strong>
		</a>

		<!-- Google Map Embed -->
		<div id="3damap" style="width: 100%; height: 400px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: #F2F2F2;"></div>

	</div><!-- // END #mapcontainer -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="includes/scripts.js"></script>
</body>
</html>
