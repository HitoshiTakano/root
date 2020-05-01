$(function(){
	var top = './';
	var slideArr = [];
	
	var url = location.href;
	var param = url.split('#');

	// Footer Menu Scroll Event
	if(param[1]!=undefined && param[1]!=null && param[1]!='' ){
		var top = $(window).scrollTop();
		var header = $('header').height();
		var position = top - header;
		$('html, body').animate({scrollTop:position},{ duration: 0, easing: 'swing', });
	}
	$('#menu_bar').on('click', function(){
		$(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active');
	});
	$(window).on('scroll', function(){
		var y = $(window).scrollTop();
		if(y>100){
			$('header').addClass('scroll');
		}else{
			$('header').removeClass('scroll');
		}
	});
	$('.logo').on('click',function(){
		location.href = top;
		return false;
	});
	$('.slide').each(function(i,e){
		var h = $(this).height();
		var id = '#' + $(this).attr('id');
		$(this).css('height','0px');
		slideArr.push({id:id,h:h});
	});
	$('#works a').each(function(i,e){
		$(this).removeClass('active');
	});
	$('a[href^="#"]').on('click', function(){
		var target = $(this).attr('href');
		var __this = $(this);
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(target).css('height','0px');
			return false;
		}
		for (var i = 0; i < slideArr.length; i++) {
			var elem = slideArr[i];
			if(elem.id == target){
				__this.hasClass('active') ? __this.removeClass('active') :__this.addClass('active');
				$(target).css('height',elem.h);	
			}
		}
		return false;
	});
})