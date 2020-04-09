var commonEvent = {
	posY : 0,
	windowWidth:0,
	loc:'',
	links:{
		top:'./',
		service:'./service.php',
		recruit:'./recruit.php',
		company:'./',
		contact:'./contact.php',
	},
	init:function(){
		this.setInit();
		this.addEvent();
	},
	setInit:function(){
		this.posY = $(window).scrollTop();
		this.windowWidth = $(window).outerWidth();
		var url = window.location.href;
		this.loc = ( url.match(".+/(.+?)\.[a-z]+([\?#;].*)?$")!=null ) ? url.match(".+/(.+?)\.[a-z]+([\?#;].*)?$")[1] : 'top';
		this.navEvent();
	},
	addEvent:function(){
		this.clickEvent();
		this.scrollEvent();
		this.resizeEvent();
	},
	clickEvent:function(){
		$('.menu_bar').on('click',function(){
			commonEvent.menuEvent();
		});
		$('a[href^="#"]').on('click', function(){
			var href = $(this).attr('href');
			if(!commonEvent.idCheck(href)) {
				commonEvent.linkEvent(href);
				return false;
			}
			var offset = (commonEvent.loc == 'top') ? $('header').outerHeight() : 0;
			var missionOffset = commonEvent.topEvent(offset);

			if(href=='#'){
				$('html, body').animate({scrollTop:0},{ duration: 700, easing: 'swing', });
				return false;	
			}
			var target = (href=='#mission') ? $(href).offset().top - missionOffset : $(href).offset().top - offset;

			$('html, body').animate({scrollTop:target},{ duration: 700, easing: 'swing', });
			return false;
		});
		$('nav > ul > li > a').on('click', function(){
			$('.menu_bar').removeClass('active');
			if(commonEvent.windowWidth < 910){
				$('.menu_bar').hasClass('active') ? $('header').addClass('active') : $('header').removeClass('active');
				$('.menu_bar').hasClass('active') ? $('body').css('overflow', 'hidden') : $('body').css('overflow', 'visible');
			}
		});
	},
	scrollEvent:function(){
		$(window).on('scroll', function(){
			var y = $(window).scrollTop();
			commonEvent.navEvent(y);
		})
	},
	resizeEvent:function(){
		$(window).on('resize', function(){
			commonEvent.windowWidth = $(window).outerWidth();
			if(commonEvent.windowWidth > 900){

			}
		});
	},
	topEvent:function(offset){
		offset = (commonEvent.windowWidth > 910) ? offset - 56 : offset;
		return offset;
	},
	navEvent:function(y=this.posY){
		// (y>0) ? $('header').addClass('scroll') : $('header').removeClass('scroll');
	},
	menuEvent:function(){
		$('.menu_bar').toggleClass('active');
		if(commonEvent.windowWidth < 910){
			$('.menu_bar').hasClass('active') ? $('header').addClass('active') : $('header').removeClass('active');
			$('.menu_bar').hasClass('active') ? $('body').css('overflow', 'hidden') : $('body').css('overflow', 'visible');
		}
	},
	idCheck:function(id){
		if(id=='#') return false;
		return ($(id).length > 0) ? true : false;
	},
	linkEvent:function(id){
		id = id.replace('#', '');
		if(id=='') id = 'top';
		return false;
		window.location.href = linkMethods.id;
	},
};
$(function(){
	commonEvent.init();
});