/*
 * jQuery.appear
 * https://github.com/bas2k/jquery.appear/
 * http://code.google.com/p/jquery-appear/
 *
 * Copyright (c) 2009 Michael Hixson
 * Copyright (c) 2012 Alexander Brovikov
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */
(function($){$.fn.appear=function(fn,options){var settings=$.extend({data:undefined,one:true,accX:0,accY:0},options);return this.each(function(){var t=$(this);t.appeared=false;if(!fn){t.trigger('appear',settings.data);return}var w=$(window);var check=function(){if(!t.is(':visible')){t.appeared=false;return}var a=w.scrollLeft();var b=w.scrollTop();var o=t.offset();var x=o.left;var y=o.top;var ax=settings.accX;var ay=settings.accY;var th=t.height();var wh=w.height();var tw=t.width();var ww=w.width();if(y+th+ay>=b&&y<=b+wh+ay&&x+tw+ax>=a&&x<=a+ww+ax){if(!t.appeared)t.trigger('appear',settings.data)}else{t.appeared=false}};var modifiedFn=function(){t.appeared=true;if(settings.one){w.unbind('scroll',check);var i=$.inArray(check,$.fn.appear.checks);if(i>=0)$.fn.appear.checks.splice(i,1)}fn.apply(this,arguments)};if(settings.one)t.one('appear',settings.data,modifiedFn);else t.bind('appear',settings.data,modifiedFn);w.scroll(check);$.fn.appear.checks.push(check);(check)()})};$.extend($.fn.appear,{checks:[],timeout:null,checkAll:function(){var length=$.fn.appear.checks.length;if(length>0)while(length--)($.fn.appear.checks[length])()},run:function(){if($.fn.appear.timeout)clearTimeout($.fn.appear.timeout);$.fn.appear.timeout=setTimeout($.fn.appear.checkAll,20)}});$.each(['append','prepend','after','before','attr','removeAttr','addClass','removeClass','toggleClass','remove','css','show','hide'],function(i,n){var old=$.fn[n];if(old){$.fn[n]=function(){var r=old.apply(this,arguments);$.fn.appear.run();return r}}})})(jQuery);

// counter
(function(a){"use strict";a.fn.absoluteCounter=function(b){b=a.extend({},a.fn.absoluteCounter.defaults,b||{});return a(this).each(function(){var d=this,g=b.speed,f=b.setStyles,e=b.delayedStart,c=b.fadeInDelay;if(f){a(d).css({display:"block",position:"relative",overflow:"hidden"}).addClass('animated')}a(d).css("opacity","0");a(d).animate({opacity:0},e,function(){var l=a(d).text();a(d).text("");for(var k=0;k<l.length;k++){var n=l.charAt(k);var m="";if(parseInt(n,10)>=0){m='<span class="onedigit p'+(l.length-k)+" d"+n+'">';for(var h=0;h<=parseInt(n,10);h++){m+='<span class="n'+(h%10)+'">'+(h%10)+"</span>"}m+="</span>"}else{m='<span class="onedigit p'+(l.length-k)+' char"><span class="c">'+n+"</span></span>"}a(d).append(m)}a(d).animate({opacity:1},c);a("span.onedigit",d).each(function(i,o){if(f){a(o).css({"float":"left",position:"relative"});a("span",a(o)).css({display:"block"})}var p=a("span",a(o)).length,j=a(d).height();a(o).css({height:(p*j)+"px",top:"0"});a("span",a(o)).css({height:j+"px"});a(o).animate({top:-1*((p-1)*j)+"px"},g,function(){if(typeof(b.onComplete)==="function"){b.onComplete.call(d)}})})})})};a.fn.absoluteCounter.defaults={speed:2000,setStyles:true,onComplete:null,delayedStart:0,fadeInDelay:0}}(jQuery));


/*
https://github.com/mhuggins/jquery-countTo#data-attributes
since themeforest yoinked this without attributtion, I figured I would do the legwork and find out who wrote the code :)
*/

(function($) {
	"use strict";

	$.fn.countTo = function(options) {
		// merge the default plugin settings with the custom options
		options = $.extend({}, $.fn.countTo.defaults, options || {});

		// how many times to update the value, and how much to increment the value on each update
		var loops = Math.ceil(options.speed / options.refreshInterval),
		increment = (options.to - options.from) / loops;

		return $(this).each(function() {
			var _this = this,
			loopCount = 0,
			value = options.from,
			interval = setInterval(updateTimer, options.refreshInterval);

			function updateTimer() {
				value += increment;
				loopCount++;
				$(_this).html(value.toFixed(options.decimals));

				if (typeof(options.onUpdate) === 'function') {
					options.onUpdate.call(_this, value);
				}

				if (loopCount >= loops) {
					clearInterval(interval);
					value = options.to;

					if (typeof(options.onComplete) === 'function') {
						options.onComplete.call(_this, value);
					}
				}
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,  // the number the element should start at
		to: 100,  // the number the element should end at
		speed: 1000,  // how long it should take to count between the target numbers
		refreshInterval: 1,  // how often the element should be updated
		decimals: 0,  // the number of decimal places to show
		onUpdate: null,  // callback method for every time the element is updated,
		onComplete: null  // callback method for when the element finishes updating
	};
})(jQuery);

/*
**	Counter from zero to defined number
*/
function initToCounter($){
	"use strict";
	if($('.counter.zero').length){
		$('.counter.zero').each(function() {
			if(!$(this).hasClass('executed')){
				$(this).addClass('executed');
				$(this).appear(function() {
					$(this).parent().css('opacity', '1');
					var $max = parseFloat($(this).data('max'));
					$(this).countTo({
						from: 0,
						to: $max,
						speed: 750,
						refreshInterval: 50
					});
				});
			}	
		});
	}
}
