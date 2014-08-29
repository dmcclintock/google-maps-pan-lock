/* Maps Scripts */

jQuery(document).ready(function($){
	var overlay = $("a.map-overlay");
	var overlay2 = $("a.map-overlay2");
	var overlayLock = $("a.map-overlay-lock");

	overlay.click(function(e){
		e.preventDefault();
		$(this).addClass("hide-overlay");
		// $(".map-overlay-lock").removeClass("hide-overlay").fadeIn(500);
		overlayLock.removeClass("hide-overlay");
		// document.getElementById("mapcontainer").style.boxShadow = "0px 0px 20px 10px rgba(0, 0, 0, 0.6)";
	});

	overlayLock.click(function(e){
		e.preventDefault();
		// $(".map-overlay-lock").fadeOut(500);
		$(this).addClass("hide-overlay");
		overlay2.removeClass("hide-overlay");
	});

	overlay2.click(function(e){
		e.preventDefault();
		// $(".map-overlay-lock").fadeOut(500);
		$(this).addClass("hide-overlay");
		overlayLock.removeClass("hide-overlay");
	});
});

jQuery(document).ready(function($){
	$(window).ready(function() {
		var wi = $(window).height();

		if (wi >= 768){
			$("#3damap").css("height", wi - "370");
			$(".map-overlay").css("height", wi - "370");
			$(".map-overlay2").css("height", wi - "370");
		} else {
			$("#3damap").css("height", wi - "107");
			$(".map-overlay").css("height", wi - "107");
			$(".map-overlay2").css("height", wi - "107");
		}
	});
});

/* ==========================================================================
   Sandbox code, kept for reference
   ========================================================================== */

// jQuery(document).ready(function($){
// 	var overlay = $("a.map-overlay");
// 	var overlayLock = $("a.map-overlay-lock");
// 	overlay.click(function(e){
// 		e.preventDefault();
// 		$(this).removeClass("active");
// 		overlayLock.addClass("active");
// 	});
// 	overlayLock.click(function(e){
// 		e.preventDefault();
// 		$(this).removeClass("active");
// 		overlay.addClass("active");
// 	});
// });


		// $(this).fadeOut(1000);
		// $(".map-overlay-lock").fadeIn(1000);
		// return false;
//	});
	// $(".map-overlay-lock").click(function(){
	// 	$(this).fadeOut(1000);
	// 	$(".map-overlay").fadeIn(1000);
	// 	return false;
	// });
