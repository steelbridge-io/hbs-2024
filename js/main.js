jQuery(document).ready(function() {

// Couple of variables used throughout code
  var $body = jQuery('body'),
    $win = jQuery(window);

// Check Width
  var timer,
    smallMediumBreak = 600, // change me!
    mediumLargeBreak = 832, // change me!
    layoutView,
    checkWidth = function() {
      windowWidth = $win.width();
      if ( windowWidth <= smallMediumBreak ) {
        layoutView = 'small';
      } else if ( windowWidth <= mediumLargeBreak ) {
        layoutView = 'medium';
      } else {
        layoutView = 'large';
      }
    };
  $win.resize(function() {
    clearTimeout(timer);
    // throttle the resize check
    timer = setTimeout(function() {
      // resize functions here
      checkWidth();
    }, 200);
  });
  checkWidth();

// Home Slider
  var $homeSlider = jQuery('#home_slider_id'),
      $homeSliderWrap = jQuery('#home_slider_wrap_id'),
      setSlideBG = function(color) {
        $homeSliderWrap.animate({
          backgroundColor: color
        });
      };

  if( $homeSlider.bxSlider ) {
    $homeSlider.bxSlider({
      auto: true,
      autoPause: true,
      pause: 8000,
      adaptiveHeight: true,
      controls: false,
      useCSS: false,
      onSliderLoad: function(currentIndex) {
        var initialSlide = jQuery('.home_slider--item_wrap').not('.bx-clone')[0],
            initialSlideData = initialSlide.dataset;
        setSlideBG(initialSlideData.backgroundcolor);
      },
      onSlideBefore: function($slideElement, oldIndex, newIndex) {
        var newSlideData = $slideElement[0].dataset;
        setSlideBG(newSlideData.backgroundcolor);
      },
      onSlideAfter: function($slideElement, oldIndex, newIndex) {
      }
    });
  }

// Mix It Up -> Recommended Reading
  var $rrContainer = jQuery('#rr_container, #client_quotes_id'),
    hash = window.location.hash.replace("#", ""),
    rr_hash_filter;
  if ( hash.length > 0 ) {
    if ( hash == "All" ) {
      rr_hash_filter = ".mix_item";
    } else {
      rr_hash_filter = ".mix_category--" + hash;
    }
  } else {
    rr_hash_filter = ".mix_item";
  }

  if( $rrContainer.mixItUp ) {
    $rrContainer.mixItUp({
      animation: {
        effects: 'fade',
        animateResizeContainer: false
      },
      callbacks: {
        onMixStart: function(state) {
          jQuery('.first_rr_item').removeClass('first_rr_item');
        },
        onMixEnd: function(state) {
          console.log(state.activeFilter);
          var newHash = state.activeFilter.replace('.mix_category--', '#'),
            allCat = state.activeFilter.search('.mix_category--');
          if ( allCat == -1 ) {
            window.location.hash = "All";
          } else {
            window.location.hash = newHash;
          }

          var firstMatchedEl = jQuery(state.activeFilter)[0];
          jQuery(firstMatchedEl).addClass('first_rr_item');
        }
      },
      selectors: {
        target: '.mix_item',
        filter: '.mix_cat'
      },
      load: {
        filter: rr_hash_filter
      }
    });
  }

  //Testimonial Slider
  var testimonialsSlider = $('#testimonialsCarousel');
  testimonialsSlider.carousel({
    interval: 6500,
    pause: false
  });
  
  $('#testimonialsCarousel .carousel-item').on('click', function(){
    testimonialsSlider.carousel( Number($(this).attr('slide-number')) );
  });
  //search fix
  $('.search-form svg').click(function() {
    $('.search-form .btn').click();
  });

  //video modal
  // Gets the video src from the data-src on each button
  var $videoSrc;  
  $('.video-btn').click(function() {
      $videoSrc = $(this).data( "src" );
      $('#hero-video .html5-main-video').get(0).pause();
  });
  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) { 
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    if( $("#video").length ) {
      $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    }
  });
  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
      // a poor man's stop video
      if( $("#video").length ) {
        $("#video").attr('src',$videoSrc);
      }
      if( $('#hero-video .html5-main-video').length ) {
        $('#hero-video .html5-main-video').get(0).play();
      }
  });

  $(".companies-block").each(function(){
    var blockIndex = $(this).attr('block-number');
    var blockDelay = parseInt($(this).attr('block-delay'));
    var company1 = $(this).find('.company-logo-1');
    var company2 = $(this).find('.company-logo-2');
    setTimeout(function() {
      if ( company1.hasClass('active') ) {
        company1.removeClass('active');
        setTimeout(function() {
          company2.addClass('active');
        }, 1000);
      }
      if ( company2.hasClass('active') ) {
        company2.removeClass('active');
        setTimeout(function() {
          company1.addClass('active');
        }, 1000);
      }
      setInterval(function() {
          if ( company1.hasClass('active') ) {
            company1.removeClass('active');
            setTimeout(function() {
              company2.addClass('active');
            }, 1000);
          }
          if ( company2.hasClass('active') ) {
            company2.removeClass('active');
            setTimeout(function() {
              company1.addClass('active');
            }, 1000);
          }
      }, 15000);
    }, blockDelay);
  });

  const getCookieValue = (name) => (
    document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || ''
  )

  var cartCookie = getCookieValue('woocommerce_items_in_cart');
  if ( cartCookie && cartCookie !== "0" && cartCookie !== "" ) {
    $('.wpmenucart-display-standard').attr('style','display:flex;');
  }

});