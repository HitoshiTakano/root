$(function(){
	topDisp.init();
});

var topDisp = {
	sections:[],
	parts:[],
	init:function(){
		this.sectionsSet();
		this.sectionsActivate();
		this.events();
	},
	events:function(){
		this.resizeEvent();
		this.scrollEvent();
	},
	sectionsSet:function(){
		topDisp.sections = [];
		$('section').each(function(i,e){
			var id = '#' + e.id;									// each section id
			var top = $(this).offset().top;							// each section top
			var bottom = $(this).offset().top + $(this).height(); 	// each section bottom
			var arr = {
				id	: id,
				top : top,
				btm : bottom,
			}
			topDisp.sections.push(arr);
		});
	},
	sectionsActivate:function(py=$(window).scrollTop()){
		var sectionsArr = topDisp.sections;
		var offsetY = $(window).height() / 2;
		for (key in sectionsArr){
			(py >= sectionsArr[key].top - offsetY && py <= sectionsArr[key].btm + offsetY) ? $(sectionsArr[key].id).addClass('active') : $(sectionsArr[key].id).removeClass('active');
		}
	},
	scrollEvent:function(){
		$(window).on('scroll', function(){
			var py = $(window).scrollTop();
			topDisp.sectionsActivate(py);
		});
	},
	loadEvent:function(){
		$(window).on('load', function(){
			topDisp.sectionsSet();
		});
	},
	resizeEvent:function(){
		$(window).on('resize', function(){
			topDisp.sectionsSet();
		});
	},

}
