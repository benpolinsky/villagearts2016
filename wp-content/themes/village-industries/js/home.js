(function($) {
  $(document).ready(function(){
    $('span.zero.counter').text('0')
    var counterStarted = false;
	$('section#slider').imagesLoaded(function(){
		var countingNumbers = new Waypoint({
      element: $('section#statistics .vh-wrap ul'),
      handler: function(direction) {
      	if (counterStarted == false){
	      	counterStarted = true;
    	  	initToCounter(jQuery);
      	}
      	
      },
      offset: 'bottom-in-view'
    });

	});
    
   
   
    $('#slider').slick({
      autoplay: false,
      arrows: false 
    });
    
    $('section#interact span.icon img').hover(function () {
      var $img = $(this);
      var src = $img.attr('src');
      src = src.replace('.png', '-hover.png');
      $img.attr('src', src);
      $(this).parent().siblings('p').first().children('a').css('color', '#00c1d9');
    }, function () {
      var $img = $(this); 
      var src = $img.attr('src');
      src = src.replace('-hover.png', '.png');
      $img.attr('src', src);
      $(this).parent().siblings('p').first().children('a').css('color', '#969696');
    });
    
    $('section#interact span.icon p a').hover(function () {
      var $img = $(this).parent().siblings('a').children('img').first();
      var src = $img.attr('src');
      src = src.replace('.png', '-hover.png');
      $img.attr('src', src);
      $(this).css('color', '#00c1d9');
    }, function () {
      var $img = $(this).parent().siblings('a').children('img').first();
      var src = $img.attr('src');
      src = src.replace('-hover.png', '.png');
      $img.attr('src', src);
      $(this).css('color', '#969696');
    });
    
  });
				
})(jQuery);