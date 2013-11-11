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
			gridColumnsMax: 16, 
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
			label: 'mobile',
			enter: 0,
			exit: 649,
			img: '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAtCAYAAAAKlvO7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeFJREFUeNpi/P//P8NwBUwMwxiMem6oAhYqmREOxB5AzA7E/6gQ4CAzzgPxDCD+SK5BjFQoUBYBcSyNAv85EEsNlOeEgfgNjVMX40DlOd7hXKD8H86eYx3OnlMazp4TGM1zoy2UUc+Nem604UxNcP3uA4bPX74y8PJwM2gqKwwPz4E8VdU9DUzDgLS4KMOUxlKae5LmybJ9+kKwx8z0tRly4kLB9NOXrxly6ruHfsydungV0i/qqYcIADtHzjHZYA+C5ECepVl3gsIuTygQr8KnAOYRkCcC3ezBNChZ0qPLQ3PPgZJkfEkjwydgYQIDoLyWHRvK4GJtOrQ9BwIgj+09dhqMT128BvfolIZSYjxItucYQJ6jAIf+xwOevHj1f93O/f9PXriCIj550ar/6i6h/7Pru/4TAch2HwutC5NKYDUAymN7l0xFqQogMfpt6JaWzlamDHzAShtUoIAKlkB3B2BF/o1h/a4DYHlQAUPTwRd6FCigOg3kQWQQH+TNUJkZP/QLFOTmFwiQWLcxDspkiQzo1Z4c7fKMeo6SCnYIeO73cPbcg+HsuXejeW6Ieu7PcPbcSwbIBOGwLS3toZ6kBYgbyIYzDDADMQeVPQYKuF+DwXOjza9Rz416jjgAEGAAV+BU0J26FYUAAAAASUVORK5CYII=" alt="small">'
		},{
			label: 'tablet',
			enter: 650,
			exit: 899,
			img: '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAtCAYAAAAKlvO7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAWlJREFUeNpi/P//P8NwBUwMwxiMem7Uc6OeG/XcqOdGPTfqOQYGfiB+BsT/BwGOpbbnMoBYcpBEyCIgZqOm5wwHWYpjpabnmIZznvs3WlqOem7Uc1QBLLQ0XMM1DM7OiQtlyIkNBbNPXbzKEFfSiCjbe+oZzPS1h27Mnbp4DcG+dG34JEtNZQVwbKF7FCQ+5D0HS3LX7z4A0zeANMhjvDzcQ99zpnpa8LwG8uCnL19pksfoWqAgYg7iudNIeQ3kYVhMDumY4wMmP0i+uwb3IMzDw6KeAyVDUHIEeRDkUT4a5ze6eg6W7+iV3+jqOU0VRLGvoSxPFzsZiZwrWAHE4YOoZcUDxF9HG84jvbP6czh7bscgcvNLIP5BTc+tBOLFg8Bjz4HYFoj/UrO0hAFhIOZlgIwfgkaglIBYAMqnaikOxL+BGNQ+ewfl/4HG2m9qVwWjwwyjnhv13KjnRj036rlRz416jn4AIMAAygN8JHsc6xkAAAAASUVORK5CYII=" alt="medium">'
		},{
			label: 'desktop',
			enter: 900,
			exit: 1199,
			img: '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAtCAYAAAAKlvO7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUpJREFUeNrsmD1PAkEQhncvWBJiQmLhBxgaoNdKSn6BiaXUhJaGkvJ+AT8IKqgoUDujYkFiYoxYSVjeNddxHJuL6A55J3mayxbzZD9mbrQxRu1rBGqPg3KUo9zfRsZxXQ4cAu1J3vaJfwcfyatQChIIQGj8jTDKMTZ/vaXOnYEnz09fATynuXNawNXSaR8UCe2LYSmgHOUoRznK/adcuX7zA3eOcpSjHOUo5+kM5Vfitt1d+9ZpNlSlVJQvNxxP1r59zr9294u+ZYZyAl48P32nYJrmzmUFXK1smgfFDl5CAXKh2jAkSjqWV6Av5GGsgYGr3AF4BMdC5F7BOfh2OZYtQWIqyrXlsnN5MBNY4JfgCLwl7VxPaOcSRLlv3LkLW2uFd12XYBQnd2+nAsLlHkAlrv26BlWwENwr37m2X/zloRzlKEc5GysBBgA0iwso3vtJygAAAABJRU5ErkJggg==" alt="large">'
		},{
			label: 'bigscreen',
			enter: 1200,
			exit: 10000,
			img: '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAtCAYAAAAKlvO7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAhVJREFUeNrsmj0sQ1EUx8+rCvEtIhIMEgZiMOlSAwkLk49YaIVBgrUkLFgYsPkc21qkoiIhSCVdaiiLCGIQIj7DIA0D0dQ513tNbW090ntz/8m/7/slv573/ue+9imhUAhUJaGTgX8F0Z/okBE/UtFOdC06TQC4D/QlulPByrXjzAqIp3UDfuSBmMo0qNeoiAoaQGBJOAkn4SSchJNwEk7CSTgJl5Bwt49PYGruhvKGdvAfnYTXW23jbN3kgp0tzzpdbJmm3MAVFeTDgKWNzQ9PzUPg9Q3sa5sMNHLbf8mo9wm7Wppgb/+QAY1Mz+P0lK2fHOyHrIx0/u85AiF5fAesevXmajBVVYoRKHQJUgU1Tdj6xUlLqpZ71xtedri3xIGjVCRAqiBLR4cLzi6u+IejIKGqUXg4ZsbCl6fWBrhNS6oWtQASxb4W/x6fn0FTW4i8F9073nCaaqooLYHhvq7Eg5tzrn43ckxGDYIqSOlJjZy215tNP5o++a9Evzj34nRJwNHXrhxbSjgJJ+F0hVMEZVMI7l5QuBuCOxQUbpvg7tCLgoG9oDcU9W0GepOhA92IzoXf/9tKX1oNOtpH72P0tQ4BR8PJc/Q4+lmJeFVDT6WgH9A5Ue5vQS/z0grKYgAj9fDU51pj3L8Onc0DHJ3TGsdxZh7gCtGlcRw3lNBP4qqK0aPo9xhGP7RfQE1t3d6L+RJgACNsn7fi5+78AAAAAElFTkSuQmCC" alt="x-large">'
		}];

		var setBreakpoint = function(selector){
			// Check each breakpoint when page loads
			$.each(breakpoints, function(i) {

				if( $(window).width() >= breakpoints[i].enter && $(window).width() <= breakpoints[i].exit ){
					$(selector).html( breakpoints[i].img );
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

		$('.' + components.width).html( '<strong>W:</strong><br>' + setWidth( defaults.container ) );
		$('.' + components.height).html( '<strong>H:</strong><br>' + setHeight( defaults.container ) );


		// Update on window resize
		$(window).resize(function() {
			setBreakpoint('.' + components.breakpoint);
			$('.' + components.width).html( '<strong>W:</strong><br>' + setWidth( defaults.container ) );
			$('.' + components.height).html( '<strong>H:</strong><br>' + setHeight( defaults.container ) );
		});


		// Grid Overlays

		// Baseline toggle button

		$('.gridtacular__baseline-toggle').append( '<a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAbCAYAAADGfCe4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAE1JREFUeNrs1jkVACAQxNCFhzH8Nzji6BHA8eMgzUxSn8Tb1BwfQJIkybMoa30ed2wB3ENSPC6EJEmSikfxQPEoHhdCkiRJxbMvniHAABwMEBgkKHhDAAAAAElFTkSuQmCC" /></a>' );

		$('body').append( '<div class="' + components.baseline + '"></div>' );
		
		$('.gridtacular__baseline-toggle').click(function() {
			
			$('.' + components.baseline).toggle();

		});

		// Background grid toggle button

		$('.gridtacular__grid-toggle').append( '<a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAAbCAYAAADGfCe4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAExJREFUeNrsz7EJACAMAMEgDqb7N26kliLY2Yj3kCIkzUU/V2Lp5b8UHwQJCQkJCQkJCQkJCQkJCQkJCQkJCXm3PKcebm3bn/0bAgwAH0Cpe8V3YHEAAAAASUVORK5CYII=" /></a>' );

		$('body').append( '<div class="' + components.grid + '"></div>' );
			
		$('.' + components.grid).append('<div class="' + defaults.gridContainer + '"></div>');
		
		for(var i=1;i <= defaults.gridColumnsMax;i++){
			$('.' + components.grid + ' .wrapper').append( '<div class="col"></div>' );
		}
		
		$('.' + components.grid + ' .col').height( $('body').height() );

		$('.' + components.gridToggle).click(function() {
			$('.' + components.grid).toggle();

		});
			

	};

}( jQuery ));


jQuery(document).ready(function($) { 

	//initialise the module

		/*$('.gridtacular').gridtacular({
			showWidth: true,showHeight: false,
		});*/

	$(".gridtacular").gridtacular();

});