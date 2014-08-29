<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Maps Pan Lock</title>

	<!-- Enqueue styles & scripts -->
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="scripts.js"></script>

	<!-- Essential Google Maps API, must load before DOM -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3abDeXiFejCuhSme78fem_Ck7UBBk6Fw&sensor=false"></script>
	<script type="text/javascript">
		function initialize(){
			var mapOptions = {
				zoom: 10,
				center: new google.maps.LatLng(43.020763, -85.741734),
				mapTypeId:google.maps.MapTypeId.ROADMAP,
				styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
			};
			var mapElement = document.getElementById('3damap');

			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(43.020763, -85.741734),
				map: map,
				title: 'Click to zoom',
				draggable: false
			});

			google.maps.event.addListener(marker, 'click', function() {
				map.setZoom(18);
				map.setCenter(marker.getPosition());
				map.setMapTypeId(google.maps.MapTypeId.HYBRID);
			});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, 'resize', initialize);

		function loadScript(){
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' + 'callback=initialize';
			document.body.appendChild(script);
		}
		window.onload = loadScript;
	</script>
	<!-- // End Google Maps API -->

</head>
<body>
	<header>
		<a href="#" class="map-overlay-lock hide-overlay">
			<strong><i class="fa fa-unlock-alt fa-fw"></i> Lock Map</strong>
		</a>
	</header>

	<div id="mainwrap">
		<div id="mapcontainer" class="map-wrap">
			<a href="#" class="map-overlay" id="mapoverlayshadow">
				<strong><em><i class="fa fa-arrows fa-fw"></i>Tap to unlock map controls</em></strong>
				<strong><em class="text-large"><i class="fa fa-arrows fa-fw"></i> Click to unlock map controls</em></strong>
			</a>
			<a href="#" class="map-overlay2 hide-overlay">
				<strong><em class="text-large"><i class="fa fa-lock fa-fw"></i> Map controls locked</em></strong>
			</a>
			<div id="3damap" style="width: 100%; height: 400px; position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: #F2F2F2;"></div>
		</div>
	</div>
</body>
</html>
