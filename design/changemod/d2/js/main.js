$(function(){
	comm.init();
	$('#slider').slick({
		autoplay:true,
		autoplaySpeed:5000,
		dots:true,
	});
});
var comm = {
	init:function(){
		this.addEvent();
	},
	addEvent:function(){
		this.aLink();
		this.menuBtn();
	},
	menuBtn:function(){
		$('#menu_btn').on('click',function(){
			$('header').hasClass('opened') ? $('header').removeClass('opened') : $('header').addClass('opened');
		});
	},
	aLink:function(){
		$('a[href^="#"]').on('click',function(){
			return false;
		})
	},

}