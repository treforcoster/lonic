!function(t){var e={};function i(n){if(e[n])return e[n].exports;var r=e[n]={i:n,l:!1,exports:{}};return t[n].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=t,i.c=e,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)i.d(n,r,function(e){return t[e]}.bind(null,r));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="/",i(i.s=257)}({1:function(t,e,i){"use strict";function n(t,e,i,n,r,s,a,o){var l,c="function"==typeof t?t.options:t;if(e&&(c.render=e,c.staticRenderFns=i,c._compiled=!0),n&&(c.functional=!0),s&&(c._scopeId="data-v-"+s),a?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),r&&r.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},c._ssrRegister=l):r&&(l=o?function(){r.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:r),l)if(c.functional){c._injectStyles=l;var u=c.render;c.render=function(t,e){return l.call(e),u(t,e)}}else{var d=c.beforeCreate;c.beforeCreate=d?[].concat(d,l):[l]}return{exports:t,options:c}}i.d(e,"a",(function(){return n}))},11:function(t,e,i){var n=i(17),r=i(38);for(var s in(e=t.exports=function(t,e){return new r(e).process(t)}).FilterCSS=r,n)e[s]=n[s];"undefined"!=typeof window&&(window.filterCSS=t.exports)},12:function(t,e){t.exports={indexOf:function(t,e){var i,n;if(Array.prototype.indexOf)return t.indexOf(e);for(i=0,n=t.length;i<n;i++)if(t[i]===e)return i;return-1},forEach:function(t,e,i){var n,r;if(Array.prototype.forEach)return t.forEach(e,i);for(n=0,r=t.length;n<r;n++)e.call(i,t[n],n,t)},trim:function(t){return String.prototype.trim?t.trim():t.replace(/(^\s*)|(\s*$)/g,"")},spaceIndex:function(t){var e=/\s|\n|\t/.exec(t);return e?e.index:-1}}},13:function(t,e,i){var n=i(16),r=i(19),s=i(40);function a(t,e){return new s(e).process(t)}(e=t.exports=a).filterXSS=a,e.FilterXSS=s,function(){for(var t in n)e[t]=n[t];for(var i in r)e[i]=r[i]}(),"undefined"!=typeof window&&(window.filterXSS=t.exports),"undefined"!=typeof self&&"undefined"!=typeof DedicatedWorkerGlobalScope&&self instanceof DedicatedWorkerGlobalScope&&(self.filterXSS=t.exports)},15:function(t,e,i){"use strict";var n={mixins:[i(2).a],data:function(){return{whitelabel:defender.whitelabel,is_free:parseInt(defender.is_free)}}},r=i(1),s=Object(r.a)(n,(function(){var t=this,e=t._self._c;return e("div",[e("div",{staticClass:"sui-footer",domProps:{innerHTML:t._s(t.whitelabel.footer_text)}}),t._v(" "),!1===t.whitelabel.change_footer?e("div",[1===t.is_free?e("ul",{staticClass:"sui-footer-nav"},[e("li",[e("a",{attrs:{href:"https://profiles.wordpress.org/wpmudev#content-plugins",target:"_blank"}},[t._v(t._s(t.__("Free Plugins")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/features/",target:"_blank"}},[t._v(t._s(t.__("Membership")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/roadmap/",target:"_blank"}},[t._v(t._s(t.__("Roadmap")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wordpress.org/support/plugin/defender-security/",target:"_blank"}},[t._v(t._s(t.__("Support")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/docs/",target:"_blank"}},[t._v(t._s(t.__("Docs")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/hub-welcome/",target:"_blank"}},[t._v(t._s(t.__("The Hub")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/terms-of-service/",target:"_blank"}},[t._v(t._s(t.__("Terms of Service")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://incsub.com/privacy-policy/",target:"_blank"}},[t._v(t._s(t.__("Privacy Policy")))])])]):e("ul",{staticClass:"sui-footer-nav"},[e("li",[e("a",{attrs:{href:"https://wpmudev.com/hub2/",target:"_blank"}},[t._v(t._s(t.__("The Hub")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/projects/category/plugins/",target:"_blank"}},[t._v(t._s(t.__("Plugins")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/roadmap/",target:"_blank"}},[t._v(t._s(t.__("Roadmap")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/hub2/support/",target:"_blank"}},[t._v(t._s(t.__("Support")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/docs/",target:"_blank"}},[t._v(t._s(t.__("Docs")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/hub2/community/",target:"_blank"}},[t._v(t._s(t.__("Community")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://wpmudev.com/terms-of-service/",target:"_blank"}},[t._v(t._s(t.__("Terms of Service")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://incsub.com/privacy-policy/",target:"_blank"}},[t._v(t._s(t.__("Privacy Policy")))])])]),t._v(" "),e("ul",{staticClass:"sui-footer-social"},[e("li",[e("a",{attrs:{href:"https://www.facebook.com/wpmudev",target:"_blank"}},[e("i",{staticClass:"sui-icon-social-facebook",attrs:{"aria-hidden":"true"}}),t._v(" "),e("span",{staticClass:"sui-screen-reader-text"},[t._v(t._s(t.__("Facebook")))])])]),t._v(" "),e("li",[t._m(0),t._v(" "),e("span",{staticClass:"sui-screen-reader-text"},[t._v(t._s(t.__("Twitter")))])]),t._v(" "),e("li",[e("a",{attrs:{href:"https://www.instagram.com/wpmu_dev/",target:"_blank"}},[e("i",{staticClass:"sui-icon-instagram",attrs:{"aria-hidden":"true"}}),t._v(" "),e("span",{staticClass:"sui-screen-reader-text"},[t._v(t._s(t.__("Instagram")))])])])])]):t._e()])}),[function(){var t=this._self._c;return t("a",{attrs:{href:"https://twitter.com/wpmudev",target:"_blank"}},[t("i",{staticClass:"sui-icon-social-twitter",attrs:{"aria-hidden":"true"}})])}],!1,null,null,null);e.a=s.exports},16:function(t,e,i){var n=i(11).FilterCSS,r=i(11).getDefaultWhiteList,s=i(12);function a(){return{a:["target","href","title"],abbr:["title"],address:[],area:["shape","coords","href","alt"],article:[],aside:[],audio:["autoplay","controls","crossorigin","loop","muted","preload","src"],b:[],bdi:["dir"],bdo:["dir"],big:[],blockquote:["cite"],br:[],caption:[],center:[],cite:[],code:[],col:["align","valign","span","width"],colgroup:["align","valign","span","width"],dd:[],del:["datetime"],details:["open"],div:[],dl:[],dt:[],em:[],figcaption:[],figure:[],font:["color","size","face"],footer:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],header:[],hr:[],i:[],img:["src","alt","title","width","height"],ins:["datetime"],li:[],mark:[],nav:[],ol:[],p:[],pre:[],s:[],section:[],small:[],span:[],sub:[],summary:[],sup:[],strong:[],strike:[],table:["width","border","align","valign"],tbody:["align","valign"],td:["width","rowspan","colspan","align","valign"],tfoot:["align","valign"],th:["width","rowspan","colspan","align","valign"],thead:["align","valign"],tr:["rowspan","align","valign"],tt:[],u:[],ul:[],video:["autoplay","controls","crossorigin","loop","muted","playsinline","poster","preload","src","height","width"]}}var o=new n;function l(t){return t.replace(c,"&lt;").replace(u,"&gt;")}var c=/</g,u=/>/g,d=/"/g,f=/&quot;/g,p=/&#([a-zA-Z0-9]*);?/gim,g=/&colon;?/gim,h=/&newline;?/gim,m=/((j\s*a\s*v\s*a|v\s*b|l\s*i\s*v\s*e)\s*s\s*c\s*r\s*i\s*p\s*t\s*|m\s*o\s*c\s*h\s*a):/gi,v=/e\s*x\s*p\s*r\s*e\s*s\s*s\s*i\s*o\s*n\s*\(.*/gi,_=/u\s*r\s*l\s*\(.*/gi;function b(t){return t.replace(d,"&quot;")}function w(t){return t.replace(f,'"')}function y(t){return t.replace(p,(function(t,e){return"x"===e[0]||"X"===e[0]?String.fromCharCode(parseInt(e.substr(1),16)):String.fromCharCode(parseInt(e,10))}))}function k(t){return t.replace(g,":").replace(h," ")}function x(t){for(var e="",i=0,n=t.length;i<n;i++)e+=t.charCodeAt(i)<32?" ":t.charAt(i);return s.trim(e)}function C(t){return t=x(t=k(t=y(t=w(t))))}function S(t){return t=l(t=b(t))}e.whiteList={a:["target","href","title"],abbr:["title"],address:[],area:["shape","coords","href","alt"],article:[],aside:[],audio:["autoplay","controls","crossorigin","loop","muted","preload","src"],b:[],bdi:["dir"],bdo:["dir"],big:[],blockquote:["cite"],br:[],caption:[],center:[],cite:[],code:[],col:["align","valign","span","width"],colgroup:["align","valign","span","width"],dd:[],del:["datetime"],details:["open"],div:[],dl:[],dt:[],em:[],figcaption:[],figure:[],font:["color","size","face"],footer:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],header:[],hr:[],i:[],img:["src","alt","title","width","height"],ins:["datetime"],li:[],mark:[],nav:[],ol:[],p:[],pre:[],s:[],section:[],small:[],span:[],sub:[],summary:[],sup:[],strong:[],strike:[],table:["width","border","align","valign"],tbody:["align","valign"],td:["width","rowspan","colspan","align","valign"],tfoot:["align","valign"],th:["width","rowspan","colspan","align","valign"],thead:["align","valign"],tr:["rowspan","align","valign"],tt:[],u:[],ul:[],video:["autoplay","controls","crossorigin","loop","muted","playsinline","poster","preload","src","height","width"]},e.getDefaultWhiteList=a,e.onTag=function(t,e,i){},e.onIgnoreTag=function(t,e,i){},e.onTagAttr=function(t,e,i){},e.onIgnoreTagAttr=function(t,e,i){},e.safeAttrValue=function(t,e,i,n){if(i=C(i),"href"===e||"src"===e){if("#"===(i=s.trim(i)))return"#";if("http://"!==i.substr(0,7)&&"https://"!==i.substr(0,8)&&"mailto:"!==i.substr(0,7)&&"tel:"!==i.substr(0,4)&&"data:image/"!==i.substr(0,11)&&"ftp://"!==i.substr(0,6)&&"./"!==i.substr(0,2)&&"../"!==i.substr(0,3)&&"#"!==i[0]&&"/"!==i[0])return""}else if("background"===e){if(m.lastIndex=0,m.test(i))return""}else if("style"===e){if(v.lastIndex=0,v.test(i))return"";if(_.lastIndex=0,_.test(i)&&(m.lastIndex=0,m.test(i)))return"";!1!==n&&(i=(n=n||o).process(i))}return i=S(i)},e.escapeHtml=l,e.escapeQuote=b,e.unescapeQuote=w,e.escapeHtmlEntities=y,e.escapeDangerHtml5Entities=k,e.clearNonPrintableCharacter=x,e.friendlyAttrValue=C,e.escapeAttrValue=S,e.onIgnoreTagStripAll=function(){return""},e.StripTagBody=function(t,e){"function"!=typeof e&&(e=function(){});var i=!Array.isArray(t),n=[],r=!1;return{onIgnoreTag:function(a,o,l){if(function(e){return!!i||-1!==s.indexOf(t,e)}(a)){if(l.isClosing){var c="[/removed]",u=l.position+c.length;return n.push([!1!==r?r:l.position,u]),r=!1,c}return r||(r=l.position),"[removed]"}return e(a,o,l)},remove:function(t){var e="",i=0;return s.forEach(n,(function(n){e+=t.slice(i,n[0]),i=n[1]})),e+=t.slice(i)}}},e.stripCommentTag=function(t){for(var e="",i=0;i<t.length;){var n=t.indexOf("\x3c!--",i);if(-1===n){e+=t.slice(i);break}e+=t.slice(i,n);var r=t.indexOf("--\x3e",n);if(-1===r)break;i=r+3}return e},e.stripBlankChar=function(t){var e=t.split("");return(e=e.filter((function(t){var e=t.charCodeAt(0);return 127!==e&&(!(e<=31)||(10===e||13===e))}))).join("")},e.cssFilter=o,e.getDefaultCSSWhiteList=r},17:function(t,e){function i(){var t={"align-content":!1,"align-items":!1,"align-self":!1,"alignment-adjust":!1,"alignment-baseline":!1,all:!1,"anchor-point":!1,animation:!1,"animation-delay":!1,"animation-direction":!1,"animation-duration":!1,"animation-fill-mode":!1,"animation-iteration-count":!1,"animation-name":!1,"animation-play-state":!1,"animation-timing-function":!1,azimuth:!1,"backface-visibility":!1,background:!0,"background-attachment":!0,"background-clip":!0,"background-color":!0,"background-image":!0,"background-origin":!0,"background-position":!0,"background-repeat":!0,"background-size":!0,"baseline-shift":!1,binding:!1,bleed:!1,"bookmark-label":!1,"bookmark-level":!1,"bookmark-state":!1,border:!0,"border-bottom":!0,"border-bottom-color":!0,"border-bottom-left-radius":!0,"border-bottom-right-radius":!0,"border-bottom-style":!0,"border-bottom-width":!0,"border-collapse":!0,"border-color":!0,"border-image":!0,"border-image-outset":!0,"border-image-repeat":!0,"border-image-slice":!0,"border-image-source":!0,"border-image-width":!0,"border-left":!0,"border-left-color":!0,"border-left-style":!0,"border-left-width":!0,"border-radius":!0,"border-right":!0,"border-right-color":!0,"border-right-style":!0,"border-right-width":!0,"border-spacing":!0,"border-style":!0,"border-top":!0,"border-top-color":!0,"border-top-left-radius":!0,"border-top-right-radius":!0,"border-top-style":!0,"border-top-width":!0,"border-width":!0,bottom:!1,"box-decoration-break":!0,"box-shadow":!0,"box-sizing":!0,"box-snap":!0,"box-suppress":!0,"break-after":!0,"break-before":!0,"break-inside":!0,"caption-side":!1,chains:!1,clear:!0,clip:!1,"clip-path":!1,"clip-rule":!1,color:!0,"color-interpolation-filters":!0,"column-count":!1,"column-fill":!1,"column-gap":!1,"column-rule":!1,"column-rule-color":!1,"column-rule-style":!1,"column-rule-width":!1,"column-span":!1,"column-width":!1,columns:!1,contain:!1,content:!1,"counter-increment":!1,"counter-reset":!1,"counter-set":!1,crop:!1,cue:!1,"cue-after":!1,"cue-before":!1,cursor:!1,direction:!1,display:!0,"display-inside":!0,"display-list":!0,"display-outside":!0,"dominant-baseline":!1,elevation:!1,"empty-cells":!1,filter:!1,flex:!1,"flex-basis":!1,"flex-direction":!1,"flex-flow":!1,"flex-grow":!1,"flex-shrink":!1,"flex-wrap":!1,float:!1,"float-offset":!1,"flood-color":!1,"flood-opacity":!1,"flow-from":!1,"flow-into":!1,font:!0,"font-family":!0,"font-feature-settings":!0,"font-kerning":!0,"font-language-override":!0,"font-size":!0,"font-size-adjust":!0,"font-stretch":!0,"font-style":!0,"font-synthesis":!0,"font-variant":!0,"font-variant-alternates":!0,"font-variant-caps":!0,"font-variant-east-asian":!0,"font-variant-ligatures":!0,"font-variant-numeric":!0,"font-variant-position":!0,"font-weight":!0,grid:!1,"grid-area":!1,"grid-auto-columns":!1,"grid-auto-flow":!1,"grid-auto-rows":!1,"grid-column":!1,"grid-column-end":!1,"grid-column-start":!1,"grid-row":!1,"grid-row-end":!1,"grid-row-start":!1,"grid-template":!1,"grid-template-areas":!1,"grid-template-columns":!1,"grid-template-rows":!1,"hanging-punctuation":!1,height:!0,hyphens:!1,icon:!1,"image-orientation":!1,"image-resolution":!1,"ime-mode":!1,"initial-letters":!1,"inline-box-align":!1,"justify-content":!1,"justify-items":!1,"justify-self":!1,left:!1,"letter-spacing":!0,"lighting-color":!0,"line-box-contain":!1,"line-break":!1,"line-grid":!1,"line-height":!1,"line-snap":!1,"line-stacking":!1,"line-stacking-ruby":!1,"line-stacking-shift":!1,"line-stacking-strategy":!1,"list-style":!0,"list-style-image":!0,"list-style-position":!0,"list-style-type":!0,margin:!0,"margin-bottom":!0,"margin-left":!0,"margin-right":!0,"margin-top":!0,"marker-offset":!1,"marker-side":!1,marks:!1,mask:!1,"mask-box":!1,"mask-box-outset":!1,"mask-box-repeat":!1,"mask-box-slice":!1,"mask-box-source":!1,"mask-box-width":!1,"mask-clip":!1,"mask-image":!1,"mask-origin":!1,"mask-position":!1,"mask-repeat":!1,"mask-size":!1,"mask-source-type":!1,"mask-type":!1,"max-height":!0,"max-lines":!1,"max-width":!0,"min-height":!0,"min-width":!0,"move-to":!1,"nav-down":!1,"nav-index":!1,"nav-left":!1,"nav-right":!1,"nav-up":!1,"object-fit":!1,"object-position":!1,opacity:!1,order:!1,orphans:!1,outline:!1,"outline-color":!1,"outline-offset":!1,"outline-style":!1,"outline-width":!1,overflow:!1,"overflow-wrap":!1,"overflow-x":!1,"overflow-y":!1,padding:!0,"padding-bottom":!0,"padding-left":!0,"padding-right":!0,"padding-top":!0,page:!1,"page-break-after":!1,"page-break-before":!1,"page-break-inside":!1,"page-policy":!1,pause:!1,"pause-after":!1,"pause-before":!1,perspective:!1,"perspective-origin":!1,pitch:!1,"pitch-range":!1,"play-during":!1,position:!1,"presentation-level":!1,quotes:!1,"region-fragment":!1,resize:!1,rest:!1,"rest-after":!1,"rest-before":!1,richness:!1,right:!1,rotation:!1,"rotation-point":!1,"ruby-align":!1,"ruby-merge":!1,"ruby-position":!1,"shape-image-threshold":!1,"shape-outside":!1,"shape-margin":!1,size:!1,speak:!1,"speak-as":!1,"speak-header":!1,"speak-numeral":!1,"speak-punctuation":!1,"speech-rate":!1,stress:!1,"string-set":!1,"tab-size":!1,"table-layout":!1,"text-align":!0,"text-align-last":!0,"text-combine-upright":!0,"text-decoration":!0,"text-decoration-color":!0,"text-decoration-line":!0,"text-decoration-skip":!0,"text-decoration-style":!0,"text-emphasis":!0,"text-emphasis-color":!0,"text-emphasis-position":!0,"text-emphasis-style":!0,"text-height":!0,"text-indent":!0,"text-justify":!0,"text-orientation":!0,"text-overflow":!0,"text-shadow":!0,"text-space-collapse":!0,"text-transform":!0,"text-underline-position":!0,"text-wrap":!0,top:!1,transform:!1,"transform-origin":!1,"transform-style":!1,transition:!1,"transition-delay":!1,"transition-duration":!1,"transition-property":!1,"transition-timing-function":!1,"unicode-bidi":!1,"vertical-align":!1,visibility:!1,"voice-balance":!1,"voice-duration":!1,"voice-family":!1,"voice-pitch":!1,"voice-range":!1,"voice-rate":!1,"voice-stress":!1,"voice-volume":!1,volume:!1,"white-space":!1,widows:!1,width:!0,"will-change":!1,"word-break":!0,"word-spacing":!0,"word-wrap":!0,"wrap-flow":!1,"wrap-through":!1,"writing-mode":!1,"z-index":!1};return t}var n=/javascript\s*\:/gim;e.whiteList=i(),e.getDefaultWhiteList=i,e.onAttr=function(t,e,i){},e.onIgnoreAttr=function(t,e,i){},e.safeAttrValue=function(t,e){return n.test(e)?"":e}},18:function(t,e){t.exports={indexOf:function(t,e){var i,n;if(Array.prototype.indexOf)return t.indexOf(e);for(i=0,n=t.length;i<n;i++)if(t[i]===e)return i;return-1},forEach:function(t,e,i){var n,r;if(Array.prototype.forEach)return t.forEach(e,i);for(n=0,r=t.length;n<r;n++)e.call(i,t[n],n,t)},trim:function(t){return String.prototype.trim?t.trim():t.replace(/(^\s*)|(\s*$)/g,"")},trimRight:function(t){return String.prototype.trimRight?t.trimRight():t.replace(/(\s*$)/g,"")}}},19:function(t,e,i){var n=i(12);function r(t){var e,i=n.spaceIndex(t);return e=-1===i?t.slice(1,-1):t.slice(1,i+1),"/"===(e=n.trim(e).toLowerCase()).slice(0,1)&&(e=e.slice(1)),"/"===e.slice(-1)&&(e=e.slice(0,-1)),e}function s(t){return"</"===t.slice(0,2)}var a=/[^a-zA-Z0-9\\_:.-]/gim;function o(t,e){for(;e<t.length;e++){var i=t[e];if(" "!==i)return"="===i?e:-1}}function l(t,e){for(;e<t.length;e++){var i=t[e];if(" "!==i)return"'"===i||'"'===i?e:-1}}function c(t,e){for(;e>0;e--){var i=t[e];if(" "!==i)return"="===i?e:-1}}function u(t){return function(t){return'"'===t[0]&&'"'===t[t.length-1]||"'"===t[0]&&"'"===t[t.length-1]}(t)?t.substr(1,t.length-2):t}e.parseTag=function(t,e,i){"use strict";var n="",a=0,o=!1,l=!1,c=0,u=t.length,d="",f="";t:for(c=0;c<u;c++){var p=t.charAt(c);if(!1===o){if("<"===p){o=c;continue}}else if(!1===l){if("<"===p){n+=i(t.slice(a,c)),o=c,a=c;continue}if(">"===p||c===u-1){n+=i(t.slice(a,o)),d=r(f=t.slice(o,c+1)),n+=e(o,n.length,d,f,s(f)),a=c+1,o=!1;continue}if('"'===p||"'"===p)for(var g=1,h=t.charAt(c-g);""===h.trim()||"="===h;){if("="===h){l=p;continue t}h=t.charAt(c-++g)}}else if(p===l){l=!1;continue}}return a<u&&(n+=i(t.substr(a))),n},e.parseAttr=function(t,e){"use strict";var i=0,r=0,s=[],d=!1,f=t.length;function p(t,i){if(!((t=(t=n.trim(t)).replace(a,"").toLowerCase()).length<1)){var r=e(t,i||"");r&&s.push(r)}}for(var g=0;g<f;g++){var h,m=t.charAt(g);if(!1!==d||"="!==m)if(!1===d||g!==r)if(/\s|\n|\t/.test(m)){if(t=t.replace(/\s|\n|\t/g," "),!1===d){if(-1===(h=o(t,g))){p(n.trim(t.slice(i,g))),d=!1,i=g+1;continue}g=h-1;continue}if(-1===(h=c(t,g-1))){p(d,u(n.trim(t.slice(i,g)))),d=!1,i=g+1;continue}}else;else{if(-1===(h=t.indexOf(m,g+1)))break;p(d,n.trim(t.slice(r+1,h))),d=!1,i=(g=h)+1}else d=t.slice(i,g),i=g+1,r='"'===t.charAt(i)||"'"===t.charAt(i)?i:l(t,g+1)}return i<t.length&&(!1===d?p(t.slice(i)):p(d,u(n.trim(t.slice(i))))),n.trim(s.join(" "))}},2:function(t,e,i){"use strict";var n=i(13),r=wp.i18n,s={whiteList:{a:["href","title","target"],span:["class"],strong:["*"]},safeAttrValue:function(t,e,i,r){return"a"===t&&"href"===e&&"%s"===i?"%s":Object(n.safeAttrValue)(t,e,i,r)}},a=new n.FilterXSS(s),o=[];e.a={data:function(){return{width:{document:0},mobileWidth:768,tabletWidth:1024,isMobile:!1,isTablet:!1}},methods:{__:function(t){var e=r.__(t,"wpdef");return a.process(e)},multipleTranslation:function(t,e,i){var n=r._n(t,e,i,"wpdef");return a.process(n)},xss:function(t){return a.process(t)},vsprintf:function(t){return r.sprintf.apply(null,arguments)},homeUrl:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return defender.home_url+t},siteUrl:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return defender.site_url+t},adminUrl:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";return defender.admin_url+t},assetUrl:function(t){return defender.defender_url+t},maybeHighContrast:function(){return{"sui-color-accessible":!0===defender.misc.high_contrast}},maybeHideBranding:function(){return defender.whitelabel.hide_branding},showSupportLinks:function(){return"disabled"===defender.is_whitelabel&&0===parseInt(defender.is_free)},isWhitelabelDisabled:function(){return"disabled"===defender.is_whitelabel},whitelabelHeroImage:function(){var t=defender.whitelabel.hero_image;return t||!1},campaign_url:function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"project/wp-defender",i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"";return i=i&&"&"!==i.slice(-1)?i+"&":i,defender.wpmudev_api_base_url+e+"/?"+i+"utm_source=defender&utm_medium=plugin&utm_campaign="+t},httpRequest:function(t,e,i,n,r){var s=this;void 0===r&&(this.state.on_saving=!0);var a=ajaxurl+"?action="+this.endpoints[e]+"&_def_nonce="+this.nonces[e],l=jQuery.ajax({url:a,method:t,data:i,success:function(t){var e=t.data;s.state.on_saving=!1,void 0!==e&&void 0!==e.message&&(t.success?Defender.showNotification("success",e.message):Defender.showNotification("error",e.message)),void 0!==n&&n(t)}});o.push(l)},httpGetRequest:function(t,e,i,n){this.httpRequest("get",t,e,i,n)},httpPostRequest:function(t,e,i,n){this.httpRequest("post",t,e,i,n)},rebindSUI:function(){jQuery(".sui-accordion").each((function(){SUI.suiAccordion(this)})),SUI.tabs(),SUI.modalDialog(),jQuery(".sui-select").SUIselect2({placeholder:function(){$(this).data("placeholder")},dropdownCssClass:"sui-select-dropdown"})},associateSUIselect2WithModal:function(t,e){""===e&&(e=jQuery(t).closest('.sui-modal-content[aria-modal="true"]').attr("id")),jQuery(t).SUIselect2({dropdownParent:jQuery("#"+e)})},ucFirst:function(t){return t.charAt(0).toUpperCase()+t.slice(1)},windowWidth:function(t){this.width.document=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,this.isMobile=this.mobileWidth>=this.width.document,this.isTablet=this.tabletWidth>=this.width.document},getFlagEmoji:function(t){if(2===t.length)return t.toUpperCase().replace(/./g,(function(t){return String.fromCodePoint(127397+t.charCodeAt())}))},getCountryName:function(t){return 2===t.length?new Intl.DisplayNames(["en"],{type:"region"}).of(t):this.__("Unknown")},suiRemoveModalClass:function(){var t;null===(t=document.querySelector(".sui-has-modal"))||void 0===t||null===(t=t.classList)||void 0===t||t.remove("sui-has-modal")}},created:function(){this.$nextTick().then(this.windowWidth),window.addEventListener("resize",this.windowWidth)},beforeDestroy:function(){window.removeEventListener("resize",this.windowWidth)}}},257:function(t,e,i){t.exports=i(291)},291:function(t,e,i){"use strict";i.r(e);var n=i(8),r=i.n(n),s={mixins:[i(2).a],name:"onboard",data:function(){return{state:{on_saving:!1,step:"init",progress:"0%"},interval:void 0,is_free:parseInt(defender.is_free),modules:[{name:this.__("Firewall"),state:"",pro:!1},{name:this.__("Recommendations"),state:"",pro:!1},{name:1===parseInt(defender.is_free)?this.__("WP file scanning"):this.__("Malware Scanning"),state:"",pro:!1},{name:this.__("Audit Logging"),state:"",pro:!0},{name:this.__("Blocklist Monitor"),state:"",pro:!0}],nonces:onboard.nonces,endpoints:onboard.endpoints,upgradeTitle:defender.upgrade_title,docsLink:onboard.misc.privacy_link,state_usage_tracking:onboard.misc.state_usage_tracking}},methods:{activate:function(){this.state.step="activating";var t=0,e=this;this.modules[t].state="activating";var i=e.modules.length;1==e.is_free&&(i-=2),this.interval=setInterval((function(){if(t!==i)1==e.is_free&&!0===e.modules[t].pro?t+=1:""===e.modules[t].state?e.modules[t].state="activating":(e.modules[t].state="finish",t+=1,e.state.progress=Math.round(t/i*100)+"%");else{e.state.on_saving=!0,clearInterval(e.interval),e.interval=null;var n=ajaxurl+"?action="+e.endpoints.activating+"&_def_nonce="+e.nonces.activating;jQuery.ajax({url:n,type:"POST",data:{usage_tracking:e.state_usage_tracking},success:function(t){e.state.on_saving=!1,t.success?e.state.step="finish":void 0!==t.data.message&&Defender.showNotification("error",t.data.message)}})}}),300)},finish:function(){location.reload()},skip:function(){var t=this,e=ajaxurl+"?action="+this.endpoints.skip+"&_def_nonce="+this.nonces.skip;jQuery.ajax({url:e,type:"POST",data:{usage_tracking:t.state_usage_tracking},success:function(e){t.state.on_saving=!1,e.success?location.reload():void 0!==e.data.message&&Defender.showNotification("error",e.data.message)}})},cancel:function(){clearInterval(this.interval),this.interval=null,this.state.step="init",this.state.progress="0%"}},computed:{tracking_text:function(){return vsprintf(this.__('Help us improve Defender, minimize errors, and enhance the user experience by sharing anonymous, and non-sensitive usage data. You can change this option in the settings. See <a href="%s" target="_blank">more info</a> about the data we collect.'),this.docsLink)}}},a=i(1),o=Object(a.a)(s,(function(){var t=this,e=t._self._c;return e("div",{staticClass:"sui-wrap",class:t.maybeHighContrast(),attrs:{id:"defender-onboard"}},[e("div",{staticClass:"sui-header"},[e("h1",{staticClass:"sui-header-title"},[t._v("\n      "+t._s(t.__("Get Started"))+"\n    ")]),t._v(" "),e("doc-link",{attrs:{link:""}})],1),t._v(" "),e("opcache-notice"),t._v(" "),"finish"!==t.state.step?e("div",{staticClass:"sui-box sui-message sui-message-lg"},[!1===t.maybeHideBranding()?e("img",{staticClass:"sui-image",attrs:{src:t.assetUrl("assets/img/defender-circle-128.png"),"aria-hidden":"true"}}):t._e(),t._v(" "),t.maybeHideBranding()&&t.whitelabelHeroImage()?e("img",{staticClass:"sui-image wd-whitelabel-custom-branding-logo",attrs:{src:t.whitelabelHeroImage(),"aria-hidden":"true"}}):t._e(),t._v(" "),e("div",{staticClass:"sui-message-content"},[e("h3",[t._v(t._s(t.__("Let's get started")))]),t._v(" "),e("p",[t._v("\n        "+t._s(t.__("Security doesn't take a break, and Defender is here to help! Get started by activating all our security features with recommended default settings, then fine-tune them to suit your specific needs. Alternately, you can skip this process and start from scratch."))+"\n      ")]),t._v(" "),"init"===t.state.step?e("div",{staticClass:"margin-bottom-15"},[e("div",{staticClass:"defender-onboard-settings margin-bottom-30"},[e("div",{staticClass:"sui-form-field"},[e("label",{staticClass:"sui-toggle",attrs:{for:"usage-tracking-enable"}},[e("input",{directives:[{name:"model",rawName:"v-model",value:t.state_usage_tracking,expression:"state_usage_tracking"}],attrs:{role:"presentation",type:"checkbox",name:"usage-tracking-enable",id:"usage-tracking-enable","aria-labelledby":"label-usage-tracking-enable"},domProps:{checked:Array.isArray(t.state_usage_tracking)?t._i(t.state_usage_tracking,null)>-1:t.state_usage_tracking},on:{change:function(e){var i=t.state_usage_tracking,n=e.target,r=!!n.checked;if(Array.isArray(i)){var s=t._i(i,null);n.checked?s<0&&(t.state_usage_tracking=i.concat([null])):s>-1&&(t.state_usage_tracking=i.slice(0,s).concat(i.slice(s+1)))}else t.state_usage_tracking=r}}}),t._v(" "),e("span",{staticClass:"sui-toggle-slider",attrs:{"aria-hidden":"true"}}),t._v(" "),e("span",{staticClass:"sui-toggle-label",attrs:{id:"label-usage-tracking-enable"}},[t._v("\n                "+t._s(t.__("Help us protect your site from malware and hackers"))+"\n                "),e("span",{staticClass:"sui-tag sui-tag-sm"},[t._v(t._s(t.__("Recommended")))])]),t._v(" "),e("span",{staticClass:"sui-description",attrs:{id:"description-usage-tracking-enable"},domProps:{innerHTML:t._s(t.tracking_text)}})])])]),t._v(" "),e("submit-button",{attrs:{type:"button","css-class":"sui-button-blue activate",state:t.state},on:{click:t.activate}},[t._v("\n          "+t._s(t.__("Activate & Configure"))+"\n        ")])],1):t._e(),t._v(" "),"init"===t.state.step?e("p",[e("a",{attrs:{id:"start-from-scratch",href:"#"},on:{click:function(e){return e.preventDefault(),t.skip.apply(null,arguments)}}},[t._v(t._s(t.__("Start from scratch")))])]):t._e(),t._v(" "),"activating"===t.state.step?e("div",[e("div",{staticClass:"sui-progress-block"},[e("div",{staticClass:"sui-progress"},[t._m(0),t._v(" "),e("span",{staticClass:"sui-progress-text",domProps:{textContent:t._s(t.state.progress)}}),t._v(" "),e("div",{staticClass:"sui-progress-bar",attrs:{"aria-hidden":"true"}},[e("span",{style:{width:t.state.progress}})]),t._v(" "),e("button",{staticClass:"sui-button-icon sui-tooltip ml-5",attrs:{disabled:!0===t.state.on_saving,"data-tooltip":"Cancel"},on:{click:t.cancel}},[e("i",{staticClass:"sui-icon-close",attrs:{"aria-hidden":"true"}})])])]),t._v(" "),e("div",{staticClass:"sui-progress-state"},[e("ul",{attrs:{id:"module-status"}},t._l(t.modules,(function(i){return e("li",{class:{current:""!==i.state,inactive:!0===i.pro&&1==t.is_free}},["finish"===i.state?e("i",{staticClass:"sui-icon-check-tick sui-md"}):t._e(),t._v(" "),"finish"!==i.state?e("span",{staticClass:"grey-circle"}):t._e(),t._v(" "+t._s(i.name)+"\n              "),"activating"===i.state?e("i",{staticClass:"sui-icon-loader sui-loading"}):t._e(),t._v(" "),!0===i.pro&&1==t.is_free?e("span",{staticClass:"sui-tag sui-tag-pro"},[t._v(t._s(t.__("Pro")))]):t._e()])})),0)]),t._v(" "),e("div",{staticClass:"sui-box-body text-left"},[1===t.is_free?e("div",{staticClass:"sui-box-settings-row sui-upsell-row"},[e("div",{staticClass:"sui-upsell-notice no-padding"},[e("p",[t._v("\n                "+t._s(t.__("Did you know the Pro version of Defender comes with Audit Logging, Blocklist Monitoring and automated reporting? Get enhanced security protection as part of a WPMU DEV membership with 24/7 support and lots of handy site management tools."))+"\n                "),e("br"),t._v(" "),e("a",{staticClass:"sui-button sui-button-purple text-white",staticStyle:{"margin-top":"10px"},attrs:{target:"_blank",href:t.campaign_url("onboarding")}},[t._v(t._s(t.upgradeTitle))])])])]):t._e()])]):t._e()])]):e("div",{staticClass:"sui-box sui-message sui-message-lg"},[t._m(1),t._v(" "),e("div",{staticClass:"sui-message-content"},[e("h3",[t._v(t._s(t.__("Setup complete!")))]),t._v(" "),e("p",[t._v("\n        "+t._s(t.__("Great, we've activated and pre-configured everything to our recommended defaults. Now you can fine-tune your settings if you need to."))+"\n      ")]),t._v(" "),e("button",{staticClass:"sui-button",on:{click:t.finish}},[t._v(t._s(t.__("Finish")))])])]),t._v(" "),e("app-footer")],1)}),[function(){var t=this._self._c;return t("span",{staticClass:"sui-progress-icon",attrs:{"aria-hidden":"true"}},[t("i",{staticClass:"sui-icon-loader sui-loading"})])},function(){var t=this._self._c;return t("div",{staticClass:"big-check-mark"},[t("i",{staticClass:"sui-icon-check",attrs:{"aria-hidden":"true"}})])}],!1,null,null,null).exports,l=i(66),c=i(30),u=i(15),d=i(31),f=i(32);r.a.component("overlay",l.a),r.a.component("submit-button",c.a),r.a.component("app-footer",u.a),r.a.component("doc-link",d.a),r.a.component("opcache-notice",f.a);new r.a({el:"#defender",components:{onboard:o},render:function(t){return t(o)}})},30:function(t,e,i){"use strict";var n={name:"submit-button",props:["id","state","text","css-class","type"],computed:{getClass:function(){return"sui-button "+this.cssClass},disabled:function(){return!0===this.state.disabled||this.state.on_saving}}},r=i(1),s=Object(r.a)(n,(function(){var t=this,e=t._self._c;return e("button",{staticClass:"sui-button",class:[t.getClass,{"sui-button-onload":t.state.on_saving}],attrs:{id:t.id,type:t.type,disabled:t.disabled},on:{click:function(e){return t.$emit("click")}}},[e("span",{staticClass:"sui-loading-text"},[t._t("default")],2),t._v(" "),e("i",{staticClass:"sui-icon-loader sui-loading",attrs:{"aria-hidden":"true"}})])}),[],!1,null,null,null);e.a=s.exports},31:function(t,e,i){"use strict";var n={mixins:[i(2).a],name:"doc-link",props:["link"],data:function(){return{whitelabel:defender.whitelabel}},methods:{build_url:function(t){return defender.wpmudev_url+t}}},r=i(1),s=Object(r.a)(n,(function(){var t=this._self._c;return!1===this.whitelabel.hide_doc_link?t("div",{staticClass:"sui-actions-right"},[t("a",{staticClass:"sui-button sui-button-ghost",attrs:{href:this.build_url(this.link),target:"_blank"}},[t("i",{staticClass:"sui-icon-academy"}),this._v(" "+this._s(this.__("Documentation"))+"\n    ")])]):this._e()}),[],!1,null,null,null);e.a=s.exports},32:function(t,e,i){"use strict";var n={name:"OPcacheNotice",mixins:[i(2).a],data:function(){return{opcacheSaveComments:defender.opcache_save_comments,opcacheMessage:defender.opcache_message}}},r=i(1),s=Object(r.a)(n,(function(){var t=this._self._c;return"disabled"==this.opcacheSaveComments?t("div",{staticClass:"sui-notice sui-notice-info"},[t("div",{staticClass:"sui-notice-content"},[t("div",{staticClass:"sui-notice-message"},[t("h3",{staticClass:"m-0"},[this._v(this._s(this.__("Enable OPcache Save Comments")))]),this._v(" "),t("p",{domProps:{innerHTML:this._s(this.opcacheMessage)}})])])]):this._e()}),[],!1,null,null,null);e.a=s.exports},38:function(t,e,i){var n=i(17),r=i(39);i(18);function s(t){return null==t}function a(t){(t=function(t){var e={};for(var i in t)e[i]=t[i];return e}(t||{})).whiteList=t.whiteList||n.whiteList,t.onAttr=t.onAttr||n.onAttr,t.onIgnoreAttr=t.onIgnoreAttr||n.onIgnoreAttr,t.safeAttrValue=t.safeAttrValue||n.safeAttrValue,this.options=t}a.prototype.process=function(t){if(!(t=(t=t||"").toString()))return"";var e=this.options,i=e.whiteList,n=e.onAttr,a=e.onIgnoreAttr,o=e.safeAttrValue;return r(t,(function(t,e,r,l,c){var u=i[r],d=!1;if(!0===u?d=u:"function"==typeof u?d=u(l):u instanceof RegExp&&(d=u.test(l)),!0!==d&&(d=!1),l=o(r,l)){var f,p={position:e,sourcePosition:t,source:c,isWhite:d};return d?s(f=n(r,l,p))?r+":"+l:f:s(f=a(r,l,p))?void 0:f}}))},t.exports=a},39:function(t,e,i){var n=i(18);t.exports=function(t,e){";"!==(t=n.trimRight(t))[t.length-1]&&(t+=";");var i=t.length,r=!1,s=0,a=0,o="";function l(){if(!r){var i=n.trim(t.slice(s,a)),l=i.indexOf(":");if(-1!==l){var c=n.trim(i.slice(0,l)),u=n.trim(i.slice(l+1));if(c){var d=e(s,o.length,c,u,i);d&&(o+=d+"; ")}}}s=a+1}for(;a<i;a++){var c=t[a];if("/"===c&&"*"===t[a+1]){var u=t.indexOf("*/",a+2);if(-1===u)break;s=(a=u+1)+1,r=!1}else"("===c?r=!0:")"===c?r=!1:";"===c?r||l():"\n"===c&&l()}return n.trim(o)}},40:function(t,e,i){var n=i(11).FilterCSS,r=i(16),s=i(19),a=s.parseTag,o=s.parseAttr,l=i(12);function c(t){return null==t}function u(t){(t=function(t){var e={};for(var i in t)e[i]=t[i];return e}(t||{})).stripIgnoreTag&&(t.onIgnoreTag&&console.error('Notes: cannot use these two options "stripIgnoreTag" and "onIgnoreTag" at the same time'),t.onIgnoreTag=r.onIgnoreTagStripAll),t.whiteList||t.allowList?t.whiteList=function(t){var e={};for(var i in t)Array.isArray(t[i])?e[i.toLowerCase()]=t[i].map((function(t){return t.toLowerCase()})):e[i.toLowerCase()]=t[i];return e}(t.whiteList||t.allowList):t.whiteList=r.whiteList,t.onTag=t.onTag||r.onTag,t.onTagAttr=t.onTagAttr||r.onTagAttr,t.onIgnoreTag=t.onIgnoreTag||r.onIgnoreTag,t.onIgnoreTagAttr=t.onIgnoreTagAttr||r.onIgnoreTagAttr,t.safeAttrValue=t.safeAttrValue||r.safeAttrValue,t.escapeHtml=t.escapeHtml||r.escapeHtml,this.options=t,!1===t.css?this.cssFilter=!1:(t.css=t.css||{},this.cssFilter=new n(t.css))}u.prototype.process=function(t){if(!(t=(t=t||"").toString()))return"";var e=this.options,i=e.whiteList,n=e.onTag,s=e.onIgnoreTag,u=e.onTagAttr,d=e.onIgnoreTagAttr,f=e.safeAttrValue,p=e.escapeHtml,g=this.cssFilter;e.stripBlankChar&&(t=r.stripBlankChar(t)),e.allowCommentTag||(t=r.stripCommentTag(t));var h=!1;e.stripIgnoreTagBody&&(h=r.StripTagBody(e.stripIgnoreTagBody,s),s=h.onIgnoreTag);var m=a(t,(function(t,e,r,a,h){var m={sourcePosition:t,position:e,isClosing:h,isWhite:Object.prototype.hasOwnProperty.call(i,r)},v=n(r,a,m);if(!c(v))return v;if(m.isWhite){if(m.isClosing)return"</"+r+">";var _=function(t){var e=l.spaceIndex(t);if(-1===e)return{html:"",closing:"/"===t[t.length-2]};var i="/"===(t=l.trim(t.slice(e+1,-1)))[t.length-1];return i&&(t=l.trim(t.slice(0,-1))),{html:t,closing:i}}(a),b=i[r],w=o(_.html,(function(t,e){var i=-1!==l.indexOf(b,t),n=u(r,t,e,i);return c(n)?i?(e=f(r,t,e,g))?t+'="'+e+'"':t:c(n=d(r,t,e,i))?void 0:n:n}));return a="<"+r,w&&(a+=" "+w),_.closing&&(a+=" /"),a+=">"}return c(v=s(r,a,m))?p(a):v}),p);return h&&(m=h.remove(m)),m},t.exports=u},66:function(t,e,i){"use strict";var n={name:"overlay"},r=i(1),s=Object(r.a)(n,(function(){this._self._c;return this._m(0)}),[function(){var t=this._self._c;return t("div",{staticClass:"wd-overlay"},[t("i",{staticClass:"sui-icon-loader sui-loading",attrs:{"aria-hidden":"true"}})])}],!1,null,null,null);e.a=s.exports},8:function(t,e){t.exports=Vue}});