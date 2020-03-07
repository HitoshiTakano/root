$(document).ready(function(){
// Sticky Header
  $(window).on('scroll',function() {
  	var h = 0;

      if ($(window).scrollTop() > h) {
          $('.main_header').addClass('sticky');
      } else {
          $('.main_header').removeClass('sticky');
      }
  });
	// Mobile Navigation
	$('#toggleMenu').on('click',function() {
		if ($('.main_header').hasClass('open-nav')) {
			$('.main_header').removeClass('open-nav');
		} else {
			$('.main_header').addClass('open-nav');
		}
	});
	$('.main_header li a').on('click',function() {
		if ($('.main_header').hasClass('open-nav')) {
			$('.navigation').removeClass('open-nav');
			$('.main_header').removeClass('open-nav');
		}
	});
  // navigation scroll
  $('nav a').on('click',function(event) {
    var id = $(this).attr("href");
    var offset = 0;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
  });
  /* Scroll-to-Top Button */
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollup').fadeIn();
    } else {
        $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').on('click',function () {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
  });
  /* 
    WORK IN PROGRESS
    NAVIGATION ACTIVE STATE IN SECTION AREA
  */
  var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight();
 
  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
    sections.each(function() {
      var top = $(this).offset().top - nav_height,
          bottom = top + $(this).outerHeight();
      if (cur_pos >= top - 175 && cur_pos <= bottom + 100) {
        nav.find('a').removeClass('active');
        sections.removeClass('active');
        var this_id = $(this).attr('id');
        switch (this_id){
          case "work":
            $(this).addClass('slidein');
            break;
          case "ci":
              $(this).addClass('slideleft');
              break;
          case "about":
              $(this).addClass('slideright');
              break;
          case "access":
              $(this).addClass('zoomin');
              break;
          default:
              $(this).addClass('slidein');
              break;
        }
        $(this).addClass('active');
        nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
      }
    });
  });
  $('input[name="business"]').on('change', function(){
    var id = $(this).attr('id');
    $('#business .disp').css({'display':'none'});
    $('#'+id+'_disp').css({'display':'block'});

    console.log(id);
  })
});


/* SCROLL TOP FUNCTION*/
$(function(){
    $('.contents').each(function(i, elem){
        var contentsPOS = $(elem).offset().top;
        $(window).on('load scroll resize', function(){
            var winHeight = $(window).height();
            var scrollTop = $(window).scrollTop();
            var showClass = 'show';
            var timing =    100;
            if (scrollTop >= contentsPOS - winHeight + timing){
              $(elem).addClass(showClass);
            } else {
              $(elem).removeClass(showClass);
            }
            if(scrollTop >= contentsPOS - winHeight + timing){
              $(elem).addClass();
            }
        });
    });
});
