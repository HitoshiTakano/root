$(function(){
	var y = $(window).scrollTop();
	$('section#top').addClass('noscrolled');
});
$(window).on('scroll', function(){
	var y = $(window).scrollTop();
	if(y>100){
		$('section#top').addClass('scrolled');
		$('section#top').removeClass('noscrolled');
	}else{
		$('section#top').removeClass('scrolled');
		$('section#top').addClass('noscrolled');
	}
});	