jQuery(document).ready(function($) {
  
  // Double Image Slider
  $('.program-history-slider').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   prevArrow: "<span class='my-arrow prev'>< previous</span>",
   nextArrow: "<span class='my-arrow next'>next ></span>",
   dots: false,
   fade: false,
   asNavFor: '#slider-nav',
   infinite: false,
   speed: 350
 });

 $('#slider-nav').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   asNavFor: '.program-history-slider',
   dots: false,
   arrows: true,
   centerMode: false,
   focusOnSelect: true,
   variableWidth: true,
   infinite: false,
   speed: 350,
   responsive: [
     {
       breakpoint: 800,
       settings: {
       	 focusOnSelect: true,
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: true,
         centerMode: false,
         infinite: false
       }
     }
   ]
 });
});
