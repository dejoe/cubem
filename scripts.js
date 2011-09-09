/***** Jquery Plugins *******/
		/**
		* hoverIntent r6 // 2011.02.26 // jQuery 1.5.1+
		* <http://cherne.net/brian/resources/jquery.hoverIntent.html>
		* 
		* @param  f  onMouseOver function || An object with configuration options
		* @param  g  onMouseOut function  || Nothing (use configuration options object)
		* @author    Brian Cherne brian(at)cherne(dot)net
		*/
		(function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev])}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev])};var handleHover=function(e){var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t)}if(e.type=="mouseenter"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob)},cfg.interval)}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob)},cfg.timeout)}}};return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover)}})(jQuery);
		/**
		 *  makeMeFixed 
		 *  Code: https://gist.github.com/b5feca91bb76eef12086
		 *  Author: dejoe.tumblr.com 
		 * */
		(function($){$.fn.makeMeFixed=function(){function setOffset(elem){var $this=$(elem);var eMarginTop=parseInt($this.css("margin-top"),10);var eMarginLeft=parseInt($this.css("margin-left"),10);var eOffset=$this.offset();eOffset.top-=eMarginTop;eOffset.left-=eMarginLeft;$(elem).css("position","fixed").css(eOffset);}return this.each(function(){var elem=this;setOffset(elem);$(window).bind("resize.makeMeFixed",function(){$(elem).css("position","static");setOffset(elem);});});};})(jQuery);

		
		/**
		* mapMyStylesTo
		* Jquery Plugin to position a floated element fixed with respect to the screen viewport. Used for sidebars.
		* Code: https://github.com/dejoe/mapMyStylesTo
		* Author: dejoe.tumblr.com
		* Usage: $("#myname").mapMyStylesTo("selectorstring",{propertyFrom:propertyTo});
		*/
		(function(a){a.fn.mapMyStylesTo=function(e,b,d){function c(h,g){if(h){var f=g.length;var i=parseFloat(g)+d;var j=g.substring(f-2);if(isNaN(parseFloat(j))){g=i+j;}}return g;}return this.each(function(){var j=a(this);var i=a(e);if(typeof(d)==="number"){var h=true;}else{var h=false;}for(var g in b){var f=j.css(g);f=c(h,f);i.css(b[g],f);}});};})(jQuery);

	      WebFontConfig = { 
	        google: { families: ['Yanone Kaffeesatz', 'Copse'] }
	      };
	      
	      (function() {
	        var wf = document.createElement('script');
	        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	        wf.type = 'text/javascript';
	        wf.async = 'true';
	        var s = document.getElementsByTagName('script')[0];
	        s.parentNode.insertBefore(wf, s);
	      })();
	/* This is the function to toggle the view more dropdown. */

	 $(document).ready(function(){
		$("li.postDetails").hoverIntent({
			over: function(){
				$(this).find(".flyout").slideToggle(200);
			},
			out: function(){
				$(this).find(".flyout").slideToggle(200);
			},
			timeout: 100
		}).children("a").click(function(event){
			event.preventDefault();
		});
		$("#searchForm .textbox").focus();

		/* Instantiating a notes button */
		$(".notesButton").mousedown(function(){
			$(this).addClass("notesButtonClick").removeClass("notesButtonHover");
		})
		$(".notesButton").mouseup(function(){
			$(this).removeClass("notesButtonClick").addClass("notesButtonHover");
		})
		
		$(".notesButton").hover(
		function(){
			$(this).addClass("notesButtonHover");
		},
		function(){
			$(this).removeClass("notesButtonClick").removeClass("notesButtonHover");
		});
		
		$("#rtCol").mapMyStylesTo("#ltCol",{"height":"min-height"},50);
		
	 });