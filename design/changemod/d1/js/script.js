$(function(){


});


var app = {
	sec:[],
	parts:[],
	init:function(){

	},
	addEvent:function(){

	},
	setSections:function(){
		var sections = this.sec;
		$('section').each(function(i,e){
			var id = '#' + e.id;									// each section id
			var top = $(this).offset().top;							// each section top
			var bottom = $(this).offset().top + $(this).height(); 	// each section bottom
			var arr = {
				id	: id,
				top : top,
				btm : bottom,
			}
			sections.push(arr);
		});
	},

}

