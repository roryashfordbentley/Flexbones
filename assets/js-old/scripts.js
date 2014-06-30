/**
 * Scripts.js
 * User scripts and plugin instantiations
 * scripts.js should be called in the site footer
 */

/* Polyfilling */

/**
 * Yepnope testing and polyfilling
 */

yepnope([{
	test : Modernizr.cssremunit,
	nope : stylesheet_root['dir'] +'/assets/js/remfallback.js'
},{
	test : Modernizr.rgba,
	nope : '//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js'
},{
	test: Modernizr.mq,
	nope: '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'
}]);
