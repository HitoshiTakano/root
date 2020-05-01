$(function(){
	$('.slide_wrapper').slick({
		autoplay:true,
		autoplaySpeed:3000,
		speed:400,
		dots: true,
	});
	$('.slide_second_wrapper').slick({
		autoplay:true,
		autoplaySpeed:3000,
		speed:400,
	});
	$('a').on('click', function(){
		alert('現在使用できません。ご了承ください。');
		return false;
	})
});