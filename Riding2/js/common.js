$(function(){
	$('a').on('click', function(){
		var href = $(this).attr('href');
		if(href=="#menu"){
			( $(this).hasClass('active') ) ? $(this).removeClass('active') : $(this).addClass('active');
			( $(this).hasClass('active') ) ? $('body').css('overflow','hidden') : $('body').css('overflow','visible');
			return false;
		}
	});
	partsActive.init();
});


var partsActive = {
	target:'.parent > .child',
	posY:0,
	childs:[],
	init:function(){
		this.childsActivate();
		this.headerShadow();
		this.scrollPos();
	},
	childsActivate:function(py=$(window).scrollTop){
		var target = $(this.target);
		var offset = 500;
		target.each(function(i,e){
			var top = $(this).offset().top;
			var btm = top + $(this).height();
			// console.log(btm + ' || ' + py);
			(py >= top - offset && py <= btm) ? $(this).addClass('active') : $(this).removeClass('active');
		});
	},
	scrollPos:function(){
		$(window).on('scroll', function(){
			partsActive.posY = $(window).scrollTop();
			partsActive.childsActivate(partsActive.posY);
			partsActive.headerShadow(partsActive.posY);
		});
	},
	headerShadow:function(py=$(window).scrollTop){
		(py > 0) ? $('header').addClass('scrolled') : $('header').removeClass('scrolled');
	},
}