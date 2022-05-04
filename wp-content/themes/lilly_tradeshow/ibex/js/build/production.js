/*!
 * FEATURE.JS 1.0.1, A Fast, simple and lightweight browser feature
 * detection library in just 1kb.
 *
 * http://featurejs.com
 *
 * CSS 3D Transform, CSS Transform, CSS Transition, Canvas, SVG,
 * addEventListener, querySelectorAll, matchMedia, classList API,
 * placeholder, localStorage, History API, Viewport Units, REM Units,
 * CORS, WebGL, Service Worker, Context Menu, Geolocation,
 * Device Motion, Device Orientation, Touch, Async, Defer,
 * Srcset, Sizes & Picture Element.
 *
 *
 * USAGE EXAMPLE:
 * if (feature.webGL) {
 *   console.log("webGL supported!");
 * }
 *
 * Author: @viljamis, https://viljamis.com
 */

/* globals DocumentTouch */
;(function (window, document, undefined) {
  "use strict";

  // For minification only
  var docEl = document.documentElement;


  /**
   * Utilities
   */
  var util = {

    /**
     * Simple create element method
     */
    create : function(el) {
      return document.createElement(el);
    },

    /**
     * Test if it's an old device that we want to filter out
     */
    old : !!(/(Android\s(1.|2.))|(Silk\/1.)/i.test(navigator.userAgent)),

    /**
     * Function that takes a standard CSS property name as a parameter and
     * returns it's prefixed version valid for current browser it runs in
     */
    pfx : (function() {
      var style = document.createElement("dummy").style;
      var prefixes = ["Webkit", "Moz", "O", "ms"];
      var memory = {};
      return function(prop) {
        if (typeof memory[prop] === "undefined") {
          var ucProp = prop.charAt(0).toUpperCase() + prop.substr(1),
            props = (prop + " " + prefixes.join(ucProp + " ") + ucProp).split(" ");
            memory[prop] = null;
          for (var i in props) {
            if (style[props[i]] !== undefined) {
              memory[prop] = props[i];
              break;
            }
          }
        }
        return memory[prop];
      };
    })()

  };


  /**
   * The Feature.js object
   */

  var Feature = {
    // Test if CSS 3D transforms are supported
    css3Dtransform : (function() {
      var test = (!util.old && util.pfx("perspective") !== null);
      return !!test;
    })(),

    // Test if CSS transforms are supported
    cssTransform : (function() {
      var test = (!util.old && util.pfx("transformOrigin") !== null);
      return !!test;
    })(),

    // Test if CSS transitions are supported
    cssTransition : (function() {
      var test = util.pfx("transition") !== null;
      return !!test;
    })(),

    // Test if addEventListener is supported
    addEventListener : !!window.addEventListener,

    // Test if querySelectorAll is supported
    querySelectorAll : !!document.querySelectorAll,

    // Test if matchMedia is supported
    matchMedia : !!window.matchMedia,

    // Test if Device Motion is supported
    deviceMotion : ("DeviceMotionEvent" in window),

    // Test if Device Orientation is supported
    deviceOrientation : ("DeviceOrientationEvent" in window),

    // Test if Context Menu is supported
    contextMenu : ("contextMenu" in docEl && "HTMLMenuItemElement" in window),

    // Test if classList API is supported
    classList : ("classList" in docEl),

    // Test if placeholder attribute is supported
    placeholder : ("placeholder" in util.create("input")),

    // Test if localStorage is supported
    localStorage : (function() {
      var test = "x";
      try {
        localStorage.setItem(test, test);
        localStorage.removeItem(test);
        return true;
      } catch(err) {
        return false;
      }
    })(),

    // Test if History API is supported
    historyAPI : (window.history && "pushState" in window.history),

    // Test if ServiceWorkers are supported
    serviceWorker : ("serviceWorker" in navigator),

    // Test if viewport units are supported
    viewportUnit : (function(el) {
      try {
        el.style.width = "1vw";
        var test = el.style.width !== "";
        return !!test;
      } catch(err) {
        return false;
      }
    })(util.create("dummy")),

    // Test if REM units are supported
    remUnit : (function(el) {
      try {
        el.style.width = "1rem";
        var test = el.style.width !== "";
        return !!test;
      } catch(err) {
        return false;
      }
    })(util.create("dummy")),

    // Test if Canvas is supported
    canvas : (function(el) {
      return !!(el.getContext && el.getContext("2d"));
    })(util.create("canvas")),

    // Test if SVG is supported
    svg : !!document.createElementNS && !!document.createElementNS("http://www.w3.org/2000/svg", "svg").createSVGRect,

    // Test if WebGL is supported
    webGL : (function(el) {
      try {
        return !!(window.WebGLRenderingContext && (el.getContext("webgl") || el.getContext("experimental-webgl")));
      } catch(err) {
        return false;
      }
    })(util.create("canvas")),

    // Test if cors is supported
    cors : ("XMLHttpRequest" in window && "withCredentials" in new XMLHttpRequest()),

    // Tests if touch events are supported, but doesn't necessarily reflect a touchscreen device
    touch : !!(("ontouchstart" in window) || window.navigator && window.navigator.msPointerEnabled && window.MSGesture || window.DocumentTouch && document instanceof DocumentTouch),

    // Test if async attribute is supported
    async : ("async" in util.create("script")),

    // Test if defer attribute is supported
    defer : ("defer" in util.create("script")),

    // Test if Geolocation is supported
    geolocation : ("geolocation" in navigator),

    // Test if img srcset attribute is supported
    srcset : ("srcset" in util.create("img")),

    // Test if img sizes attribute is supported
    sizes : ("sizes" in util.create("img")),

    // Test if Picture element is supported
    pictureElement : ("HTMLPictureElement" in window),

    // Run all the tests and add supported classes
    testAll : function() {
      var classes = " js";
      for (var test in this) {
        if (test !== "testAll" && test !== "constructor" && this[test]) {
          classes += " " + test;
        }
      }
      docEl.className += classes.toLowerCase();
    }

  };

  /**
   * Expose a public-facing API
   */
  window.feature = Feature;

}(window, document));

