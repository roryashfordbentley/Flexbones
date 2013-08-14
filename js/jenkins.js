/* Jenkins.js */

jQuery(document).ready(function($) { 

	//initialise the module

	$('body').append('<div class="jenkins"><ul></ul></div>');
	
	//dummy breakpoint
	$('.jenkins ul').append( '<li class="jenkins__breakpoint">init</li>' );

	//add the page dimensions when page loads
	$('.jenkins ul').append( '<li class="jenkins__width"><strong>W:</strong> ' + $(window).width() + ' </li>' );
	$('.jenkins ul').append( '<li class="jenkins__height"><strong>H:</strong> ' + $(window).height() + ' </li>' );

	//baseline toggle button
	$('.jenkins ul').append( '<li class="jenkins__baseline-toggle"><a href="#"><img src="'+ stylesheet_root.dir +'/images/jenkins/baseline-icon.png"></a></li>' );
	//background grid toggle button
	$('.jenkins ul').append( '<li class="jenkins__grid-toggle"><a href="#"><img src="'+ stylesheet_root.dir +'/images/jenkins/grid-icon.png"></a></a></li>' );

	//add the x+y dimensions to elements with the .dimention class
	dimensionDisplay = function() {
		$('.jenkins__width').html( '<strong>W:</strong> ' + $(window).width() );
		$('.jenkins__height').html( '<strong>H:</strong> ' + $(window).height() );
	}

	//	
	setBreakpoint = function(bpname,start,end, img){

		if( $(window).width() >= start && $(window).width() <= end ){
			$('.jenkins__breakpoint').html( img );
		}
	}

	setBreakpoint('mobile',0,649,'<img src="'+ stylesheet_root.dir +'/images/jenkins/s.png" alt="small">');
	setBreakpoint('tablet',650,899,'<img src="'+ stylesheet_root.dir +'/images/jenkins/m.png" alt="medium">');
	setBreakpoint('desktop',900,1199,'<img src="'+ stylesheet_root.dir +'/images/jenkins/l.png" alt="large">');
	setBreakpoint('bigscreen',1200,10000,'<img src="'+ stylesheet_root.dir +'/images/jenkins/xl.png" alt="x-large">');

	$(window).resize(function() {
        dimensionDisplay();
        $(window).resize(setBreakpoint('mobile',0,649,'<img src="'+ stylesheet_root.dir +'/images/jenkins/s.png" alt="small">'));
		$(window).resize(setBreakpoint('tablet',650,899,'<img src="'+ stylesheet_root.dir +'/images/jenkins/m.png" alt="medium">'));
		$(window).resize(setBreakpoint('desktop',900,1199,'<img src="'+ stylesheet_root.dir +'/images/jenkins/l.png" alt="large">'));
		$(window).resize(setBreakpoint('bigscreen',1200,10000,'<img src="'+ stylesheet_root.dir +'/images/jenkins/xl.png" alt="x-large">'));
    });	

	//toggle 

	$('.jenkins__baseline-toggle').toggle(function() {
		//$('body').toggleClass('baseline-bg');
		//add baseline-overlay div
		$('body').append( '<div class="baseline-overlay"></div>' );
		//add 200 divs, seems extreme but this method is the most accurate
		for(var i=1;i <= 200;i++){
			$('.baseline-overlay').append( '<div class="row"></div>' );
		}
	}, function() {
		$('.baseline-overlay').remove();
	});

	$('.jenkins__grid-toggle').toggle(function() {
		//add baseline-overlay div
		$('body').append( '<div class="grid-overlay"></div>' );
		$('.grid-overlay').append('<div class="wrapper"></div>');
		//add 200 divs, seems extreme but this method is the most accurate
		for(var i=1;i <= 12;i++){
			$('.grid-overlay .wrapper').append( '<div class="col"></div>' );
		}
	}, function(){
		$('.grid-overlay').remove();
		
	});

});