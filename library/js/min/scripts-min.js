window.getComputedStyle||(window.getComputedStyle=function(t,e){return this.el=t,this.getPropertyValue=function(e){var a=/(\-([a-z]){1})/g;return"float"==e&&(e="styleFloat"),a.test(e)&&(e=e.replace(a,function(){return arguments[2].toUpperCase()})),t.currentStyle[e]?t.currentStyle[e]:null},this}),jQuery(document).ready(function($){function t(){$("#peak1").addClass("anpeak1"),$("#peak2").addClass("anpeak2"),$("#peak3").addClass("anpeak3"),$("#peak4").addClass("anpeak4")}$("a[href*='amazon']").each(function(){this.href.indexOf("?")>=0?this.href=this.href+"&tag=skimbu08-21":this.href=this.href+"?tag=skimbu08-21"}),$("a[href*='fancy']").each(function(){this.href.indexOf("?")>=0?this.href=this.href+"&ref=owl":this.href=this.href+"?ref=owl"}),$("a[href*='itunes']").each(function(){this.href.indexOf("?")>=0?this.href=this.href+"&at=11lK8x":this.href=this.href+"?at=11lK8x"}),setTimeout(t,2300);var e=$(window).width();$(".entry-text").click(function(t){t.stopPropagation(),$(this).addClass("enty-text-shown")}),e>=768&&$(".comment img[data-gravatar]").each(function(){$(this).attr("src",$(this).attr("data-gravatar"))})}),function(t){function e(){r.setAttribute("content",h),f=!0}function a(){r.setAttribute("content",o),f=!1}function n(n){l=n.accelerationIncludingGravity,c=Math.abs(l.x),u=Math.abs(l.y),d=Math.abs(l.z),!t.orientation&&(c>7||(d>6&&8>u||8>d&&u>6)&&c>5)?f&&a():f||e()}if(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1){var i=t.document;if(i.querySelector){var r=i.querySelector("meta[name=viewport]"),s=r&&r.getAttribute("content"),o=s+",maximum-scale=1",h=s+",maximum-scale=10",f=!0,c,u,d,l;r&&(t.addEventListener("orientationchange",e,!1),t.addEventListener("devicemotion",n,!1))}}}(this);