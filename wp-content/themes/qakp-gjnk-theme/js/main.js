 $(window).load(function () {
    $(".loader-wrap").fadeOut();
    $("body").css("overflow-y", "scroll");
    $(".header-bottom .navbar").addClass("fixed-top");
    
  });


// 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '331',
          width: '535',
          videoId: 'Tpn9pmHYII0',
          playerVars: {'controls': 0, 'showinfo': 0, 'loop':1, 'playlist': 'Tpn9pmHYII0', 'modestbranding':1},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange,
           // 'mute': mute
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
        event.target.mute();
      }




      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
         // setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function unmuteVideo() {
        player.stopVideo();
        player.playVideo();
        player.unMute()
      }

      function muteVideo() {
        player.mute();
      }

 $(document).ready(function() {
     $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,

          lazyLoad: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            768: {
              items: 2
            },
            1000:{
                items:3
            }
        }
    });
    

/*
    $('.plus').hover(function () {
        $('.box-details').addClass('plus-on-hover');
    });
*/

/**
$('.plus-link').hover(function () {
    $('.box', this).find('.box-details').css("height", "auto");
});
*/
/****

$(".plus-link").mouseenter(function(){
    $(".box-details").addClass("plus-on-hover");
})
            // handle the mouseleave functionality
.mouseleave(function(){
    $(".box-details").removeClass("plus-on-hover");
});
***/
function smScreenMenu() {
  $("#toggle-menu").click(function () {
      $(this).toggleClass("active");
      $("#navbarSupportedContent").toggleClass("open");
      $(".navbar-expand-lg").toggleClass("active-toggle-menu");
      $(".qakp-logo").toggleClass("hide-qakp-logo");
       
      
  });
}
smScreenMenu();

function removeMenuOverlay() {
  $(".nav-link").click(function () {
    $("#toggle-menu").removeClass("active");
    $("#navbarSupportedContent").removeClass("open");
    $(".navbar-expand-lg").removeClass("active-toggle-menu");
    $(".qakp-logo").removeClass("hide-qakp-logo");
  });
}



$(".volume-click").click(function () {
    $(".imac-overlay").addClass('remove-imac-overlay');
    $(".imac-control").addClass('remove-imac-icon');
    $(".imac-control-description").addClass('remove-imac-icon');
    unmuteVideo();
});


function changeHeaderBgOnSmSize() {
    
removeMenuOverlay();
$(window).scroll(function () {
  if((Modernizr.mq('(max-width: 991px)'))) {
    if($(window).scrollTop() >= 50) {
        $('#home nav').addClass('header-bg-sm-size fixed-top');
        $('#home .qakp-logo').attr('src', '/wp-content/themes/qakp-gjnk-theme/img/logo1.png'); //.removeClass("push-qakp-logo");
        $('#home .header-bottom .navbar').removeClass("navbar-boxshadow-none");
    } else {
        $('nav').removeClass('header-bg-sm-size');
        $('#home .qakp-logo').attr('src', '/wp-content/themes/qakp-gjnk-theme/img/logo.png'); //.addClass("push-qakp-logo");
        $('#home .header-bottom .navbar').addClass("navbar-boxshadow-none");
    }
  } else {
        $('#home nav').removeClass('header-bg-sm-size');
        $('#home .qakp-logo').attr('src', '/wp-content/themes/qakp-gjnk-theme/img/logo1.png'); //.removeClass("push-qakp-logo");
        $('#home .header-bottom .navbar').removeClass("navbar-boxshadow-none");
  }
});
   
if((Modernizr.mq('(max-width: 991px)'))) {
  $('#home .qakp-logo').attr('src', '/wp-content/themes/qakp-gjnk-theme/img/logo.png'); //.addClass("push-qakp-logo");
  $('#home .header-bottom .navbar').addClass("navbar-boxshadow-none");
} else {
  $('#home .qakp-logo').attr('src', '/wp-content/themes/qakp-gjnk-theme/img/logo1.png'); //.removeClass("push-qakp-logo");
  $('#home .header-bottom .navbar').removeClass("navbar-boxshadow-none");
}


    
}


function stopVideo() {
    $(".new_destination").waypoint(function (direction) {
        if(direction == 'down') {
            muteVideo();
            $(".imac-overlay").removeClass('remove-imac-overlay');
            $(".imac-control").removeClass('remove-imac-icon');
            $(".imac-control-description").removeClass('remove-imac-icon');
        }
    }, {offset: '-50%'});

    $(".new_destination").waypoint(function (direction) {
        if(direction == 'up') {
            muteVideo();
            $(".imac-overlay").removeClass('remove-imac-overlay');
            $(".imac-control").removeClass('remove-imac-icon');
            $(".imac-control-description").removeClass('remove-imac-icon');
        }
    }, {offset: '50%'});
}


stopVideo();
changeHeaderBgOnSmSize();
 $(window).resize(function () {

      removeMenuOverlay();
      changeHeaderBgOnSmSize();


 });

if (!String.prototype.trim) {
      (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
          return this.replace(rtrim, '');
        };
      })();
    }

    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
      // in case the input is already filled..
      if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
      }

      // events:
      inputEl.addEventListener( 'focus', onInputFocus );
      inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
      classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
      if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
      }
    }

    var time = $('#clock').attr('data-id');
      $('#clock').countdown(time)
      .on('update.countdown', function(event) {
        var format = ' <div class="x"><div class="number"> %H</div> <div class="text">orë</div></div>'
                    + ' <div class="x"><div class="number"> %M</div> <div class="text">minuta</div></div>' 
                    + ' <div class="x"><div class="number"> %S</div> <div class="text">sekonda</div></div>';
        
        if(event.offset.totalDays > 0) {
          format = '<div class="x"><div class="number">%-d</div> <div class="text">ditë</div></div> ' + format;
        }
        else if(event.offset.hours < 1) {
          format = ' <div class="x"> <div class="number">%M</div> <div class="text">minuta</div></div>' 
                  + ' <div class="x"> <div class="number">%S</div> <div class="text">sekonda</div></div>';
        }
          
        $(this).html(event.strftime(format));
        
      })


      .on('finish.countdown', function(event) {
        $(this).parent().addClass('disabled');

      }); 

  
});
$(function() {
  $('.lazy').lazy({
          effect: "fadeIn",
          effectTime: 500,
          threshold: 0
        });
});   



var outLink = $('.redirect');


outLink.click(function(){
  window.location.href('/ballina');
});


var scrollLink = $('.scroll-qakp');
  
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    });
    
  });


