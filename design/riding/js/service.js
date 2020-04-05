$(function(){
	service.init();
});

var service = {
	textH:[],
	windowW:0,
	init:function(){
		this.resetTextHeight();
		this.initWindowWidth();
		this.getTextHeight();
		this.resizeEvent();
	},
	initDivHeight:function(){
		$('section#service > div').each(function(i, e){
			service.textH.push($(this).innerHeight());
		});
	},
	initWindowWidth:function(){
		service.windowW = $(window).innerWidth();
	},
	getTextHeight:function(){
		var w = $(window).innerWidth();
		if(w < 910) return false;
		this.pcTextHeight();
	},
	pcTextHeight:function(){
		$('section#service > div > div > div.text').each(function(i, e){
			var h = $(this).outerHeight();
			h = h - 540 + 100 + service.textH[i];
			var id = $(this).parent().parent().attr('id');
			$('#' + id).css('height', h);
		});
	},
	resizeEvent:function(){
		$(window).on('resize', function(){
			service.initWindowWidth();
			service.resetTextHeight();
			service.getTextHeight();
		});
	},
	resetTextHeight:function(){
		$('section#service > div > div > div.text').each(function(i, e){
			var id = $(this).parent().parent().attr('id');
			$('#' + id).css('height', 'auto');
		});
		this.initDivHeight();
	},

}