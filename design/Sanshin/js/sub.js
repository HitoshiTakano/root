// JQuery Use
$(window).on('load', function(){
	var text = $('section#subTitle > div > h1').text(); //textの文字の内容を取得
	$('section#subTitle > div > h1::before').css('content', text);
});
$(window).on('scroll', function(){
	var py = $(window).scrollTop();
	scrollEvent(py);
});

function scrollEvent(y=0){
	var param = header.isActive;
	header.isActive = (y>50) ? true : false;
}