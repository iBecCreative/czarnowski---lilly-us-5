/* Author:
	Rob Mathieu :: iBec Creative :: 12/2018
*/
var $ = jQuery.noConflict();

// Object Fit Images Plugin
objectFitImages();



// Lazy Loading Plugin
(function () {
	// Initialize
	var bLazy = new Blazy({
		offset: 200
	});
})();



/**
*	jQuery
*/
$(document).ready(function(){

	$('iframe').mediaWrapper();
	$('table').tableit();
	$('#nav li:has(ul)').doubleTapToGo();


	// Prevents external links from changing the origin, which could lead to phishing attacks.
	// Demo: http://codepen.io/akselkreis/pen/EgxPvA
	$('a[target="_blank"]:not([rel="noopener noreferrer"])').each(function(){
		$(this).attr('rel','noopener noreferrer').addClass('external');
	});

}); // End jQuery