/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/



;(function( $, window, document, undefined )
{
	$.fn.doubleTapToGo = function( params )
	{
		if( !( 'ontouchstart' in window ) &&
			!navigator.msMaxTouchPoints &&
			!navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

		this.each( function()
		{
			var curItem = false;

			$( this ).on( 'click', function( e )
			{
				var item = $( this );
				if( item[ 0 ] != curItem[ 0 ] )
				{
					e.preventDefault();
					curItem = item;
				}
			});

			$( document ).on( 'click touchstart MSPointerDown', function( e )
			{
				var resetItem = true,
					parents	  = $( e.target ).parents();

				for( var i = 0; i < parents.length; i++ )
					if( parents[ i ] == curItem[ 0 ] )
						resetItem = false;

				if( resetItem )
					curItem = false;
			});
		});
		return this;
	};
})( jQuery, window, document );
// mediaWrapper.js: Simple responsive iframes
// MIT license http://www.opensource.org/licenses/mit-license.php/
// @author Matthew A. K. Smith http://www.akselkreis.com

(function( $ ){

  $.fn.mediaWrapper = function(options) {

    var settings = $.extend( {
      intrinsic   : true,
      baseWidth   : 16,
      baseHeight  : 9
    }, options);

    return this.each(function() {
      var hRatio = '';

      if (settings.intrinsic == true && $(this).attr("width") !== '' && $(this).attr("height") !== ''){
        hRatio = ($(this).attr("height") / $(this).attr("width")) * 100;
      } else {
        hRatio = (settings.baseHeight / settings.baseWidth) * 100;
      }

      $(this).wrap('<div class="mediaWrapper" style="position: relative; width: 100%; height: 0; padding: '+ hRatio +'% 0 0 0; " />').css({"position":"absolute","width":"100%","height":"100%","top":"0","left":"0"});
    });
  };
})( jQuery );

// tableit.js: Simple responsive tables
// MIT license http://www.opensource.org/licenses/mit-license.php/
// Based on method developed by Chris Coyier http://css-tricks.com/responsive-data-tables/
// @author Joshua McGrath http://designjem.com

 (function( $ ){

  $.fn.tableit = function(options) {

	var settings = $.extend( {
		firstRowHeading:		false,
		evenOdd:				true,
		headingMaxCharacters:	null
	}, options);

	return this.each(function() {
		var t = $(this);

		t.addClass('tableit');

		var theadExists = false;
		if (t.find('thead').length>0){
			theadExists = true;
		}

		if(settings.firstRowHeading === true && theadExists === false){
			t.addClass('noHead');
			t.find('tr:not(:first)').each(function(){
				$(this).children('td').each(function(index){
					heading = t.find('tr:first').children('td:eq('+index+')').text();
					$(this).attr('data-title',heading);
					if(settings.headingMaxCharacters !== null && settings.headingMaxCharacters !== 0){
						var copy = $(this).text().length;
						//console.log(heading + ": " + copy);
						if(heading.length > settings.headingMaxCharacters){
							$(this).addClass('overflow');
						}
					}
				});
			});
		}
		else{
			t.find('tbody tr').each(function(){
				$(this).children('td').each(function(index){
					if(t.find('thead tr').children('th').length > 0){
						heading = t.find('thead tr').children('th:eq('+index+')').text();
					}else{
						heading = t.find('thead tr').children('td:eq('+index+')').text();
					}
					$(this).attr('data-title',heading);
					if(settings.headingMaxCharacters !== null && settings.headingMaxCharacters !== 0){
						if(heading.length > settings.headingMaxCharacters){
							$(this).addClass('overflow');
						}
					}
				});
			});
		}

		if(settings.evenOdd){
			t.find('tr:odd').addClass('odd');
		}
	});

  };

})( jQuery );

/*!
  hey, [be]Lazy.js - v1.8.2 - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
  (function(q,m){"function"===typeof define&&define.amd?define(m):"object"===typeof exports?module.exports=m():q.Blazy=m()})(this,function(){function q(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&l(b.options.container,function(a){n(a,"scroll",c.validateT)}),n(window,"resize",c.saveViewportOffsetT),n(window,"resize",c.validateT),n(window,"scroll",c.validateT));m(b)}function m(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a],e;a:{var g=d;e=b.options;var p=g.getBoundingClientRect();if(e.container&&y&&(g=g.closest(e.containerClass))){g=g.getBoundingClientRect();e=r(g,f)?r(p,{top:g.top-e.offset,right:g.right+e.offset,bottom:g.bottom+e.offset,left:g.left-e.offset}):!1;break a}e=r(p,f)}if(e||t(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function r(b,c){return b.right>=c.left&&b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!t(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight))if(c=b.getAttribute(u)||b.getAttribute(a.src)){c=c.split(a.separator);var d=c[A&&1<c.length?1:0],e=b.getAttribute(a.srcset),g="img"===b.nodeName.toLowerCase(),p=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(g||void 0===b.src){var h=new Image,w=function(){a.error&&a.error(b,"invalid");v(b,a.errorClass);k(h,"error",w);k(h,"load",f)},f=function(){g?p||B(b,d,e):b.style.backgroundImage='url("'+d+'")';x(b,a);k(h,"load",f);k(h,"error",w)};p&&(h=b,l(c.getElementsByTagName("source"),function(b){var c=a.srcset,e=b.getAttribute(c);e&&(b.setAttribute("srcset",e),b.removeAttribute(c))}));n(h,"error",w);n(h,"load",f);B(h,d,e)}else b.src=d,x(b,a)}else"video"===b.nodeName.toLowerCase()?(l(b.getElementsByTagName("source"),function(b){var c=a.src,e=b.getAttribute(c);e&&(b.setAttribute("src",e),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),v(b,a.errorClass))}function x(b,c){v(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);l(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function t(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function v(b,c){t(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){f.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;f.right=(window.innerWidth||document.documentElement.clientWidth)+b}function n(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function l(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],d);d++);}function D(b,c,a){var d=0;return function(){var e=+new Date;e-d<c||(d=e,b.apply(a,arguments))}}var u,f,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,h,f){f=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(h=f.length;h--;)f[h].currentStyle.k&&b.push(f[h]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=u=a.options.src||"data-src";y=Element.prototype.closest;A=1<window.devicePixelRatio;f={};f.top=0-a.options.offset;f.left=0-a.options.offset;a.revalidate=function(){q(a)};a.load=function(a,b){var c=this.options;void 0===a.length?z(a,b,c):l(a,function(a){z(a,b,c)})};a.destroy=function(){var a=this._util;this.options.container&&l(this.options.container,function(b){k(b,"scroll",a.validateT)});k(window,"scroll",a.validateT);k(window,"resize",a.validateT);k(window,"resize",a.saveViewportOffsetT);a.count=0;a.elements.length=0;a.destroyed=!0};d.validateT=D(function(){m(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,a);C(a.options.offset);l(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return u=a.src,!1});setTimeout(function(){q(a)})}});
/*! npm.im/object-fit-images 3.2.3 */
var objectFitImages=function(){"use strict";function t(t,e){return"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+t+"' height='"+e+"'%3E%3C/svg%3E"}function e(t){if(t.srcset&&!m&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=l.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);p.call(e,"src")!==n&&b.call(e,"src",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[a];if(c["object-fit"]=c["object-fit"]||"fill",!o.img){if("fill"===c["object-fit"])return;if(!o.skipTest&&g&&!c["object-position"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=p.call(t,"data-ofi-srcset")||t.srcset,o.img.src=p.call(t,"data-ofi-src")||t.src,b.call(t,"data-ofi-src",t.src),t.srcset&&b.call(t,"data-ofi-srcset",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset="");try{s(t)}catch(t){window.console&&console.warn("https://bit.ly/ofi-old-browser")}}e(o.img),t.style.backgroundImage='url("'+(o.img.currentSrc||o.img.src).replace(/"/g,'\\"')+'")',t.style.backgroundPosition=c["object-position"]||"center",t.style.backgroundRepeat="no-repeat",t.style.backgroundOrigin="content-box",/scale-down/.test(c["object-fit"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize="contain":t.style.backgroundSize="auto"}):t.style.backgroundSize=c["object-fit"].replace("none","auto").replace("fill","100% 100%"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[a].img[e||"src"]},set:function(e,i){return t[a].img[i||"src"]=e,b.call(t,"data-ofi-"+i,e),c(t),e}};Object.defineProperty(t,"src",e),Object.defineProperty(t,"currentSrc",{get:function(){return e.get("currentSrc")}}),Object.defineProperty(t,"srcset",{get:function(){return e.get("srcset")},set:function(t){return e.set(t,"srcset")}})}function o(t,e){var i=!h&&!t;if(e=e||{},t=t||"img",f&&!e.skipTest||!d)return!1;"img"===t?t=document.getElementsByTagName("img"):"string"==typeof t?t=document.querySelectorAll(t):"length"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][a]=t[r][a]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener("load",function(t){"IMG"===t.target.tagName&&o(t.target,{skipTest:e.skipTest})},!0),h=!0,t="img"),e.watchMQ&&window.addEventListener("resize",o.bind(null,t,{skipTest:e.skipTest}))}var a="bfred-it:object-fit-images",l=/(object-fit|object-position)\s*:\s*([-\w\s%]+)/g,u="undefined"==typeof Image?{style:{"object-position":1}}:new Image,g="object-fit"in u.style,f="object-position"in u.style,d="background-size"in u.style,m="string"==typeof u.currentSrc,p=u.getAttribute,b=u.setAttribute,h=!1;return o.supportsObjectFit=g,o.supportsObjectPosition=f,function(){function t(t,e){return t[a]&&t[a].img&&("src"===e||"srcset"===e)?t[a].img:t}f||(HTMLImageElement.prototype.getAttribute=function(e){return p.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return b.call(t(this,e),e,String(i))})}(),o}();

/* Author:
	Rob Mathieu :: iBec Creative :: 12/2018
*/
var $ = jQuery.noConflict();

// Object Fit Images Plugin
objectFitImages();



// Lazy Loading Plugin
(function () {
	// Initialize
	var bLazy = new Blazy({
		offset: 200
	});
})();



/**
*	jQuery
*/
$(document).ready(function(){
	
	$('iframe').mediaWrapper();
	$('table').tableit();
	$('#nav li:has(ul)').doubleTapToGo();
	
	
	// Prevents external links from changing the origin, which could lead to phishing attacks.
	// Demo: http://codepen.io/akselkreis/pen/EgxPvA
	$('a[target="_blank"]:not([rel="noopener noreferrer"])').each(function(){
		$(this).attr('rel','noopener noreferrer').addClass('external');
	});


}); // End jQuery