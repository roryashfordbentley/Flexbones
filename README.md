# Flexbones Wordpress Theme

## Demo

[Flexbones Demo](http://www.roikles.com/flexbones/)

## Features

* __Lightweight__
* __Responsive__ 
* __Minimalistic Template Approach__ 
* __Modular SASS__ 
* __Modular functions.php__
* __Grunt__
* __gridtacular.js__

## Overview

Not another barebones theme! I built this to speed up the process of developing responsive wordpress themes. It uses SASS/ Compass and the Susy Grid system to allow speedy development.

The original Barebones theme contained everything and the kitchen sink, This time around I have removed as much uneccesary bloat as possible.

The included sass styles are focused on functional CSS rather than presentational CSS. Flexbones provides not only a responsive grid system but responsive images, typography and a responsive baseline grid!

Also bundled is our up coming browser tool Gridtacular that give at-a-glance information on the current page dimensions and breakpoint along with the ability to toggle both a grid overlay and a baseline grid overlay.


## Dependencies

CSS Preprocessing tools

* [SASS](http://sass-lang.com)
* [Compass](http://compass-style.org)
* [Susy](http://susy.oddbird.net/)

## Roadmap

1. Write full documentation
2. Get a domain for demos and docs
3. X-Browser testing
4. Create a woo-commerce Flexbones sub-theme
5. ~~Add a CSS only responsive menu~~
6. Improve DRY development within the theme

## Documentation

### Helper mixins & functions

#### Whole Baseline function

This function checks to see if the font size multiplied by the baseline is a whole number. If not it rounds up the font size to ensure that the baseline is a whole number, therefore a whole pixel. This fixes browser inconsistencies of rendering sub pixels. (Please note this feature is **Experimental**).

```
@function whole_baseline($font_size,$baseline){

	// If its a whole number
	@if( round($font_size * $baseline) == $font_size * $baseline ){
		@return percentage($font_size / 16);
	} @else {
		@return percentage(round($font_size * $baseline) / $baseline / 16);
	}
}
```






