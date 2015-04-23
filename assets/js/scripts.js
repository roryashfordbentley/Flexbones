/**
 * Scripts.js
 * Require scripts for use with Browserify
 */

// Would like to remove the dependancy for jQuery eventually by swapping out
// modification of body classes for pure JS.
//
// Still to add:
// 1. Slider for homepage that hopefully doesnt rely on JQuery

/**
 * The mobile nav stuff
 */
(function( window ){
	'use strict';

	var body = document.body,
		mask = document.createElement("div"),
		toggleSlideLeft = document.querySelector( ".toggle-slide-left" ),
		slideMenuLeft = document.querySelector( ".slide-menu-left" ),
		activeNav
	;
	mask.className = "mask";

	/* slide menu left */
	toggleSlideLeft.addEventListener( "click", function(){
		$("body").addClass('sml-open');
		document.body.appendChild(mask);
		activeNav = "sml-open";
	} );

	/* hide active menu if mask is clicked */
	mask.addEventListener( "click", function(){
		$("body").removeClass(activeNav);
		activeNav = "";
		document.body.removeChild(mask);
	} );

	/* hide active menu if close menu button is clicked */
	[].slice.call(document.querySelectorAll(".close-menu")).forEach(function(el,i){
		el.addEventListener( "click", function(){
			$("body").removeClass(activeNav)
			activeNav = "";
			document.body.removeChild(mask);
		} );
	});


})( window );