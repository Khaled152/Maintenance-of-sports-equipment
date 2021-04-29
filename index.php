<!DOCTYPE html>
<html lang="en-US" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"9700abca30",applicationID:"9339867"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(7),c=e(8),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(9);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e){return!(!e||!e.protocol||"file:"===e.protocol)}t.exports=r},{}],4:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(6),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],5:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],6:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],7:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],8:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],9:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(7),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=x.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=l.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+x.offset],null,"api")}var a=e(2),c=e("handle"),f=e(7),u=e("ee"),s=e(5),d=e(3),p=window,l=p.document,m="addEventListener",v="attachEvent",g=p.XMLHttpRequest,w=g&&g.prototype;if(d(p.location)){NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:g,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:b,userAgent:s};e(1),e(4),l[m]?(l[m]("DOMContentLoaded",o,!1),p[m]("load",r,!1)):(l[v]("onreadystatechange",i),p[v]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(8),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="">
<title>Home | المستشار للصيانه</title>
<style id="vamtam-theme-options">:root {--vamtam-default-bg-color:#fff;
--vamtam-default-line-color:rgba( var( --vamtam-accent-color-7-rgb ), 1 );
--vamtam-small-padding:20px;
--vamtam-horizontal-padding:50px;
--vamtam-vertical-padding:30px;
--vamtam-horizontal-padding-large:60px;
--vamtam-vertical-padding-large:60px;
--vamtam-no-border-link:none;
--vamtam-border-radius:0px;
--vamtam-border-radius-oval:0px;
--vamtam-border-radius-small:0px;
--vamtam-overlay-color:#000000;
--vamtam-overlay-color-hc:#ffffff;
--vamtam-box-outer-padding:60px;
--vamtam-body-link-hover:#000000;
--vamtam-body-link-active:#000000;
--vamtam-site-max-width:1260px;
--vamtam-accent-color-1:#D6FB00;
--vamtam-accent-color-1-hc:#000000;
--vamtam-accent-color-1-rgb:214,251,0;
--vamtam-accent-color-2:#191919;
--vamtam-accent-color-2-hc:#FFFFFF;
--vamtam-accent-color-2-rgb:25,25,25;
--vamtam-accent-color-3:#5E5E5E;
--vamtam-accent-color-3-hc:#FFFFFF;
--vamtam-accent-color-3-rgb:94,94,94;
--vamtam-accent-color-4:#313131;
--vamtam-accent-color-4-hc:#FFFFFF;
--vamtam-accent-color-4-rgb:49,49,49;
--vamtam-accent-color-5:#FFFFFF;
--vamtam-accent-color-5-hc:#000000;
--vamtam-accent-color-5-rgb:255,255,255;
--vamtam-accent-color-6:#000000;
--vamtam-accent-color-6-hc:#FFFFFF;
--vamtam-accent-color-6-rgb:0,0,0;
--vamtam-accent-color-7:#EDEDED;
--vamtam-accent-color-7-hc:#000000;
--vamtam-accent-color-7-rgb:237,237,237;
--vamtam-accent-color-8:#929292;
--vamtam-accent-color-8-hc:#FFFFFF;
--vamtam-accent-color-8-rgb:146,146,146;
--vamtam-body-link-regular:#191919;
--vamtam-body-link-visited:#191919;
--vamtam-sticky-header-bg-color:#D6FB00;
--vamtam-primary-font-font-family:'Helvetica';
--vamtam-primary-font-font-size-desktop:16px;
--vamtam-primary-font-font-size-tablet:16px;
--vamtam-primary-font-font-size-phone:16px;
--vamtam-primary-font-line-height-desktop:1.375em;
--vamtam-primary-font-line-height-tablet:1.375em;
--vamtam-primary-font-line-height-phone:1.375em;
--vamtam-primary-font-color:#191919;
--vamtam-h1-font-family:'Kanit';
--vamtam-h1-font-weight:600;
--vamtam-h1-transform:uppercase;
--vamtam-h1-font-size-desktop:70px;
--vamtam-h1-font-size-tablet:65px;
--vamtam-h1-font-size-phone:50px;
--vamtam-h1-line-height-desktop:0.91em;
--vamtam-h1-line-height-tablet:0.91em;
--vamtam-h1-line-height-phone:0.91em;
--vamtam-h1-color:#191919;
--vamtam-h2-font-family:'Kanit';
--vamtam-h2-font-weight:700;
--vamtam-h2-transform:uppercase;
--vamtam-h2-font-size-desktop:60px;
--vamtam-h2-font-size-tablet:35px;
--vamtam-h2-font-size-phone:40px;
--vamtam-h2-line-height-desktop:0.86em;
--vamtam-h2-line-height-tablet:0.86em;
--vamtam-h2-line-height-phone:0.86em;
--vamtam-h2-letter-spacing-desktop:1px;
--vamtam-h2-letter-spacing-tablet:1px;
--vamtam-h2-letter-spacing-phone:1px;
--vamtam-h2-color:#191919;
--vamtam-h3-font-family:'Kanit';
--vamtam-h3-font-weight:600;
--vamtam-h3-transform:uppercase;
--vamtam-h3-font-size-desktop:36px;
--vamtam-h3-font-size-tablet:32px;
--vamtam-h3-font-size-phone:32px;
--vamtam-h3-line-height-desktop:0.95em;
--vamtam-h3-line-height-tablet:0.94em;
--vamtam-h3-line-height-phone:0.94em;
--vamtam-h3-color:#191919;
--vamtam-h4-font-family:'Kanit';
--vamtam-h4-font-weight:600;
--vamtam-h4-transform:uppercase;
--vamtam-h4-font-size-desktop:30px;
--vamtam-h4-font-size-tablet:30px;
--vamtam-h4-font-size-phone:30px;
--vamtam-h4-line-height-desktop:0.93em;
--vamtam-h4-line-height-tablet:0.93em;
--vamtam-h4-line-height-phone:0.93em;
--vamtam-h4-color:#191919;
--vamtam-h5-font-family:'Kanit';
--vamtam-h5-font-weight:600;
--vamtam-h5-font-size-desktop:20px;
--vamtam-h5-font-size-tablet:20px;
--vamtam-h5-font-size-phone:20px;
--vamtam-h5-line-height-desktop:1.1em;
--vamtam-h5-line-height-tablet:1.1em;
--vamtam-h5-line-height-phone:1.1em;
--vamtam-h5-color:#191919;
--vamtam-h6-font-family:'Kanit';
--vamtam-h6-font-weight:600;
--vamtam-h6-transform:uppercase;
--vamtam-h6-font-size-desktop:14px;
--vamtam-h6-font-size-tablet:14px;
--vamtam-h6-font-size-phone:14px;
--vamtam-h6-line-height-desktop:1em;
--vamtam-h6-line-height-tablet:1em;
--vamtam-h6-line-height-phone:1em;
--vamtam-h6-color:#191919;
--vamtam-loading-animation:url('wp-content/themes/f7/vamtam/assets/images/loader-ring.gif');
}</style><meta name='robots' content='max-image-preview:large' />
<link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Fitness &raquo; Feed" href="feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="Fitness &raquo; Comments Feed" href="comments/feed/index.php" />
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='sbi_styles-css' href='wp-content/plugins/instagram-feed-pro/css/sbi-styles.min8040.css?ver=5.12' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.mina78f.css?ver=5.7.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='wc-block-vendors-style-css' href='wp-content/cache/min/1/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style83f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='wc-block-style-css' href='wp-content/cache/min/1/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style83f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='woocommerce-layout-css' href='wp-content/cache/min/1/wp-content/plugins/woocommerce/assets/css/woocommerce-layout83f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/cache/min/1/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen83f9.css?ver=1619108455' type='text/css' media='only screen and (max-width: 768px)' />
<link data-minify="1" rel='stylesheet' id='woocommerce-general-css' href='wp-content/cache/min/1/wp-content/plugins/woocommerce/assets/css/woocommerce83f9.css?ver=1619108455' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.mindeae.css?ver=3.2.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-frontend-css' href='wp-content/cache/min/1/wp-content/plugins/elementor/assets/css/frontend.min83f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-4-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/css/post-483f9.css?ver=1619108455' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='wp-content/plugins/elementor-pro/assets/css/frontend.mindeae.css?ver=3.2.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='font-awesome-5-all-css' href='wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min83f9.css?ver=1619108455' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.mindeae.css?ver=3.2.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-11-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/css/post-11cd4f.css?ver=1619108494' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-16668-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/css/post-16668cd4f.css?ver=1619108494' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-284-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/css/post-284cd4f.css?ver=1619108494' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-3237-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/css/post-323783f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='vamtam-front-all-css' href='wp-content/cache/min/1/wp-content/themes/f7/vamtam/assets/css/dist/all83f9.css?ver=1619108455' type='text/css' media='all' />
<style id='vamtam-front-all-inline-css' type='text/css'>

			@font-face {
				font-family: 'icomoon';
				src: url(wp-content/themes/f7/vamtam/assets/fonts/icons/icomoon.woff2) format('woff2'),
					 url( wp-content/themes/f7/vamtam/assets/fonts/icons/icomoon.woff) format('woff'),
					 url(wp-content/themes/f7/vamtam/assets/fonts/icons/icomoon.ttf) format('ttf');
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}
		
				@font-face {
					font-family: 'vamtam-theme';
					src: url(wp-content/themes/f7/vamtam/assets/fonts/theme-icons/theme-icons.woff2) format('woff2'),
						url(wp-content/themes/f7/vamtam/assets/fonts/theme-icons/theme-icons.woff) format('woff');
					font-weight: normal;
					font-style: normal;
					font-display: swap;
				}
			

.vamtam-box-outer-padding,
.limit-wrapper,
.header-padding {
	padding-left: 0;
	padding-right: 0;
}

.vamtam-box-outer-padding .vamtam-box-outer-padding,
.limit-wrapper .limit-wrapper {
	padding-left: 0;
	padding-right: 0;
	margin-left: 0;
	margin-right: 0;
}

@media ( min-width: 1026px ) and ( max-width: 1260px ) {
	.vamtam-box-outer-padding,
	.limit-wrapper,
	.header-padding {
		padding-left: 40px;
		padding-right: 40px;
	}
}

@media ( max-width: 1025px ) {
	.vamtam-box-outer-padding,
	.limit-wrapper,
	.header-padding {
		padding-left: 30px;
		padding-right: 30px;
	}
}

@media ( max-width: 768px ) {
	.vamtam-box-outer-padding,
	.limit-wrapper,
	.header-padding {
		padding-left: 20px;
		padding-right: 20px;
	}
}


</style>
<link data-minify="1" rel='stylesheet' id='vamtam-wc-styles-css' href='wp-content/cache/min/1/wp-content/themes/f7/vamtam/assets/css/dist/woocommerce/main83f9.css?ver=1619108455' type='text/css' media='all' />
<link rel='stylesheet' id='vamtam-theme-layout-max-low-css' href='wp-content/themes/f7/vamtam/assets/css/dist/responsive/layout-max-low32a9.css?ver=1616271023' type='text/css' media='(min-width: 1025px) and (max-width: 1260px)' />
<link rel='stylesheet' id='vamtam-theme-layout-max-css' href='wp-content/themes/f7/vamtam/assets/css/dist/responsive/layout-max32a9.css?ver=1616271023' type='text/css' media='(min-width: 1025px)' />
<link rel='stylesheet' id='vamtam-theme-layout-below-max-css' href='wp-content/themes/f7/vamtam/assets/css/dist/responsive/layout-below-max32a9.css?ver=1616271023' type='text/css' media='(max-width: 1024px)' />
<link rel='stylesheet' id='vamtam-theme-layout-small-css' href='wp-content/themes/f7/vamtam/assets/css/dist/responsive/layout-small32a9.css?ver=1616271023' type='text/css' media='(max-width: 767px)' />
<link data-minify="1" rel='stylesheet' id='vamtam-theme-wc-small-screen-css' href='wp-content/cache/min/1/wp-content/themes/f7/vamtam/assets/css/dist/responsive/wc-small-screen83f9.css?ver=1619108455' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Kanit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=5.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-fa-brands-css' href='wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.mincd4f.css?ver=1619108494' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-theme-icons-css' href='wp-content/cache/min/1/wp-content/uploads/elementor/custom-icons/theme-icons/style83f9.css?ver=1619108455' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-fa-solid-css' href='wp-content/cache/min/1/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.mincd4f.css?ver=1619108494' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.mindeae.js?ver=3.2.1' id='font-awesome-4-shim-js' defer></script>
<link rel="https://api.w.org/" href="wp-json/index.php" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/11.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.7.1" />
<meta name="generator" content="WooCommerce 5.2.2" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='index.php' />
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<link rel="icon" href="assets/images/logo.png" sizes="32x32" />
<link rel="icon" href="assets/images/logo.png" sizes="192x192" />
<link rel="apple-touch-icon" href="assets/images/logo.png" />
<meta name="msapplication-TileImage" content="assets/images/logo.png" />
<style type="text/css" id="wp-custom-css">
			@media (min-width: 1026px) and (max-width: 1260px){
  body.woocommerce.single.single-product .limit-wrapper {
      padding-left: 0px;
      padding-right: 0px;
  }
}

@media (max-width: 1025px){
  body.woocommerce.single.single-product .limit-wrapper {
      padding-left: 0px;
      padding-right: 0px;
  }
}

@media (max-width: 768px){
  body.woocommerce.single.single-product .limit-wrapper {
      padding-left: 0px;
      padding-right: 0px;
  }
}
		</style>
<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript></head>
<body class="home page-template-default page page-id-11 wp-custom-logo wp-embed-responsive theme-f7 woocommerce-no-js full header-layout-logo-menu has-page-header no-middle-header responsive-layout vamtam-is-elementor elementor-active elementor-pro-active layout-full elementor-default elementor-kit-4 elementor-page elementor-page-11">
<div id="top"></div>



<div data-elementor-type="header" data-elementor-id="16668" class="elementor elementor-16668 elementor-location-header" data-elementor-settings="[]">
	<div class="elementor-section-wrap">
		<section class="elementor-section elementor-top-section elementor-element elementor-element-21d04c6b elementor-section-content-middle elementor-section-height-min-height elementor-hidden-tablet elementor-hidden-phone elementor-section-full_width vamtam-sticky-header  elementor-section-height-default elementor-section-items-middle elementor-invisible" data-id="21d04c6b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;],&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;sticky_effects_offset&quot;:50,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_offset&quot;:0}">
			<div class="elementor-container elementor-column-gap-narrow">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1996235b" data-id="1996235b" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4c3d2527 elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="4c3d2527" data-element_type="widget" data-widget_type="theme-site-logo.default">
							<div class="elementor-widget-container">
								<a href="index.php">
									<img src="assets/images/logo.png" class="attachment-full size-full" alt="" height="33" width="58" data-lazy-src="assets/images/logo.png" style="width: auto;" />
									<noscript><img src="assets/images/logo.png" class="attachment-full size-full" alt="" height="33" width="58" /></noscript> 
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5126c10" data-id="5126c10" data-element_type="column">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-7f239880 elementor-nav-menu__align-center elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-nav-menu--stretch elementor-nav-menu--indicator-none elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger vamtam-has-mobile-disable-scroll elementor-widget elementor-widget-nav-menu" data-id="7f239880" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
							<div class="elementor-widget-container">
								<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--pointer-underline-theme">
									<ul id="menu-1-7f239880" class="elementor-nav-menu">
										<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-267">
											<a href="index.php" aria-current="page" class="elementor-item elementor-item-active">الصفحة الرئسية</a>

										</li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1460">
											<a href="about-us.html" class="elementor-item">معلومات عنا</a>
										</li>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-2ede2229 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ede2229" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-65cd7220" data-id="65cd7220" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3d4b6f98 elementor-widget__width-auto elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="3d4b6f98" data-element_type="widget" data-widget_type="theme-site-logo.default">
							<div class="elementor-widget-container">
								<a href="index.php">
									<img class="attachment-full size-full" alt="" height="33" width="58"/><noscript><img src="assets/images/logo.png" class="attachment-full size-full" alt="" height="33" width="58" /></noscript>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<div id="page" class="main-container">
<div id="main-content">

	<div id="main" role="main" class="vamtam-main layout-full">
		<div class="page-wrapper">
		<article id="post-11" class="full post-11 page type-page status-publish hentry">
		<div class="page-content clearfix the-content-parent">
		<div data-elementor-type="wp-page" data-elementor-id="11" class="elementor elementor-11" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section " style="background-image: url('assets/images/6f01ed05-024d-4d6c-9920-79d109a7bfe3.jfif'); background-size: 100% 100%; background-repeat: no-repeat; margin: 1.5%;"  data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69506b3 animated-fast" data-id="69506b3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-186c9e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="186c9e8" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8c6811f animated-fast elementor-invisible" data-id="8c6811f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-91d0e00 vamtam-skew-m10 elementor-widget__width-inherit elementor-headline--style-rotate elementor-widget elementor-widget-animated-headline" data-id="91d0e00" data-element_type="widget" data-settings="{&quot;rotating_text&quot;:&quot;hard\npays off&quot;,&quot;rotate_iteration_delay&quot;:2000,&quot;headline_style&quot;:&quot;rotate&quot;,&quot;animation_type&quot;:&quot;wave&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="animated-headline.default">
												<div class="elementor-widget-container">
													<h3 class="elementor-headline elementor-headline-animation-type-wave elementor-headline-letters">
														<span class="elementor-headline-plain-text elementor-headline-text-wrapper" style="float: right;font-size: 35px;">المستشار<br></span>
														<span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
															<span class="elementor-headline-plain-text elementor-headline-text-active" style="float: left;font-size: 35px;"> الهندسي للصيانة</span>
														</span>
													</h3>
												</div>
											</div>
											<div class="elementor-element elementor-element-b088b98 vamtam-skew-m10 elementor-widget__width-inherit elementor-headline--style-rotate elementor-widget elementor-widget-animated-headline" data-id="b088b98" data-element_type="widget" data-settings="{&quot;rotating_text&quot;:&quot;good\nproud&quot;,&quot;rotate_iteration_delay&quot;:2200,&quot;headline_style&quot;:&quot;rotate&quot;,&quot;animation_type&quot;:&quot;wave&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="animated-headline.default">
												<div class="elementor-widget-container">
													<a href="#"> 
														<h3 class="elementor-headline elementor-headline-animation-type-wave elementor-headline-letters">
															<span class="elementor-headline-plain-text elementor-headline-text-wrapper" style="float: right;">الاجهزة<br></span>
															<span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
																<span class="elementor-headline-plain-text elementor-headline-text-active" style="size: 20px;">  الرياضية</span>
															</span>
														</h3>
													</a> 
												</div>
											</div>
											<div class="elementor-element elementor-element-4cf1dce vamtam-skew-m10 elementor-align-center elementor-widget elementor-widget-lottie" data-id="4cf1dce" data-element_type="widget" data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/f7.vamtam.com\/wp-content\/uploads\/2021\/03\/Arrows-animation.json&quot;,&quot;id&quot;:12176},&quot;link_to&quot;:&quot;custom&quot;,&quot;custom_link&quot;:{&quot;url&quot;:&quot;#start-info&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;trigger&quot;:&quot;none&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;}" data-widget_type="lottie.default">
												<div class="elementor-widget-container">
												<a class="e-lottie__container__link" href="#start-info"><div class="e-lottie__container"><div class="e-lottie__animation"></div></div></a> </div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-2043271 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2043271" data-element_type="section">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0e418d7" data-id="0e418d7" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-9e072c9 elementor-shape-circle elementor-widget__width-auto elementor-hidden-phone e-grid-align-right elementor-grid-1 animated-fast elementor-invisible elementor-widget elementor-widget-social-icons" data-id="9e072c9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;,&quot;_animation_delay&quot;:1500}" data-widget_type="social-icons.default">
												<div class="elementor-widget-container">
													<div class="elementor-social-icons-wrapper elementor-grid">
														<div class="elementor-grid-item">
															<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-c0a24e4" href="https://www.facebook.com/Equinox" target="_blank">
																<span class="elementor-screen-only">Facebook</span>
																<i class="fab fa-facebook"></i> 
															</a>
														</div>
														<div class="elementor-grid-item">
															<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-ffb70de" href="https://www.instagram.com/equinox/" target="_blank">
																<span class="elementor-screen-only">Instagram</span>
																<i class="fab fa-instagram"></i> 
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-676be65 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="676be65" data-element_type="section" id="start-info" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c84f9b5" data-id="c84f9b5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-03883f5 elementor-invisible elementor-widget elementor-widget-heading" data-id="03883f5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<h3 class="elementor-heading-title elementor-size-default">عملنا السابق</h3> 
					</div>
				</div>
				<div class="elementor-element elementor-element-31f0703 elementor-invisible elementor-widget elementor-widget-heading" data-id="31f0703" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="heading.default">
					<div class="elementor-widget-container">
						<br>
						<h1 class="elementor-heading-title elementor-size-default">من اجلك</h1> 
					</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-83b0de4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="83b0de4" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_delay&quot;:500}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-326315b elementor-invisible" data-id="326315b" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-073f7f1 elementor-cta--layout-image-above vamtam-elementor-cta-align-left elementor-cta--valign-top elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="073f7f1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="call-to-action.default">
									<div class="elementor-widget-container">
										<div class="elementor-cta__bg-wrapper">
											<div data-bg="assets/images/2baa4175-f42b-4203-b8ab-8fadd0508fa6.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload"></div>
										</div>
										<div class="elementor-cta__content">
											<div class="elementor-content-item elementor-cta__content-item elementor-icon-wrapper elementor-cta__icon elementor-view-default">
												<div class="elementor-icon">
													<i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-976a1c2 elementor-invisible" data-id="976a1c2" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8611612 elementor-cta--layout-image-above vamtam-elementor-cta-align-left elementor-cta--valign-top elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="8611612" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="call-to-action.default">
									<div class="elementor-widget-container">
										<div class="elementor-cta__bg-wrapper">
											<div data-bg="assets/images/9908426a-6c3c-4bc9-a4a5-f21704544f70.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload" style=""></div>
											<div class="elementor-cta__bg-overlay"></div>
										</div>
										<div class="elementor-cta__content">
											<div class="elementor-content-item elementor-cta__content-item elementor-icon-wrapper elementor-cta__icon elementor-view-default">
												<div class="elementor-icon">
													<i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9e71d38 elementor-invisible" data-id="9e71d38" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:600,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-146f684 elementor-cta--layout-image-above vamtam-elementor-cta-align-left elementor-cta--valign-top elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="146f684" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="call-to-action.default">
									<div class="elementor-widget-container">
										<div class="elementor-cta__bg-wrapper">
											<div data-bg="assets/images/b6b23e7a-d5c7-4068-a32c-fa5d04b1bdb7.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload" style=""></div>
											<div class="elementor-cta__bg-overlay"></div>
										</div>
										<div class="elementor-cta__content" style="justify-content: center;">
											<div class="elementor-content-item elementor-cta__content-item elementor-icon-wrapper elementor-cta__icon elementor-view-default">
												<div class="elementor-icon">
													<i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-29fe233 elementor-invisible" data-id="29fe233" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:800,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c37136b elementor-cta--layout-image-above vamtam-elementor-cta-align-left elementor-cta--valign-top elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-call-to-action" data-id="c37136b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="call-to-action.default">
									<div class="elementor-widget-container">
										<div class="elementor-cta__bg-wrapper">
											<div data-bg="assets/images/bbbaa5e1-c750-4c49-b8e1-8128b65cd0d2.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload"></div>
											<div class="elementor-cta__bg-overlay"></div>
										</div>
										<div class="elementor-cta__content" style="justify-content: center;">
											<div class="elementor-content-item elementor-cta__content-item elementor-icon-wrapper elementor-cta__icon elementor-view-default">
												<div class="elementor-icon">
													<i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i> 
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-803b2ae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="803b2ae" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44a268c" data-id="44a268c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-e0830a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e0830a4" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d51adce" data-id="d51adce" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-948c454 elementor-invisible elementor-widget elementor-widget-heading" data-id="948c454" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;pulse&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-default">مقدمه
										</h3> 
									</div>
								</div>
								<div class="elementor-element elementor-element-d93d873 elementor-invisible elementor-widget elementor-widget-heading" data-id="d93d873" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h1 class="elementor-heading-title elementor-size-default" style="font-size: 47px;" >المستشار الهندسي للصيانه
										</h1> 
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f12046" data-id="7f12046" data-element_type="column" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:72}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;]}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0a3e195 elementor-cta--layout-image-above vamtam-elementor-cta-align-left animated-fast elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-widget elementor-widget-call-to-action" data-id="0a3e195" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="call-to-action.default">
									<div class="elementor-widget-container">
										<div class="elementor-cta">
											<div class="elementor-cta__bg-wrapper">
												<div data-bg="assets/images/d3357ceb-88ee-4fc8-9dd7-e48326be0bb8.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload"></div>
												<div class="elementor-cta__bg-overlay"></div>
											</div>
											<div class="elementor-cta__content" style="text-align: right;">
												<h4 class="elementor-cta__title elementor-cta__content-item elementor-content-item" style="float: right;">
												مهمتنا </h4>
											<div class="elementor-cta__description elementor-cta__content-item elementor-content-item">
												تعتمد الشركة المستشار لصيانة الاجهزة الرياضية فى الأساس على معيار معينه وهي الجودة ورضا العملاء  ذلك  من بداية اتصالك بخدمة العملاء حتى إنتهاء الفنى من صيانة منتجك, فنحن نقدم الحلول المثلى لعملائنا حتى نحوز على رضاهم ولنساعدهم للحصول علي نمط حياة أفضل. </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f51ea70" data-id="f51ea70" data-element_type="column" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.5,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:75}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;]}">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-0f6fa1e elementor-cta--layout-image-above vamtam-elementor-cta-align-left animated-fast elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-widget elementor-widget-call-to-action" data-id="0f6fa1e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="call-to-action.default">
					<div class="elementor-widget-container">
						<div class="elementor-cta">
							<div class="elementor-cta__bg-wrapper">
								<div data-bg="assets/images/07dce180-242e-4bb6-859a-70af0a161d8f.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload" style=""></div>
								<div class="elementor-cta__bg-overlay"></div>
							</div>
							<div class="elementor-cta__content" style="text-align: right;">
								<h4 class="elementor-cta__title elementor-cta__content-item elementor-content-item">
								قصتنا </h4>
								<div class="elementor-cta__description elementor-cta__content-item elementor-content-item">
									نحن شركة المستشار الهندسي للصيانة
									نعمل في هذا المجال منذ أكثر من عشرون عاما نحن نهتم بعملائنا ونعمل على توفير كل سبل الراحة والمصداقية لهم
									مما ادى لاستمرار الشركة حتى الآن في السوق المصري
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<section class="elementor-section elementor-top-section elementor-element elementor-element-59b394d elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="59b394d" data-element_type="section" style="text-align: right;">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dd37f9d animated-fast" data-id="dd37f9d" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:600}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-7772f85 vamtam-has-theme-arrows-style animated-fast elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-widget elementor-widget-slides" data-id="7772f85" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;arrows&quot;,&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
<div class="elementor-widget-container">
<div class="elementor-swiper">
<div class="elementor-slides-wrapper elementor-main-swiper swiper-container" dir="ltr" data-animation="fadeInRight">
<div class="swiper-wrapper elementor-slides">
<div class="elementor-repeater-item-5ba7ecf swiper-slide" style="background-image: url('assets/images/IMG-20210419-WA0006.jpg');border:5px solid black; background-size: 97%; background-repeat: no-repeat;"></div>
 </div>


