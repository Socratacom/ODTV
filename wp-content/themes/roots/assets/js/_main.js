/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      function loadAddThis() {
        addthis.init();
        addthis.toolbox('.addthis_toolbox');
      }

      //Sticky nav function
      var stickyOffset = $('.sticky').offset().top;
      var navBar = $('.fixed');

      $(window).scroll(function(){
        var sticky = $('.sticky');
        var scroll = $(window).scrollTop();

        if (scroll >= stickyOffset){
          navBar.addClass('visible');
        }
        else {navBar.removeClass('visible');
        }
      });

      // expanding search form
      var searchField = $('.banner .search-field');
      var searchExpand = $('.banner .btn-search');
      var searchSubmit = $('.banner .search-submit');

      searchExpand.click(function(){
        if(searchField.hasClass('visible')) {
          searchField.removeClass('visible');
        } else {
          searchField.addClass('visible');
          searchSubmit.show();
          searchExpand.hide();
          searchField.focus();
        }
      });

      $('.playbutton').click(function() {
        $('.videoWrapper').addClass('visible');
        $('.videoWrapper iframe').attr('src', $(".videoWrapper iframe").attr('src') + 'http://www.youtube.com/embed/ScMzIvxBSi4?autoplay=1;rel=0;hd=1');
        $('.contentWrapper').addClass('hidden');
      });

      //smooth scroll to anchor
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                   scrollTop: (target.offset().top - 250)
              }, 1000);
              return false;
          }
        }
      });

      // Portfolio Modal
      jQuery(document).ready(function($) {
          var $modal = $('.portfolio-modal');
          var portfolio_url, portfolio_title;

          $('.videotile-link').on('click', function(e){
              e.preventDefault();

              portfolio_url = $(this).attr('href');
              portfolio_title = $(this).attr('title');

              //console.log(portfolio_url);
              //console.log(portfolio_title);

              setTimeout(function(){
                  $modal.load('/wp-content/themes/roots/html-templates/video-modal.html', '', function(){
                      $modal.modal({
                          width: 1100
                      });
                  });
              }, 0);

          });

          $modal.on('shown.bs.modal', function(){
              setTimeout(function(){
                  $modal.find('.modal-title').html(portfolio_title);

              $modal.find('.modal-body').load(portfolio_url + ' article.type-video ', '' , function(){
                addthis.toolbox('.addthis_toolbox');
              });

              }, 0);

          });

      });

    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
