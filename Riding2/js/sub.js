$(function(){
	circleGen.init();
	subDisp.init();
});

var circleGen = {
	target:'.circle_wrapper',
	quantity:0,
	maxNum:50,
	minNum:20,
	wWidth:$(window).width(),
	wHeight:$(window).height(),
	init:function(){
		this.events();
	},
	events:function(){
		this.windowResize();
		this.circleGenerater();
	},
	resetCircles:function(){
		var target = this.target;
		$(target).html('');
	},
	circleGenerater:function(){
		this.resetCircles();
		var num = this.randNum();
		for (var i = 0; i < num; i++) {
			this.eachCircleSet();
		}
	},
	eachCircleSet:function(){
		var css = "";
		var top = this.randNum(0,this.wHeight);
		var left = this.randNum(0,this.wWidth);
		var time = this.randNum(10,100);
		var size = this.randNum(30,100);
		css = "top:" + top + "px; left:" + left + "px; width:" + size + "px; height:" + size + "px; animation-duration:" + time + "s;";
		$(this.target).append('<div class="circle" style="'+ css +'"></div>');
	},
	windowResize:function(){
		$(window).on('resize', function(){
			circleGen.wWidth = $(window).width();
			circleGen.wHeight = $(window).height();
			circleGen.circleGenerater();
		});
	},
	randNum:function(max=circleGen.maxNum, min=circleGen.minNum){
		var num = Math.random() * ( max - min ) + min;	//乱数設定
		num = parseInt(num,10);							//整数化
		return num;
	}
}


var subDisp = {
	sections:[],
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
		subDisp.sections = [];
		$('section').each(function(i,e){
			var id = '#' + e.id;									// each section id
			if(id=='#' || id=='' || id==null || id==undefined) return;
			var top = $(this).offset().top;							// each section top
			var bottom = $(this).offset().top + $(this).height(); 	// each section bottom
			var arr = {
				id	: id,
				top : top,
				btm : bottom,
			}
			subDisp.sections.push(arr);
		});
	},
	sectionsActivate:function(py=$(window).scrollTop()){
		var sectionsArr = subDisp.sections;
		var offsetY = $(window).height() / 2;
		for (key in sectionsArr){
			(py >= sectionsArr[key].top - offsetY && py <= sectionsArr[key].btm + offsetY) ? $(sectionsArr[key].id).addClass('active') : $(sectionsArr[key].id).removeClass('active');
		}
	},
	scrollEvent:function(){
		$(window).on('scroll', function(){
			var py = $(window).scrollTop();
			subDisp.sectionsActivate(py);
		});
	},
	loadEvent:function(){
		$(window).on('load', function(){
			subDisp.sectionsSet();
		});
	},
	resizeEvent:function(){
		$(window).on('resize', function(){
			subDisp.sectionsSet();
		});
	},

}