</div>
</div>
</div>
</div>

<div class="elementor-element elementor-element-455eb50 elementor-widget elementor-widget-heading" data-id="455eb50" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container" style="text-align: right;">
<h4 class="elementor-heading-title elementor-size-default">حافظ على قيمة الأصول مع الصيانة الوقائية للواجهة</h4> </div>
</div>
<div class="elementor-element elementor-element-379838d elementor-widget elementor-widget-heading" data-id="379838d" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container" style="text-align: right;">
<span class="elementor-heading-title elementor-size-default" style="text-align: right;">من خلال الحماية من التلف المستقبلي وتصحيح المشكلات الصغيرة مبكرًا ، يمكنك تقليل الحاجة إلى إصلاحات أكثر تكلفة في المستقبل. للحصول على برنامج صيانة فعال ، سترغب في العمل مع المصفاة المحترفين الذين يفهمون المصادر المختلفة للضرر الذي يؤثر على واجهتك.</span> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-21c2dd4 animated-fast" data-id="21c2dd4" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:600,&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:75}},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;]}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-99720de elementor-cta--layout-image-above vamtam-elementor-cta-align-left animated-fast elementor-cta--skin-classic vamtam-has-theme-cta-style elementor-animated-content elementor-widget elementor-widget-call-to-action" data-id="99720de" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="call-to-action.default">
<div class="elementor-widget-container">
<div class="elementor-cta">
<div class="elementor-cta__bg-wrapper">
<div data-bg="assets/images/7348bef5-4154-4329-a1a5-643471c0f6b6.jfif" class="elementor-cta__bg elementor-bg rocket-lazyload" style=""></div>
<div class="elementor-cta__bg-overlay"></div>
</div>
<div class="elementor-cta__content" style="text-align: right;">
<h4 class="elementor-cta__title elementor-cta__content-item elementor-content-item">
	ما سبب أهمية الصيانة الوقائية؟ </h4>
