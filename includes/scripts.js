/* Maps Scripts */

/* ==========================================================================
   Revised code by J
   ========================================================================== */

jQuery(document).ready( function($) {
	var o = $('a.map-overlay'), // overlay(el)
			l = $('a.map-overlay-lock'),
			a = 'active'; // lock(el)

	o.click( function(event) {
		event.preventDefault();
		$(this).removeClass( a );
		l.addClass( a );
	});

	l.click( function(event) {
		event.preventDefault();
		$(this).removeClass( a );
		o.addClass( a );
	});
});
