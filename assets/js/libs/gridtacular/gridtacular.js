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
 * Require polyfill for IE8 and below.
 */

var customElementPolyfill = require('./register-element-polyfill.js');

/**
 * Wrapper element
 * <g-wrapper></g-wrapper>
 */
 var gridWrapper = document.registerElement('g-wrapper', {
    extends: 'div',
    prototype: object.create(HTMLDivElement.prototype)
 });

 var wrapperDom = new gridWrapper();
 document.body.appendChild(wrapperDom);

/** 
 * Grid element
 * <g-grid></g-grid>
 */
var gridRow = document.registerElement('g-grid', {
    extends: 'div',
    prototype: object.create(HTMLDivElement.prototype)
});
var rowDom = new gridRow();
document.body.appendChild(rowDom);

/** 
 * grid item element
 * <g-item></g-item>
 */
var gridItem = document.registerElement('g-item',{
    extends: 'div',
    prototype: object.create(HTMLDivElement.prototype)
});
var itemDom = new gridItem();
document.body.appendChild(itemDom);