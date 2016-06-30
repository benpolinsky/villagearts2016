(function($) {
  $(document).ready(function(){
    // Double Image Slider
    $('.about-history-slider').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: true,
     prevArrow: "<span class='my-arrow prev'>< previous</span>",
     nextArrow: "<span class='my-arrow next'>next ></span>",
     dots: false,
     fade: false,
     asNavFor: '#slider-nav-about'
   });
   
   $('#slider-nav-about').slick({
     slidesToShow: 4,
     slidesToScroll: 4,
     asNavFor: '.about-history-slider',
     arrows: true,
     dots: false,
     centerMode: true,
     focusOnSelect: true,
     variableWidth: true,
     responsive: [
       {
         breakpoint: 800,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
           centerMode: true
         }
       }
     ]
   });

   // executives slider
  $('#executives').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots: false,
    fade: false,
    asNavFor: '#executive-names',
    infinite: false
  });
  
  $('#executive-names').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots: false,
    fade: false,
    asNavFor: '#executives',
    draggable: false,
    infinite: false
  });
  
  $('#executives').on('afterChange', function(event, slick, currentSlide){
    updateExecutiveText(($('.executive')[currentSlide]));
  });

    //Executive Team Widget
   $('#executives').on('click', '.executive', function () {
     updateExecutiveText(this);
   });
   
   
   
   var pointer = document.getElementsByClassName('exec-pointer');
   var target = document.getElementsByClassName('executive-image');


   function updateExecutiveText(el) {
     $('.executive').removeClass('active');
     $(el).addClass('active');
     var exec_id = $(el).data("id");


     $('.exec-text').removeClass('active');
     $('.exec-text .diamond').removeClass('active');
     
     $('.exec-text[data-id=' + exec_id + ']').addClass('active');
     $('.exec-text[data-id=' + exec_id + '] .diamond').addClass('active');
   }
   
   function middleOfSlide(slide) {
   }

   // Teaching Artists Widget
   $('section#board-member #right .teaching-artist').first().addClass('active');
   $('section#board-member #right').on('click', '.teaching-artist', function () {
     $('#board-member .teaching-artist.active').removeClass('active');
     $(this).addClass('active');
     var artist_text = $(this).data('text');
     var artist_name = $(this).data('name');
     $('#board-member #left #board-text').text(artist_text);
     $('#board-member #left h3').text(artist_name);
   });
   
   
   // Teaching Artists Widget
   $('section#teaching-artists #right .teaching-artist').first().addClass('active');
   $('section#teaching-artists #right').on('click', '.teaching-artist', function () {
     $('#teaching-artists .teaching-artist.active').removeClass('active');
     $(this).addClass('active');
     var artist_text = $(this).data('text');
     var artist_name= $(this).data('name');
     $('#teaching-artists #left #artist-text').text(artist_text);
     $('#teaching-artists #left h3').text(artist_name);
   });
  });

  
  
  
})(jQuery);




