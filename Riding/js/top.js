var scrollPos = 0;
var animeArray = [];

$(function(){
	
	$('a').on('click', function(){
		alert('ただいま、HP刷新中でございます。ご迷惑おおかけし大変申し訳ございませんが、よろしくお願いいたします。');
		return false;
	});
	function anime(){
		$('.anime').each(function(i,e){
			console.log($(this));
			console.log($(this).offset());
			animeArray.push()
		});	
	}
	

	$(window).on('scroll', function(){
		scrollPos = $(window).scrollTop();
		var offset = 200;
	});

});
