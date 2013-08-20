/* gridtacular.js */

//immediately invoke function to maintain $.
(function ( $ ) {

	$.fn.gridtacular = function(userSettings) {



	    var defaults = $.extend({
            
            //default gridtacular settings
            showBreakpoint: true,
	        showWidth: 		true,
	        showHeight: 	true,
	        showBaseline:	true,
	        showGrid: 		true,
	        gridColumnsMax: 12

        }, userSettings );

	    var components = {
	    	breakpoint: 	'gridtacular__breakpoint',
	    	width: 			'gridtacular__width',
	    	height: 		'gridtacular__height',
	    	baselineToggle: 'gridtacular__baseline-toggle',
	    	gridToggle: 	'gridtacular__grid-toggle'
	    };


	    //foreach 
	    jQuery.each(components, function(name,val) {
	    	 $( this ).append('<li class="' + val + '">test</li>');
	    });


	}
	
}( jQuery ));


jQuery(document).ready(function($) { 



	//initialise the module

		/*$('.gridtacular').gridtacular({
			showWidth: 	true,
	        showHeight: false,
		});*/

	$('.gridtacular').gridtacular();
	
	//container
	/*$('.gridtacular').append( '<li class="gridtacular__breakpoint"></li>' );

	//add the page dimensions when page loads
	$('.gridtacular').append( '<li class="gridtacular__width"><strong>W:</strong> ' + $(window).width() + ' </li>' );
	$('.gridtacular').append( '<li class="gridtacular__height"><strong>H:</strong> ' + $(window).height() + ' </li>' );

	//baseline toggle button
	$('.gridtacular').append( '<li class="gridtacular__baseline-toggle"><a href="#"><img src="'+ stylesheet_root.dir +'/images/gridtacular/baseline-icon.png"></a></li>' );
	//background grid toggle button
	$('.gridtacular').append( '<li class="gridtacular__grid-toggle"><a href="#"><img src="'+ stylesheet_root.dir +'/images/gridtacular/grid-icon.png"></a></a></li>' );


	//add the x+y dimensions to elements with the .dimention class
	dimensionDisplay = function() {
		$('.gridtacular__width').html( '<strong>W:</strong> ' + $(window).width() );
		$('.gridtacular__height').html( '<strong>H:</strong> ' + $(window).height() );
	}


	setBreakpoint = function(bpname,start,end, img){

		if( $(window).width() >= start && $(window).width() <= end ){
			$('.gridtacular__breakpoint').html( img );
		}
	}

	setBreakpoint('mobile',0,649,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/s.png" alt="small">');
	setBreakpoint('tablet',650,899,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/m.png" alt="medium">');
	setBreakpoint('desktop',900,1199,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/l.png" alt="large">');
	setBreakpoint('bigscreen',1200,10000,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/xl.png" alt="x-large">');

	$(window).resize(function() {
        dimensionDisplay();
        $(window).resize(setBreakpoint('mobile',0,649,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/s.png" alt="small">'));
		$(window).resize(setBreakpoint('tablet',650,899,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/m.png" alt="medium">'));
		$(window).resize(setBreakpoint('desktop',900,1199,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/l.png" alt="large">'));
		$(window).resize(setBreakpoint('bigscreen',1200,10000,'<img src="'+ stylesheet_root.dir +'/images/gridtacular/xl.png" alt="x-large">'));
    });	

	//toggle 

	$('.gridtacular__baseline-toggle').toggle(function() {
		$('body').append( '<div class="baseline-overlay"></div>' );
		$('.baseline-overlay').height( $(document).height() );
	}, function() {
		$('.baseline-overlay').remove();
	});

	$('.gridtacular__grid-toggle').toggle(function() {
		//add baseline-overlay div
		$('body').append( '<div class="grid-overlay"></div>' );
		$('.grid-overlay').append('<div class="wrapper"></div>');
		for(var i=1;i <= 12;i++){
			$('.grid-overlay .wrapper').append( '<div class="col"></div>' );
		}
		$('.grid-overlay .col').height( $('body').height() );
	}, function(){
		$('.grid-overlay').remove();
		
	});*/

});