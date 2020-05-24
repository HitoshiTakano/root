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

//チェック $(this).removeClass("checked").addClass("check");}

function openMenu(){
	document.getElementById("fliper").style.visibility="visible";
}

//表示・非表示function
function disp(num)
{
   
//		var element = document.getElementById( "page" + i ) ;
//		if(element.attr("class")=="checked"){
//		removeClass("checked").addClass("check");	
//		}else{
//		}
		if(num==1){
			document.getElementById("page1").style.display="block";
			document.getElementById("page0").style.display="none";
			document.getElementById("page2").style.display="none";
			document.getElementById("page3").style.display="none";
			document.getElementById("page4").style.display="none";
			document.getElementById("fliper").style.visibility="hidden";
			//document.getElementById("fliper").style.perspective="400px";		
			}else
		if(num==2){
			document.getElementById("page2").style.display="block";
			document.getElementById("page1").style.display="none";
			document.getElementById("page0").style.display="none";
			document.getElementById("page3").style.display="none";
			document.getElementById("page4").style.display="none";
			document.getElementById("fliper").style.visibility="hidden";
			//document.getElementById("fliper").style.perspective="400px";
		}else
		if(num==3){
			document.getElementById("page3").style.display="block";
			document.getElementById("page0").style.display="none";
			document.getElementById("page2").style.display="none";
			document.getElementById("page1").style.display="none";
			document.getElementById("page4").style.display="none";
			document.getElementById("fliper").style.visibility="hidden";
			//document.getElementById("fliper").style.perspective="400px";
		}else
		if(num==4){
			document.getElementById("page4").style.display="block";
			document.getElementById("page0").style.display="none";
			document.getElementById("page2").style.display="none";
			document.getElementById("page3").style.display="none";
			document.getElementById("page1").style.display="none";
			document.getElementById("fliper").style.visibility="hidden";
//
		}else{
		document.getElementById("fliper").style.visibility="hidden";
		}

}



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