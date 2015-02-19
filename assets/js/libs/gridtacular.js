/**
 * Gridtacular.js
 * 
 * Adds custom html elements to  truly seperate
 * structure from content. Completely optional
 * as Gridtacular uses classes for all element
 * targetting.
 *
 * To use the custom HTML elements below simply 
 * include this .js file at the end of the page 
 * before the closing </body> tag. 
 */


/**
 * Wrapper element
 * <g-wrapper></g-wrapper>
 */
 var gridWrapper = document.registerElement('g-wrapper');
 document.body.appendChild(new gridWrapper());

/** 
 * Grid element
 * <g-grid></g-grid>
 */
var gridRow = document.registerElement('g-grid');
document.body.appendChild(new gridRow());

/** 
 * grid item element
 * <g-item></g-item>
 */
var gridItem = document.registerElement('g-item');
document.body.appendChild(new gridItem());