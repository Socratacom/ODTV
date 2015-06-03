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


// Youtube Control
var tag = document.createElement('script');
tag.src = '//www.youtube.com/player_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

function onPlayerReady(event) {
 var closeButton = document.getElementById('close-button');
 closeButton.addEventListener('click', function() {
   player.stopVideo();
 });
}

function onYouTubeIframeAPIReady() {
 player = new YT.Player('player', {
   events: {
     'onReady': onPlayerReady
   }
 });
}



(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      // shufflejs
      var vid_grid = $('#vid_grid');
      vid_grid.shuffle({
        itemSelector: '.item'
      });

      // Advanced filtering
      $('.js-shuffle-search').on('keyup change', function() {
        var val = this.value.toLowerCase();
        vid_grid.shuffle('shuffle', function($el, shuffle) {

          // Only search elements in the current group
          // if (shuffle.group !== 'all' && $.inArray(shuffle.group, $el.data('groups')) === -1) {
          //   return false;
          // }

          var text = $.trim( $el.find('.videotile').text() ).toLowerCase();
          return text.indexOf(val) !== -1;
        });
      });

      //Modal - Full browser height and centered
      function adjustModalMaxHeightAndPosition(){
        $('.modal').each(function(){
          if($(this).hasClass('in') === false){
            $(this).show();
          }
          var contentHeight = $(window).height() - 60;
          var headerHeight = $(this).find('.modal-header').outerHeight() || 2;
          var footerHeight = $(this).find('.modal-footer').outerHeight() || 2;

          $(this).find('.modal-content').css({
            'max-height': function () {
              return contentHeight;
            }
          });

          $(this).find('.modal-body').css({
            'max-height': function () {
              return contentHeight - (headerHeight + footerHeight);
            }
          });

          $(this).find('.modal-dialog').addClass('modal-dialog-center').css({
            'margin-top': function () {
              return -($(this).outerHeight() / 2);
            },
            'margin-left': function () {
              return -($(this).outerWidth() / 2);
            }
          });
          if($(this).hasClass('in') === false){
            $(this).hide();
          }
        });
      }
      if ($(window).height() >= 320){
        $(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");
      }


      // live type update video filter input
      if( $("#homefilter").val().length === 0) {
        $("#homefilter-text").html('All Videos');
      }

      $("#homefilter").keyup(function(){
        $("#homefilter-text").html('Results For: "' + $(this).val() + '"');

        if( $("#homefilter").val().length === 0) {
          $("#homefilter-text").html('All Videos');
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


      // Homepage hero play/close buttons
      $('.playbutton').click(function() {
        $('.videoWrapper').addClass('visible');
        $('.contentWrapper').addClass('hidden');
        // check if youtube video oembed
        if ( $(".videoWrapper #player").length === 1 ) {
          player.seekTo(0, false);
          player.playVideo();
        //check if livestream video embed url
        } else if ( $(".videoWrapper #livestream").length === 1 ) {
          $('.videoWrapper iframe').attr( 'src', function ( i, val ) {
            var newVal = val.replace('&autoPlay=false','&autoPlay=true');
            return newVal;
          });
        }
      });

      $('.video-close').click(function() {
        $('.videoWrapper').removeClass('visible');
        $('.contentWrapper').removeClass('hidden');
        // check if youtube video oembed
        if ( $(".videoWrapper #player").length === 1 ) {
          player.stopVideo();
          player.clearVideo();
        //check if livestream video embed url
        } else if ( $(".videoWrapper #livestream").length === 1 ) {
          $('.videoWrapper iframe').attr( 'src', function ( i, val ) {
            var newVal = val.replace('&autoPlay=true','&autoPlay=false');
            return newVal;
          });
        }
      });

      //smooth scroll to anchor
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                  scrollTop: (target.offset().top - 225)
              }, 1000);
            return false;
          }
        }
      });

      // Video Post Modal
      /*jQuery(document).ready(function($) {
          var $modal = $('.video-modal');
          var video_url, video_title;

          $('.videotile-link').on('click', function(e){
              e.preventDefault();

              video_url = $(this).attr('href');
              video_title = $(this).attr('title');

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
                $modal.find('.modal-title').html(video_title);

              $modal.find('.modal-body').load(video_url + ' article.type-video ', '' , function(){
                addthis.toolbox('.addthis_toolbox');
                $(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");
              });

                $modal.find('#frame').attr('src', video_url);
                //$(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");

              }, 0);

          });

      });

      $('.video-modal').on('hidden.bs.modal', function () {
        $(this).find('.modal-dialog').remove();
      });*/

    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page

      //Sticky nav function
      var stickyOffset = $('.sticky').offset().top;
      var navBar = $('.fixed');

      $( window ).resize(function(){
        var stickyOffset = $('.sticky').offset().top;
      });

      $(window).scroll(function(){
        var sticky = $('.sticky');
        var scroll = $(window).scrollTop();

        if (scroll >= stickyOffset){
          navBar.addClass('visible');
        }
        else {navBar.removeClass('visible');
        }
      });


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
