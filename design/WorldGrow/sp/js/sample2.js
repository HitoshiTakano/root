//スライドショー
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",	//アニメーション　"slide" or "fade"
		slideshow:true,		//オートスライドありなし
		slideshowSpeed:6000,	//オートスライドスピード
		controlNav:true		//コントロールナビありなし
	});
});


//ページトップへ
$(document).ready(function(){
	$('.pagetop a[href^=#]').tap(function() {
		var speed = 500;
	       	var href= $(this).attr("href");
	       	var target = $(href == "#" || href == "" ? 'html' : href);
	       	var position = target.offset().top;
		$('html, body').animate({ scrollTop: position } , speed, 'swing');
	       	return false;
	});
});

//背景アニメーションJS
$('#animation').css('visibility','hidden');
$(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   $(this).addClass("fadeInDown");
  }
 });
});