<div class="elementor-cta__description elementor-cta__content-item elementor-content-item">
	في العمليات اليومية المحمومة في منشأتك ، قد يكون من المغري تأجيل الصيانة إلى أن ينكسر شيء ما ، أو ينفد ، أو أسوأ من ذلك ، حتى وقوع حادث ، وغالبًا ما ينتهي هذا النهج التفاعلي المتمثل في انتظار حالة الطوارئ بتكلفة أكبر بكثير. مما لو كنت قد استثمرت في الصيانة الوقائية المنتظمة في المقام الأول. </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>


<section class="elementor-section elementor-top-section elementor-element elementor-element-c00feac elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c00feac" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_tablet&quot;:&quot;none&quot;,&quot;animation_mobile&quot;:&quot;none&quot;,&quot;animation_delay&quot;:500}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a05d1db elementor-hidden-phone elementor-hidden-tablet" data-id="a05d1db" data-element_type="column">
<div class="elementor-widget-wrap">
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-909cb5e" data-id="909cb5e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">



</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-8b3bd42 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b3bd42" data-element_type="section" id="join" data-settings="{&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;triangle-asymmetrical&quot;}">
<div class="elementor-shape elementor-shape-bottom" data-negative="true">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z" />
</svg> </div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8aec7fb" data-id="8aec7fb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-de9f28b animated-fast elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="de9f28b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
<i aria-hidden="true" class="vamtamtheme- vamtam-theme-runner"></i> </span>
</div>
<div class="elementor-icon-box-content">
<h1 class="elementor-icon-box-title">
<span>الاتصال بنا</span>
</h1>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-3f0afa4 elementor-button-align-end vamtam-has-theme-form-style elementor-widget elementor-widget-form" data-id="3f0afa4" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Continie &quot;,&quot;step_previous_label&quot;:&quot;Back&quot;,&quot;step_type&quot;:&quot;number&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
<div class="elementor-widget-container">


