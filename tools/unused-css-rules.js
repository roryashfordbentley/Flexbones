var purify = require('purify-css');

var themefolder = 'app/themes/flexbones';

var content = [themefolder + '/*.php', themefolder + '/**/*.js'];
var css = ['app/themes/flexbones/style.css'];

var options = {
  rejected: true
};

console.log('Found the following Css selectors that do not appear to be in use:\n');

purify(content, css, options);