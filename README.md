google-maps-pan-lock
====================

This plugin is designed to provide a slightly more user-friendly UX for webpages with embeded Google Maps. Essentially, it "locks" the panning and other map control events (on scroll or swipe) for Google Maps when embedded on a webpage for both desktop and mobile devices. At the user's discretion, an onClick/Touch event will unlock the map allowing them to access map controls (pan, zoom, etc.). The map will return to it's initial "locked" state when map control is no longer desired, in order to prevent users from getting stuck in mapland.

### ToDo:

#### Plugin Options

- API Key [Instructions](https://developers.google.com/maps/documentation/javascript/tutorial#api_key) - text input
- Zoom level - Dropdown (default to 10)
- Map Type - Dropdown (roadmap/terrain/hybrid)
- Coordinates - Address lookup, populates lat/long text inputs using Geocoding API (see [this](https://developers.google.com/maps/documentation/javascript/v2/services?csw=1#Geocoding) and [this](https://developers.google.com/maps/documentation/geocoding/index#geocoding))
- Styles - Add this later

```
Name: Google Maps Pan Lock
Author: Daniel McClintock
Author URI: http://about.me/McClintock
Version: v0.1.2
Updated: 08-29-2014
```

### Contents

	demo.php
	styles.css
	scripts.js

### Dependencies

	Google Maps API (requires Dev API key)

### Version History

```
v0.1.0
- Rudamentary integration, with button interface to control relocking the map
- Implemented at https://3dadisplay.com/contact-3da-display/

v0.1.2
- Tightened up jQuery (props to @jGoslinga)
- Semantic HTML and cleaner code
```
