$(function(){
	$('a[href^="#"]').on('click', function(){
		return false;
	});
	$('#modal_open').on('click', function(){
		$('#modal').addClass('active');
		$('body').css('overflow','hidden');
	});
	$('#modal_close').on('click', function(){
		$('#modal').removeClass('active');
		$('body').css('overflow','visible');
	});
	$('.slide-wrap').slick({
		autoplay:true,
		speed:400,
	});
});