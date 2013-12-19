/* gridtacular.js */

//immediately invoke function to maintain $.
(function ( $ ) {

	$.fn.gridtacular = function(userSettings) {

		var obj = $(this);

		var defaults = $.extend({
            
            // Default gridtacular settings
			showBreakpoint: true,
			showWidth: true,
			showHeight: true,
			showBaseline: true,
			showGrid: true,
			gridColumnsMax: 12, 
			container: window,
			gridContainer: 'wrapper'

        }, userSettings );

		// Class definitions

		var components = {
			breakpoint: "gridtacular__breakpoint",
			width: "gridtacular__width",
			height: "gridtacular__height",
			baselineToggle: "gridtacular__baseline-toggle",
			gridToggle: "gridtacular__grid-toggle",
			baseline: "gridtacular__baseline-overlay",
			grid: "gridtacular__grid-overlay"
		};

		// Breakpoints Object

		var breakpoints = [{
			label: 's',
			enter: 0,
			exit: 649
		},{
			label: 'm',
			enter: 650,
			exit: 899
			
		},{
			label: 'l',
			enter: 900,
			exit: 1199
		},{
			label: 'xl',
			enter: 1200,
			exit: 10000
		}];

		var setBreakpoint = function(selector){
			// Check each breakpoint when page loads
			$.each(breakpoints, function(i) {

				if( $(window).width() >= breakpoints[i].enter && $(window).width() <= breakpoints[i].exit ){
					$(selector).html( breakpoints[i].label );
				}

			});
		};

		// Set and define what width/heights are displayed, the default is window
		// But this could be replaced by .container or body or a specific element
		

		var setWidth = function(element){
			return $(element).width();
		};

		var setHeight = function(element){
			return $(element).height();
		};

		// Plugin output

		// First output html

		if(defaults.showBreakpoint){
			obj.append('<li class="' + components.breakpoint + '"></li>');
		}

		if(defaults.showWidth){
			obj.append('<li class="' + components.width + '"></li>');
		}

		if(defaults.showHeight){
			obj.append('<li class="' + components.height + '"></li>');
		}

		if(defaults.showBaseline){
			obj.append('<li class="' + components.baselineToggle + '"></li>');
		}

		if(defaults.showGrid){
			obj.append('<li class="' + components.gridToggle + '"></li>');
		}
		// setBreakpoint Content
		setBreakpoint('.' + components.breakpoint);

		// Document Width/Height

		$('.' + components.width).html( '<strong>W:</strong>' + setWidth( defaults.container ) );
		$('.' + components.height).html( '<strong>H:</strong>' + setHeight( defaults.container ) );


		// Update on window resize
		$(window).resize(function() {
			setBreakpoint('.' + components.breakpoint);
			$('.' + components.width).html( '<strong>W:</strong>' + setWidth( defaults.container ) );
			$('.' + components.height).html( '<strong>H:</strong>' + setHeight( defaults.container ) );
		});

		// Grid Overlays

		// Baseline toggle button

		$('.gridtacular__baseline-toggle').append( '<button class="g-button g-button--baseline">Baseline</button>' );

		$('body').append( '<div class="' + components.baseline + '"></div>' );
		
		$('.gridtacular__baseline-toggle').click(function() {
			$('.' + components.baseline).toggle();
			$('.g-button--baseline').toggleClass('g-button--baseline--active');
		});

		// Background grid toggle button

		$('.gridtacular__grid-toggle').append( '<button class="g-button g-button--grid">Grid</button>' );

		$('body').append( '<div class="' + components.grid + '"></div>' );
			
		$('.' + components.grid).append('<div class="' + defaults.gridContainer + '"></div>');
		
		for(var i=1;i <= defaults.gridColumnsMax;i++){
			$('.' + components.grid + ' .wrapper').append( '<div class="col"></div>' );
		}
		
		$('.' + components.grid + ' .col').height( $('body').height() );

		$('.' + components.gridToggle).click(function() {
			$('.' + components.grid).toggle();
			$('.g-button--grid').toggleClass('g-button--grid--active');
		});
	};

}( jQuery ));