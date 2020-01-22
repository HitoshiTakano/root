$(function(){
	main.init();

	$(window).on('resize', function(){
		main.resize();
	});
});

var main = {
	sections:[],
	pos:0,
	init:function(){
		main.getSection();
		main.events();
	},
	events:function(){
		main.scroll();
		main.navScroll();
		main.scrollClick();
		main.messageSwitch();
		main.mapResize();
	},
	getSection:function(){
		$('section').each(function(i, e){
			var id = e.id;	//id を変数に格納
			var headerHeight = $('header').height();　// header の高さを取得
			var offset = $(window).height() / 2;
			var top = (id=='top') ? 0 : $(e).offset().top - headerHeight - offset;　// sectionの位置を取得（headerの高さ分を差し引く
			var height = $(e).height();		// section の高さを取得
			var bottom = top + height + offset;		// section の末端ぶの定義
			var section = {
				id:id,
				pos:top,
				bottom:bottom,
				flg:false,
			}
			main.sections.push(section);
		});
	},
	resize:function(){
		main.sections=[];
		main.getSection();
		main.messageSwitch();
		main.mapResize();
	},
	messageSwitch:function(){
		if($(window).width()<501){
			$('.plan > .front > span').text('Tap');
		}else{
			$('.plan > .front > span').text('Hover');
		}
	},
	scroll:function(){
		$(window).on('scroll load', function(){
			var scrollTop = $(window).scrollTop();
			main.navDisp(scrollTop);
			main.sectionsPos(scrollTop);
			main.pageTop(scrollTop);
			main.pos = scrollTop;
		});
	},
	navDisp:function(nowPos){
		if(nowPos <= 0){
			$('nav').removeClass('active');
			$('header').removeClass('active');
		}else{
			(nowPos < main.pos) ? $('nav').removeClass('active') : $('nav').addClass('active');
			$('header').addClass('active');
		}
	},
	sectionsPos:function(nowPos){
		var offset = 300;
		var secHeight = $('header').height() + $('nav').height() + offset;
		var wheight = $(window).height();

		for (var i = 0; i < main.sections.length; i++) {
			var id = '#' + main.sections[i].id;
			if(main.sections[i].pos <= nowPos && main.sections[i].bottom >= nowPos ){
				$(id).addClass('active');
			}else{
				$(id).removeClass('active');
			}
		}
	},
	navScroll:function(){
		$('a[href^="#"]').on('click',function(){
			var speed = 500;
			var href = $(this).attr("href");
			var target = $(href === "#" || href === "" ? 'html' : href);
			var pos = 0;
			for (var i = 0; i < main.sections.length; i++) {
				if(href=='#'+main.sections[i].id){
					pos = main.sections[i].pos;
				}
			} 
			var position = target.offset().top;
			$("html, body").animate({scrollTop:pos}, speed, "swing");
			return false;
		});
	},
	mapResize:function(){
		var width = ( $(window).width() ) < 501 ? $(window).width() * 9 / 10 : $(window).width() * 2 / 3;
		var height = width / 16 * 9
		$('.map').css({
			'width':width,
			'height':height,
		});
	},
	scrollClick:function(){
		$('.scrollDown').on('click', function(){
			$("html, body").animate({scrollTop:main.sections[1].pos}, 500, "swing");
		});
	},
	pageTop:function(nowPos){
		if(nowPos >= main.sections[0].bottom - 300){
			$('#pageTop').addClass('active');
		}else{
			$('#pageTop').removeClass('active');
		}
		$('#pageTop').on('click', function(){
			$("html, body").animate({scrollTop:0}, 500, "swing");
		})
	},
}