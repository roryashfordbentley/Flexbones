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

**(sass/config/_functions.scss)**

This function checks to see if the font size multiplied by the baseline is a whole number. If not it rounds up the font size to ensure that the baseline is a whole number, therefore a whole pixel. This fixes browser inconsistencies of rendering sub pixels. (Please note this feature is **Experimental**).

**Function** 

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
**Sass**

```
.whole-baseline{
	font-size: whole_baseline(10,$base); }
}
```

**Html**

```
<html class="whole-baseline">
	
</html>
```

#### Clearfix mixin

**(sass/config/_functions.scss)**

The clearfix mixin can be used to clear floating elements. Simply apply it to a container and any floats within it will be cleared.

**Function** 

```
@mixin clearfix() {
	*zoom:1;
	&:before, &:after {
	    content:"";
	    display:table;
	}
	&:after { clear:both; }
}
```
**Sass**

```
.clear{
	@include clearfix();
}
```

**Html**

```
<div class="clear">
	<div class="float-left">
		Content
	</div>
	<div class="float-right">
		Content
	</div>
</div>
```

#### Modernizr mixin

**(sass/config/_functions.scss)**

A simple and readable way to only apply modern CSS to supporting browsers when working with Modernizr.js.

To use simply pass the function a string that relates to a Modernizr class e.g. @include modernizer('.svg'){}.

**Function** 

```
@mixin modernizr($selector){

	#{$selector} &	{
		@content;
	}
}
```
**Sass**

```
.site-logo{

	background: url('logo.png') no-repeat;
	
	@include modernizr('.svg'){
		background: #010101 url('logo.svg') no-repeat;
	}
}

```

**Html**

```
<div class="site-logo"></div>
```

#### Size function

**(sass/config/_functions.scss)**

The Flexbones size() function allows you to use multiples of a constant size throughout your project.

This function is dependant on the global ```$base``` variable in sass/config/_config.scss. As an example lets say your base size is set to 10px, calling ```base(2)``` would return 20px and base(0.5) would return 5px.

Note that this mixin also checks to see if the global $is_ie is set to true. This way you can easily fix any IE incompatibility with rem units by setting $base_ie to a pixel value in an ie specific stylesheet.


**Function** 

```
@function size($multiplier:1){
	//$is_ie is global and set in style.scss/ie.scss
	@if( $is_ie == true ){
		@return $multiplier * $base_ie;
	} @else {
		@return $multiplier * $base;
	}
}
```
**Sass**

```
.content p{
	padding: size(2);
}

```

**Html**

```
<div class="content">
	<p>Some content.</p>
</div>
```

#### Typesize function

**(sass/config/_functions.scss)**

The Flexbones typesize() function allows you to use multiples of a constant typography base size throughout your project.

This function is dependant on the global ```$base``` variable in sass/config/_config.scss. As an example lets say your base font size is set to 16px, calling ```typesize(2)``` would return 32px and typesize(0.5) would return 8px.

Note that this mixin also checks to see if the global $is_ie is set to true. This way you can easily fix any IE incompatibility with rem units by setting $base_ie to a pixel value in an ie specific stylesheet.


**Function** 

```
@function typesize($multiplier:1){
	//$is_ie is global and set in style.scss/ie.scss
	@if( $is_ie == true ){
		@return ($multiplier * $type_size_ie);
	} @else {
		@return $multiplier * $type_size;
	}
}
```
**Sass**

```
p{
	typesize(1.2);
}

```

**Html**

```
<p>Some content.</p>
```






