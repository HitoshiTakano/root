$(function(){
	subPage.init();
});

var subPage = {
	sections:[{
		id:'top',
		top:0,
		bottom:300,
	}],
	init:function(){
		subPage.event();
		subPage.resize();
	},
	event:function(){
		subPage.catchSection();
		subPage.scroll();
	},
	catchSection:function(){
		$('section').each(function(i,e){
			var id = e.id;
			var offset = (i==0) ? 0 : 400;
			var top = $(e).offset().top - offset;
			var btm = top + $(e).height() + offset;
			var arr = {
				id:id,
				top:top,
				bottom:btm
			};
			subPage.sections.push(arr);
		});
	},
	resize:function(){
		$(window).on('resize', function(){
			subPage.catchSection();
		});
	},
	scroll:function(){
		$(window).on('scroll', function(){
			var pos = $(window).scrollTop();
			for (var i = 0; i < subPage.sections.length; i++) {
				if( pos >= subPage.sections[i].top && pos <= subPage.sections[i].bottom){
					(subPage.sections[i].id == 'promote' || subPage.sections[i].id == 'description') ? $('.bgCircle').addClass('active') : $('.bgCircle').removeClass('active');
					(subPage.sections[i].id == 'others') ? $('.stripe_wrapper').addClass('active') : $('.stripe_wrapper').removeClass('active');
					$('#' + subPage.sections[i].id).addClass('active');
				}else{
					$('#' + subPage.sections[i].id).removeClass('active');
				}
			}

		});
	},
	clickContents:function(){
		$('section > div.kindsItem > div').on('click touchstart', function(){
			($(this).hasClass('active')) ? $(this).removeClass('active') : $(this).addClass('active');
		});
	},
}