<section class="elementor-section elementor-top-section elementor-element elementor-element-912e329 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="912e329" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c265c4" data-id="6c265c4" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
	<div class="elementor-element elementor-element-345095c elementor-widget elementor-widget-heading" data-id="345095c" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container" style="text-align: right;">
	<h5 class="elementor-heading-title elementor-size-default">أرسل لنا رساله</h5> </div>
	</div>
	<div class="elementor-element elementor-element-0fa95a0 elementor-button-align-start vamtam-has-theme-form-style elementor-widget elementor-widget-form" data-id="0fa95a0" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
	<div class="elementor-widget-container">
	<form class="elementor-form" method="post" name="New Form">
	<input type="hidden" name="post_id" value="1449" />
	<input type="hidden" name="form_id" value="0fa95a0" />
	<input type="hidden" name="referer_title" value="Contact" />
	<input type="hidden" name="queried_id" value="1449" />
	<div class="elementor-form-fields-wrapper elementor-labels-">
	<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-33">
	<label for="form-field-name" class="elementor-field-label elementor-screen-only">Name</label><input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Your Name"> </div>
	<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-33 elementor-field-required">
	<label for="form-field-email" class="elementor-field-label elementor-screen-only">Email</label><input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="example@gmail.com" required="required" aria-required="true"> </div>
	<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_57868d1 elementor-col-33 elementor-field-required">
	<label for="form-field-field_57868d1" class="elementor-field-label elementor-screen-only">Subject</label><input size="1" type="text" name="form_fields[field_57868d1]" id="form-field-field_57868d1" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Enter subject here" required="required" aria-required="true"> </div>
	<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
	<label for="form-field-message" class="elementor-field-label elementor-screen-only">Message</label><textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="form_fields[message]" id="form-field-message" rows="4" placeholder="Your Message"></textarea> </div>
	<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
	<button type="submit" class="elementor-button elementor-size-sm">
	<span>
	<span class="elementor-align-icon-left elementor-button-icon">
	<i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i> </span>
	<span class="elementor-button-text">ارسل الان</span>
	</span>
	</button>
	</div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>


