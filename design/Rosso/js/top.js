$(function(){
	$('.menu_bar').on('click', function(){
		menu_bar();
		open_nav();
	});
});

function menu_bar(){
	($('.menu_bar').hasClass('close')) ? $('.menu_bar').removeClass('close') : $('.menu_bar').addClass('close');
}
function open_nav(){
	($('nav').hasClass('active')) ? $('nav').removeClass('active') : $('nav').addClass('active');
}