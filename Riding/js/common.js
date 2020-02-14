$(function(){
	// Menu
	$('#menu_bar').on('click', function(){
		($(this).hasClass('active')) ? $(this).removeClass('active') : $(this).addClass('active');
	});
	// Logo
	$('.logo').on('click', function(){
		location.href = 'https://riding.co.jp';
	});
	
});