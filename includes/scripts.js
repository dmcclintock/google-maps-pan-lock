/* Maps Scripts */

/* ==========================================================================
   Revised code by J
   ========================================================================== */

jQuery(document).ready(function($){
	var overlay = $("a.map-overlay");
	var overlayLock = $("a.map-overlay-lock");

	overlay.click(function(event){
		event.preventDefault();
		$(this).removeClass("active");
		overlayLock.addClass("active");
	});

	overlayLock.click(function(event){
		event.preventDefault();
		$(this).removeClass("active");
		overlay.addClass("active");
	});
});
