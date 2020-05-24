
$(function(){
	/* MENU EVENT */	
	$('#ham, nav').on('click', function(){
		if(!$('#ham').hasClass('clicked')){
			$('#ham').addClass('clicked');
			$('nav').show();
		}else{
			$('#ham').removeClass('clicked');
			$('nav').hide();
		}
	});
	// navigation scroll
	/*
	$('nav a').on('click', function(event) {
		var id = $(this).attr("href");
		var offset = 0;
		var target = $(id).offset().top - offset;
		$('html, body').animate({
			scrollTop: target
		}, 500);
		event.preventDefault();
	});
	*/
	/* WINDOW SCROLL */
	$(window).on('scroll',function() {
	  	var h = 0;
		if ($(window).scrollTop() > h) {
			$('header').addClass('fixed')
		} else {
			$('header').removeClass('fixed')
		}
	});

	// テスト用
	var loc = location.href;
	var top = 'https://excitingworks.jp/tokyosin/'
	
	$('a[href^="#"]').on('click', function(){
		location.href = (loc==top) ? "./ring/" : top;
	});
})