/*
 * stickyNavbar.js v1.3.5
 * https://github.com/jbutko/stickyNavbar.js
 * Fancy sticky navigation jQuery plugin with smart anchor links highlighting
 *
 * Developed and maintenained under MIT licence by Jozef Butko - https://www.jozefbutko.com
 * http://www.opensource.org/licenses/MIT

 * Original jquery-browser code Copyright 2005, 2014 jQuery Foundation, Inc. and other contributors
 * http://jquery.org/license
 *
 * CREDITS:
 * Daniel Eden for Animate.CSS:
 * http://daneden.github.io/animate.css/
 * jQuery easing plugin:
 * http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * COPYRIGHT (C) 2014-2019 Jozef Butko
 * https://github.com/jbutko
 * LAST UPDATE: 15/01/2019
 *
 */
!function(s,i,t){"use strict";s.fn.stickyNavbar=function(e){var a=s.extend({activeClass:"active",sectionSelector:"scrollto",animDuration:350,startAt:0,easing:"swing",animateCSS:!0,animateCSSRepeat:!1,cssAnimation:"fadeInDown",jqueryEffects:!1,jqueryAnim:"slideDown",selector:"a",mobile:!1,mobileWidth:480,zindex:9999,stickyModeClass:"sticky",unstickyModeClass:"unsticky"},e),n=s("."+a.sectionSelector);return n.attr("tabindex",-1),this.each(function(){var e=s(this),o=e.css("position"),r=e.css("zIndex"),d=e.outerHeight(!0),l=e.offset().top-d,c="auto"===e.css("top")?0:e.css("top"),m="a"===a.selector?e.find("li a"):e.find("li");e.find('li a[href*="#"]'),s(i).scrollTop();m.click(function(i){var o,r,l,c,m;if(o="li"===a.selector?s(this).children("a").attr("href"):s(this).attr("href")||"/","http"===o.substring(0,4)||"https"===o.substring(0,5)||"mailto:"===o.substring(0,7)||"/"===o.substring(0,1)||"../"===o.substring(0,3))return!0;for(i.preventDefault(),r=o.substr(1),m=n.length,c={},l=0;l<m;l++)c[n[l].id]=n[l].offsetTop;var u=e.hasClass(a.unstickyModeClass)?c[r]-2*d+2+"px":c[r]-d+2+"px";s("html, body").stop().animate({scrollTop:u},{duration:a.animDuration,easing:a.easing,complete:function(){t.getElementById(r).focus()}})});var u=function(){var u=s(i),f=u.scrollTop(),p=u.width(),C=u.height();if(!a.mobile&&p<a.mobileWidth)return void e.css("position",o);if(m.removeClass(a.activeClass),n.each(function(){var i=s(this).offset().top-d,t=s(this).outerHeight(!0)+i;f>=i&&f<=t&&("a"===a.selector?e.find('li a[href~="#'+this.id+'"]').addClass(a.activeClass):e.find('li a[href~="#'+this.id+'"]').parent().addClass(a.activeClass))}),f>=l+a.startAt?(e.removeClass(a.unstickyModeClass).addClass(" "+a.stickyModeClass),e.css({position:"fixed",zIndex:a.zindex}).stop(),a.jqueryEffects?(a.animateCSSRepeat||e.hide().stop()[a.jqueryAnim](a.animDuration,a.easing),e.hide().stop()[a.jqueryAnim](a.animDuration,a.easing)):a.animateCSS?a.animateCSSRepeat?e.addClass(a.cssAnimation+" animated").one("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd",function(s){e.removeClass(a.cssAnimation+" animated")}):e.addClass(a.cssAnimation+" animated").one("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd"):e.stop()):e.css({position:o,zIndex:r}).removeClass(a.stickyModeClass).addClass(" "+a.unstickyModeClass),"undefined"!=typeof h){var h=n.last(),v=h.offset().top+h.outerHeight(!0);u.scrollTop()+C>=s(t).height()&&f<=v&&m.removeClass(a.activeClass).last().addClass(a.activeClass),f<=l-2&&(e.removeClass(a.cssAnimation+" animated"),a.jqueryEffects?(0===f&&m.removeClass(a.activeClass),f>=l?e.css({position:"fixed",zIndex:a.zindex}).hide().stop()[a.jqueryAnim](a.animDuration,a.easing):e.css({position:o,zIndex:a.zindex})):(0===f&&m.removeClass(a.activeClass),e.css({position:o,top:c}).stop().animate({top:c},a.animDuration,a.easing)))}};s(i).on("scroll",u),s(i).on("ready",u),s(i).on("resize",u),s(i).on("load",u)})}}(jQuery,window,document);