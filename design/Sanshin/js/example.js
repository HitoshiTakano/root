var example = {
	toggleElements:[],
	init:function(){
		this.addEvent();
	},
	addEvent:function(){
		this.getElements();
	},
	getElements:function(){
		$('section#career > div > div > a').each(function(i,e){
			var id = $(this).attr('href');
			var h = $(id).height();

			var arr = {
				id:id,
				height:h,
			};
			example.toggleElements.push(arr);
			(i==0) ? $(id).css({'height':h}) : $(id).css({'height':'0px'});
			if(i==0) $(this).addClass('active');
		});
	},

}

$(function(){
	example.init();
	$('section#career > div > div > a').on('click', function(){
		var id = $(this).attr('href');
		var _this = $(this);
		_this.hasClass('active') ? _this.removeClass('active') : _this.addClass('active');
		$.each(example.toggleElements, function(i,e){
			if(id==e.id){
				_this.hasClass('active') ? $(e.id).css({'height':e.height}) : $(id).css({'height':0});
			}
		});
		return false;
	});
	
});

