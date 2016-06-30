(function($) {
  $(document).ready(function(){
    var container = document.querySelector('#masonry-container');
    var msnry = new Masonry( container, {
      // options
      columnWidth: 340,
      itemSelector: '.item'
    });

    $(document).ajaxComplete(function( event, xhr, settings ) {

     var container = document.querySelector('#masonry-container');
     var msnry = new Masonry( container, {
       // options
       columnWidth: 340,
       itemSelector: '.item'
     });
    });


  });
				
})(jQuery);