</form>
</div>
</div>











</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-df589aa elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="df589aa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-112cee1" data-id="112cee1" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-b866c2e elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="b866c2e" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h6 class="elementor-heading-title elementor-size-default">follow</h6> </div>
</div>
<div class="elementor-element elementor-element-dc82eae elementor-widget__width-auto vamtam-has-theme-style elementor-widget elementor-widget-button" style="padding-bottom: 50px;" data-id="dc82eae" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="https://www.instagram.com/vamtam.themes/" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">المستشار-الهندسي-لصيانه-الاجهزة-الرياضيه#</span>
</span>
</a>
</div>
</div>
</div>









</div>
</div>
</div>
</section>
</div>
</div>
</div>
</article>
</div> 
</div>
</div>
<div class="footer-wrapper" style="">
<footer id="main-footer" class="main-footer">
<div data-elementor-type="footer" data-elementor-id="284" class="elementor elementor-284 elementor-location-footer" data-elementor-settings="[]">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-1ec5056 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1ec5056" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0387d0d" data-id="0387d0d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-f1b9b1d elementor-widget__width-auto elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="f1b9b1d" data-element_type="widget" data-settings="{&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="theme-site-logo.default">
<div class="elementor-widget-container">
<a href="index.php">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2058%2033'%3E%3C/svg%3E" class="attachment-full size-full" alt="" height="33" width="58" data-lazy-src="assets/images/logo.png" /><noscript><img src="assets/images/logo.png" class="attachment-full size-full" alt="" height="33" width="58" /></noscript> </a>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-67e0152" data-id="67e0152" data-element_type="column">
	<div class="elementor-widget-wrap elementor-element-populated">
		
		<div class="elementor-element elementor-element-2bea3b7 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="2bea3b7" data-element_type="widget" data-widget_type="text-editor.default">
			<div class="elementor-widget-container">
				<a href = "mailto:Advisorengineering2000@gmail.com?subject = Feedback&body = Message"><i style=" color: red; border-radius: 50%;  float: left; font-size: 30px; margin-right: 20px;" class="fas fa-envelope-square"></i>Advisorengineering2000@gmail.com</a>
			</div>
		</div>
		<div class="elementor-element elementor-element-2bea3b7 elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-text-editor" data-id="2bea3b7" data-element_type="widget" data-widget_type="text-editor.default">
			<div class="elementor-widget-container">
				<span> (+002) 010-0191-1740<i style="color: green; border-radius: 50%; float: left; font-size: 30px; margin-right: 20px;" class="fab fa-whatsapp-square"></i></span>
			</div>
		</div>
		
		<div class="elementor-element elementor-element-0c97ba4 elementor-widget__width-auto vamtam-has-theme-style elementor-widget elementor-widget-button" data-id="0c97ba4" data-element_type="widget" data-widget_type="button.default">
			<div class="elementor-widget-container">
				<div class="elementor-button-wrapper">
					<a href="tel: 01003733047" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-text"> (+002) 010-0373-3047<i style=" border-radius: 50%;  float: left; font-size: 30px; margin-right: 20px;" class="fas fa-phone-square-alt"></i></span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ef26c14" data-id="ef26c14" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-252c85c elementor-widget elementor-widget-text-editor" data-id="252c85c" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>Every day: 24 hours</p> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-379d07f" data-id="379d07f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8abecb3 e-grid-align-right e-grid-align-left elementor-grid-3 elementor-shape-rounded elementor-widget elementor-widget-social-icons" data-id="8abecb3" data-element_type="widget" data-settings="{&quot;_animation_tablet&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="social-icons.default">
<div class="elementor-widget-container">
<div class="elementor-social-icons-wrapper elementor-grid">
<div class="elementor-grid-item">
<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-4a07e89" href="https://www.facebook.com/Equinox" target="_blank">
<span class="elementor-screen-only">Facebook</span>
<i class="fab fa-facebook"></i> </a>
</div>
<div class="elementor-grid-item">
<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-466ddbe" href="https://www.instagram.com/equinox/" target="_blank">
<span class="elementor-screen-only">Instagram</span>
<i class="fab fa-instagram"></i> </a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="elementor-section elementor-top-section elementor-element elementor-element-8bad43c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8bad43c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4c24ef" data-id="a4c24ef" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-ff7b5a6 elementor-nav-menu__align-left elementor-nav-menu--dropdown-none elementor-widget__width-auto elementor-nav-menu--indicator-classic vamtam-has-mobile-disable-scroll elementor-widget elementor-widget-nav-menu" data-id="ff7b5a6" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;}" data-widget_type="nav-menu.default">
					<div class="elementor-widget-container">
						<nav role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade"><ul id="menu-1-ff7b5a6" class="elementor-nav-menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3079"><a href="about-us.html" class="elementor-item">About us</a></li>
						</ul></nav>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
</div>
</div>
</footer>
</div>
</div>

<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minbb49.js?ver=5.2.2' id='wc-add-to-cart-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4' id='js-cookie-js' defer></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minbb49.js?ver=5.2.2' id='woocommerce-js' defer></script>
<script type='text/javascript' id='vamtam-all-js-extra'>
/* <![CDATA[ */
var VAMTAM_FRONT = {"ajaxurl":"https:\/\/f7.vamtam.com\/wp-admin\/admin-ajax.php","jspath":"https:\/\/f7.vamtam.com\/wp-content\/themes\/f7\/vamtam\/assets\/js\/","max_breakpoint":"1025","beaver_responsive":"1025","beaver_small":"768","content_width":"1260"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/f7/vamtam/assets/js/all.min32a9.js?ver=1616271023' id='vamtam-all-js' defer></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_377dcd0063d3a41629785d92093825c5","fragment_name":"wc_fragments_377dcd0063d3a41629785d92093825c5","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minbb49.js?ver=5.2.2' id='wc-cart-fragments-js' defer></script>
<script type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/vamtam-export-api\/|\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/checkout\/|\/cart\/|\/my-account\/|\/wc-api\/v(.*)|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/wp-admin\/|\/logout\/|\/wp-login.php","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm","siteUrl":"https:\/\/f7.vamtam.com","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("index.php")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("index.php")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.minf269.js?ver=1.0.1' id='smartmenus-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.mindeae.js?ver=3.2.1' id='elementor-webpack-runtime-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.mindeae.js?ver=3.2.1' id='elementor-frontend-modules-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js' defer></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min35d0.js?ver=1.12.1' id='jquery-ui-core-js' defer></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.1","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"a11y_improvements":true,"form-submissions":true},"urls":{"assets":"https:\/\/f7.vamtam.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":11,"title":"Fitness","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.mindeae.js?ver=3.2.1' id='elementor-frontend-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/widgets/nav-menu/vamtam-nav-menu.mincb18.js?ver=1.0.9' id='vamtam-nav-menu-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/lottie/lottie.min3f90.js?ver=5.6.6' id='lottie-js' defer></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/widgets/slides/vamtam-slides.mincb18.js?ver=1.0.9' id='vamtam-slides-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/widgets/testimonial-carousel/vamtam-testimonial-carousel.mincb18.js?ver=1.0.9' id='vamtam-testimonial-carousel-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/flatpickr/flatpickr.mineda1.js?ver=4.1.4' id='flatpickr-js' defer></script>
<script type='text/javascript' id='sbi_scripts-js-extra'>

var sb_instagram_js_options = {"font_method":"svg","resized_url":"https:\/\/f7.vamtam.com\/wp-content\/uploads\/sb-instagram-feed-images\/","placeholder":"https:\/\/f7.vamtam.com\/wp-content\/plugins\/instagram-feed-pro\/img\/placeholder.png","br_adjust":""};
var sbiTranslations = {"share":"Share"};

</script>
<script type='text/javascript' src='wp-content/plugins/instagram-feed-pro/js/sbi-scripts.min8040.js?ver=5.12' id='sbi_scripts-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/widgets/image/vamtam-image.mincb18.js?ver=1.0.9' id='vamtam-image-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/widgets/text-editor/vamtam-text-editor.mincb18.js?ver=1.0.9' id='vamtam-text-editor-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.mindeae.js?ver=3.2.1' id='elementor-pro-webpack-runtime-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.mindeae.js?ver=3.2.1' id='elementor-sticky-js' defer></script>
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/f7.vamtam.com\/wp-admin\/admin-ajax.php","nonce":"ec21bcf926","urls":{"assets":"https:\/\/f7.vamtam.com\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"https:\/\/f7.vamtam.com\/cart\/","checkout_page_url":"https:\/\/f7.vamtam.com\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/f7.vamtam.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/frontend.mindeae.js?ver=3.2.1' id='elementor-pro-frontend-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/elementor-pro/assets/js/elements-handlers.mindeae.js?ver=3.2.1' id='pro-elements-handlers-js' defer></script>
<script type='text/javascript' src='wp-content/plugins/vamtam-elementor-integration/assets/js/vamtam-elementor-frontend.mincb18.js?ver=1.0.9' id='vamtam-elementor-frontend-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script>
<script data-no-minify="1" async src="wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script><script type="text/javascript">
window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9700abca30","applicationID":"9339867","transactionName":"YFUHbUVUDBZZAkZZXFkfMEteGgsLXARKHkNfQA==","queueTime":0,"applicationTime":21,"atts":"TBIEGw1OHxg=","errorBeacon":"bam.nr-data.net","agent":""}</script>
</body>
</html>
