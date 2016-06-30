/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
jQuery(document).ready(function($) {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = document.getElementById( 'navburger' );
	if ( ! button ) {
    console.log('no button');
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

  
  $('a.programs').on('click', function (e) {
    if ($('#site-navigation').hasClass('toggled')) {
      $(this).siblings('#sub-nav-container').first().children('ul').toggle();
      $(this).siblings('#sub-nav-container').first().children('h3').toggle();
      $(this).toggleClass("toggle");
      return false;
    }
  
  });

  $(window).resize(function () {
    if ($(window).width() > 769) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );

    }
    else{
      $('#a.programs').on('click', function (e) {
        if ($('nav#site-navigation').hasClass('toggled')) {
          $(this).siblings('#sub-nav-container').first().children('ul').toggle();
      $(this).siblings('#sub-nav-container').first().children('h3').toggle();
          $(this).toggleClass("toggle");
          return false;
        }
  
      });
    }
  })
});
