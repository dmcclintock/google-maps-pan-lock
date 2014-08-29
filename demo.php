<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Maps Pan Lock</title>
	<link rel="stylesheet" type="text/css" href="includes/styles.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3abDeXiFejCuhSme78fem_Ck7UBBk6Fw&sensor=false"></script>
	<script>
		google.maps.event.addDomListener( window, 'load', function() {
			var mapOptions = { zoom: 10, mapTypeId: google.maps.MapTypeId.ROADMAP, center: new google.maps.LatLng(43.020763, -85.741734) }, mapElement = document.getElementById( 'gmpl-map' ), map = new google.maps.Map( mapElement, mapOptions );
		});
	</script>
</head>
<body>
	<a href="#" class="gmpl-btn-lock"><strong>Lock Map</strong></a>
	<div id="gmpl-wrapper">
		<a href="#" class="gmpl-overlay active">
			<strong><span class="touch">Tap </span><span class="screen">Click </span>to pan map</strong>
		</a>
		<div id="gmpl-map" style="width: 100%; height: 400px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: #F2F2F2;"></div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="includes/scripts.js"></script>
</body>
</html>
