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
			var el = $(id).height();

			console.log(id);
			console.log(el);
			// example.toggleElements.push()
		})
	},

}

$(function(){
	$('section#career > div > div > a').on('click', function(){
		var id = $(this).attr('href');
		$(id).hasClass('active') ? $(id).removeClass('active') : $(id).addClass('active');
		return false;
	});
	example.init();
});

