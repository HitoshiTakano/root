$(document).ready(function(){
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
	//show hide func
	
	$('input[name="希望職種"]').on('click',function(){
		var val = $('input[name="希望職種"]:checked').val();
	if( val == "エンジニア"){
				$('#programmer').show();
				$('#clerical').hide();
			}else if( val == "事務" ){
				$('#programmer').hide();
				$('#clerical').show();
			}else{
				console.log("ERROR");
			}
	});
	// navigation scroll
	$('#link').on('click',function(event) {
		console.log("chk");
		var id = $(this).attr("href");
		var offset = 0;
		var target = $(id).offset().top - offset;
		$('html, body').animate({
			scrollTop: target
		}, 500);
		event.preventDefault();
	});
	/* Scroll-to-Top Button */
	$(window).on('scroll',function () {
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
	/* WORK IN PROGRESS
	   NAVIGATION ACTIVE STATE IN SECTION AREA
	*/
	var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight();
	$(window).on('scroll', function () {
	  var cur_pos = $(this).scrollTop();
	  sections.each(function() {
		var top = $(this).offset().top - nav_height,
			bottom = top + $(this).outerHeight();
		if (cur_pos >= top && cur_pos <= bottom) {
			
			if($(this)[0].id !== "topimg" ){
				$('body').css('background-image', 'url(../LPsample/img/pc_dog.jpg)');
				$('body').addClass('active');
			}else{
				$('body').css('background-image', 'url(../LPsample/img/pc.jpg)');
				$('body').removeClass('active');
			}
		  //nav.find('a').removeClass('active');
		  sections.removeClass('active');
		  $(this).addClass('active');
		  nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
		}
	  });
	});
	
    $(function() {               
            $.fn.autoKana('#name', '#furi', {
                katakana : false  //true：カタカナ、false：ひらがな（デフォルト）
     		});
	})
	//メールアドレス　バリデーション
	$('#mail').blur(
		function(){
			var mail = $("#mail").val();
			var confMail = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;　//メールアドレス正規表現
			if(confMail.test(mail)){
				console.log("OK");
			} else {
				console.log("NO");
			}
		}
	);
	console.log("ハッカーであると信じてます！");
	console.log("We believe you are very kind Hacker！");
	
});