
(function($) {

  var SlickScroll;

  SlickScroll = (function() {
    var add_click_handlers, animate_page, assign_anchors;

    function SlickScroll(containing_list, offset) {
      var anchors, menu_items;
      if (offset == null) {
        offset = 50;
      }
      offset = parseInt(offset, 10) + 50;
      menu_items = containing_list.children();
      anchors = assign_anchors(menu_items);
      add_click_handlers(anchors, offset);
    }

    SlickScroll.prototype.to_the_top = function() {
      animate_page(0);
    };

    assign_anchors = function(list_items) {
      var anchor, full_href, hrefs, item, _i, _len;
      hrefs = {};
      for (_i = 0, _len = list_items.length; _i < _len; _i++) {
        item = list_items[_i];
        full_href = $(item).children()[0]['href'];
        anchor = full_href.match(/#.*/);
        if (anchor != null) {
          hrefs[anchor[0]] = $(item).children()[0];
        }
      }
      return hrefs;
    };

    add_click_handlers = function(anchors, offset) {
      var k, v, _results;
      _results = [];
      for (k in anchors) {
        v = anchors[k];
        _results.push((function(k, v) {
          var a;
          a = $(v);
          return a.on('click', function(e) {
            animate_page($(k).offset().top - offset, 800);
          });
        })(k, v));
      }
      return _results;
    };

    animate_page = function(position, speed) {
      Waypoint.disableAll();
      if (speed == null) {
        speed = 200;
      }
      if ($('#header').hasClass('stuck') === true) {
        position += 90;
      }
      $('html, body').animate({
        scrollTop: position
      }, speed, function () {
         Waypoint.enableAll();
      });

    };

    return SlickScroll;

  })();

  $(function() {

    $('nav#about-nav ul').on("click", "a", function (e) {
      $("nav#about-nav ul li a").removeClass('active');
      $(this).addClass('active');
      return false;
    });
    var scroll;
    scroll = new SlickScroll($('#about-nav ul'), 200);
    $('nav#about-nav').sticky();
    
    
    var history_section = new Waypoint({
      element: $('section#history'),
      handler: function(direction) {
        $("nav#about-nav ul li a").removeClass('active');
        $('nav#about-nav ul li a.history').addClass('active');
      },
      offset: 40
    });
    
    var exec_team = new Waypoint({
      element: $('section#executive-team'),
      handler: function(direction) {
        $("nav#about-nav ul li a").removeClass('active');
        $('nav#about-nav ul li a.exec-team').addClass('active');
      },
      offset: 80
    });
    
    var staff_section = new Waypoint({
      element: $('section#board-member'),
      handler: function(direction) {
        $("nav#about-nav ul li a").removeClass('active');
        $('nav#about-nav ul li a.staff').addClass('active');
      },
      offset: 80
    });

    var teaching_artists = new Waypoint({
      element: $('section#teaching-artists'),
      handler: function(direction) {
        $("nav#about-nav ul li a").removeClass('active');
        $('nav#about-nav ul li a.artists').addClass('active');
      },
      offset: 80
    });
    
    var funders = new Waypoint({
      element: $('section#funders'),
      handler: function(direction) {
        $("nav#about-nav ul li a").removeClass('active');
        $('nav#about-nav ul li a.funders').addClass('active');
      },
      offset: 250
    });
    
    
    
  });	
})(jQuery);

