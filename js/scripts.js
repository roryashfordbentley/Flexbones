/* REM polyfill */
/* https://github.com/chuckcarpenter/REM-unit-polyfill */
(function(e,t){var n=function(){var e=document.createElement("div");e.style.cssText="font-size: 1rem;";return/rem/.test(e.style.fontSize)},r=function(){var e=document.getElementsByTagName("link"),t=[];for(var n=0;n<e.length;n++)if(e[n].rel.toLowerCase()==="stylesheet"&&e[n].getAttribute("data-norem")===null)t.push(e[n]);return t},i=function(){var e=[];v=r();v.og=v.length;for(var t=0;t<v.length;t++){e[t]=v[t].href;f(e[t],s,t)}},s=function(e,t){var n=l(h(e.responseText)),r=/[\w\d\s\-\/\\\[\]:,.'"*()<>+~%#^$_=|@]+\{[\w\d\s\-\/\\%#:;,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:;,.'"*()]*\}/g,i=n.match(r),s=/\d*\.?\d+rem/g,u=n.match(s);if(i!==null&&i.length!==0){m=m.concat(i);g=g.concat(u)}if(t===v.og-1)o()},o=function(){var e=/[\w\d\s\-\/\\%#:,.'"*()]+\d*\.?\d+rem[\w\d\s\-\/\\%#:,.'"*()]*[;}]/g;for(var t=0;t<m.length;t++){d=d+m[t].substr(0,m[t].indexOf("{")+1);var n=m[t].match(e);for(var r=0;r<n.length;r++){d=d+n[r];if(r===n.length-1&&d[d.length-1]!=="}")d=d+"\n}"}}u()},u=function(){for(var e=0;e<g.length;e++)y[e]=Math.round(parseInt(g[e].substr(0,g[e].length-3)*w,10))+"px";a()},a=function(){for(var e=0;e<y.length;e++)if(y[e])d=d.replace(g[e],y[e]);var t=document.createElement("style");t.setAttribute("type","text/css");t.id="remReplace";document.getElementsByTagName("head")[0].appendChild(t);if(t.styleSheet)t.styleSheet.cssText=d;else t.appendChild(document.createTextNode(d))},f=function(t,n,r){try{var i=p();i.open("GET",t,true);i.send();var s=function(){var e,t=3,n=document.createElement("div"),r=n.getElementsByTagName("i");while(n.innerHTML="<!--[if gt IE "+ ++t+"]><i></i><![endif]-->",r[0]);return t>4?t:e}();if(s>=7)i.onreadystatechange=function(){if(i.readyState===4)n(i,r)};else i.onreadystatechange=new function(){if(i.readyState===4)n(i,r)}}catch(o){if(e.XDomainRequest){var u=new XDomainRequest;u.open("get",t);u.onload=function(){n(u,r)};u.onerror=function(){return false};u.send()}}},l=function(e){var t=e.search(/\/\*/),n=e.search(/\*\//);if(t>-1&&n>t){e=e.substring(0,t)+e.substring(n+2);return l(e)}else return e},c=function(){if(e.matchMedia||e.msMatchMedia)return true;return false},h=function(e){if(!c())while(e.match(/@media/)!==null){var t=e.match(/@media/).index,n=e.match(/\}\s*\}/);e=e.substring(0,t)+e.substring(n.index+n[0].length)}return e},p=function(){if(e.XMLHttpRequest)return new XMLHttpRequest;else try{return new ActiveXObject("MSXML2.XMLHTTP")}catch(t){try{return new ActiveXObject("Microsoft.XMLHTTP")}catch(n){}}};if(!n()){var d="",v=[],m=[],g=[],y=[],b=document.getElementsByTagName("body")[0],w="";if(b.currentStyle)if(b.currentStyle.fontSize.indexOf("px")>=0)w=b.currentStyle.fontSize.replace("px","");else if(b.currentStyle.fontSize.indexOf("em")>=0)w=b.currentStyle.fontSize.replace("em","");else if(b.currentStyle.fontSize.indexOf("pt")>=0)w=b.currentStyle.fontSize.replace("pt","");else w=b.currentStyle.fontSize.replace("%","")/100*16;else if(e.getComputedStyle)w=document.defaultView.getComputedStyle(b,null).getPropertyValue("font-size").replace("px","");i()}})(window);



/*! Sidr - v1.1.1 - 2013-03-14
 * https://github.com/artberri/sidr
 * Copyright (c) 2013 Alberto Varela; Licensed MIT */
(function(e){var t=!1,i=!1,o={isUrl:function(e){var t=RegExp("^(https?:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i");return t.test(e)?!0:!1},loadContent:function(e,t){e.html(t)},addPrefix:function(e){var t=e.attr("id"),i=e.attr("class");"string"==typeof t&&""!==t&&e.attr("id",t.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-id-$1")),"string"==typeof i&&""!==i&&"sidr-inner"!==i&&e.attr("class",i.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-class-$1")),e.removeAttr("style")},execute:function(o,n,s){"function"==typeof n?(s=n,n="sidr"):n||(n="sidr");var a,d,l,c=e("#"+n),f=e(c.data("body")),u=e("html"),p=c.outerWidth(!0),y=c.data("speed"),v=c.data("side");if("open"===o||"toogle"===o&&!c.is(":visible")){if(c.is(":visible")||t)return;if(i!==!1)return r.close(i,function(){r.open(n)}),void 0;t=!0,"left"===v?(a={left:p+"px"},d={left:"0px"}):(a={right:p+"px"},d={right:"0px"}),l=u.scrollTop(),u.css("overflow-x","hidden").scrollTop(l),f.css({width:f.width(),position:"absolute"}).animate(a,y),c.css("display","block").animate(d,y,function(){t=!1,i=n,"function"==typeof s&&s(n)})}else{if(!c.is(":visible")||t)return;t=!0,"left"===v?(a={left:0},d={left:"-"+p+"px"}):(a={right:0},d={right:"-"+p+"px"}),l=u.scrollTop(),u.removeAttr("style").scrollTop(l),f.animate(a,y),c.animate(d,y,function(){c.removeAttr("style"),f.removeAttr("style"),e("html").removeAttr("style"),t=!1,i=!1,"function"==typeof s&&s(n)})}}},r={open:function(e,t){o.execute("open",e,t)},close:function(e,t){o.execute("close",e,t)},toogle:function(e,t){o.execute("toogle",e,t)}};e.sidr=function(t){return r[t]?r[t].apply(this,Array.prototype.slice.call(arguments,1)):"function"!=typeof t&&"string"!=typeof t&&t?(e.error("Method "+t+" does not exist on jQuery.sidr"),void 0):r.toogle.apply(this,arguments)},e.fn.sidr=function(t){var i=e.extend({name:"sidr",speed:200,side:"left",source:null,renaming:!0,body:"body"},t),n=i.name,s=e("#"+n);if(0===s.length&&(s=e("<div />").attr("id",n).appendTo(e("body"))),s.addClass("sidr").addClass(i.side).data({speed:i.speed,side:i.side,body:i.body}),"function"==typeof i.source){var a=i.source(n);o.loadContent(s,a)}else if("string"==typeof i.source&&o.isUrl(i.source))e.get(i.source,function(e){o.loadContent(s,e)});else if("string"==typeof i.source){var d="",l=i.source.split(",");if(e.each(l,function(t,i){d+='<div class="sidr-inner">'+e(i).html()+"</div>"}),i.renaming){var c=e("<div />").html(d);c.find("*").each(function(t,i){var r=e(i);o.addPrefix(r)}),d=c.html()}o.loadContent(s,d)}else null!==i.source&&e.error("Invalid Sidr Source");return this.each(function(){var t=e(this),i=t.data("sidr");i||(t.data("sidr",n),t.click(function(e){e.preventDefault(),r.toogle(n)}))})}})(jQuery);

jQuery(document).ready(function($) { 

	/* Mobile Navigation Slider */

	$('.mobile-header__button').sidr({
    	name: 'mobile-nav',
    	source: '.primary-nav'
    });

    /*$('.content-image').css({

    });*/

});

/* Google Analytics */

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'XX-XXXXXXXX-X', '');
ga('send', 'pageview');

