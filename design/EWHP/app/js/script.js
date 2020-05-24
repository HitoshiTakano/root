
$(document).ready(function(){
	
	// HP URL
	var url;
	
	var trail = document.referrer;
		
	$('#list1').on('click', function(){
		window.location.href = '/app/basic/list1.html'; 
	});
	$('#list2').on('click', function(){
		window.location.href = '/app/basic/list2.html';
	});
	$('#list3').on('click', function(){
		window.location.href = '/app/basic/list3.html'; 
	});
	$('#list4').on('click', function(){
		window.location.href = '/app/basic/list4.html';
	});
	
	$('#goform').on('click', function(){
		window.location.href = '/app/basic/form.html';
	});
	
	//}
	

});


//particle background edit js

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particleBG'), {
	  
	  
    dotColor: 'rgba(0, 0, 255, 0.5)',
    lineColor: 'rgba(0, 0, 255, 0.5)',
	lineWidth:6,
	density: 20000,
	particleRadius: 10,
	proximity: 200,
  });
  //var intro = document.getElementById('intro');
  //intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);



//$('#particles').particleground({
    //ドットの色
//    dotColor: '#bcbcbc',
 
    //ドットの大きさ
//    particleRadius: 5,
 
    //線の色
//    lineColor: '#bcbcbc',
 
    //線の太さ
//    lineWidth: 1,
 
    //ドットをつなぐ線の種類を指定。trueにすることで曲線に
//    curvedLines: false,
 
    //ドット同士が、どのくらい近づいたら線で結ぶかをpx数で指定。
//    proximity: 100,
 
    //ドットの、X軸（横）移動の移動時間の最小時間を指定
//    minSpeedX: 0.1,
 
    //ドットの、X軸（横）移動の移動時間の最大時間を指定
//    maxSpeedX: 0.7,
 
    //ドットの、Y軸（縦）移動の移動時間の最小時間を指定
//    minSpeedY: 0.1,
 
    //ドットの、Y軸（縦）移動の移動時間の最大時間を指定
//    maxSpeedY: 0.7,
 
    //X軸（横）のドットが流れていく方向の指定。"center"、"left"、"right"から選択
//    directionX: "center",
 
    //Y軸（横）のドットが流れていく方向の指定。"center"、"up"、"bottom"から選択
//    directionY: "center",
 
    //ドットの密度を指定。数値が少ないほど、密度が濃くなります。
//    density: 10000,
 
    //生成されるparticleの密度を指定します。数値が少ないほど、密度が濃くなります。
//    minSpeedX: 0.1,
 
    //マウスの動きに合わせたパララックスの有無を指定。falseでオフ。
//    parallax: true,
 
    //パララックスによる動きの大きさを指定。数値が少ないほど、視差効果が大きくなります。
//    parallaxMultiplier: 5,
 
    //このプラグインの初期化が終わったタイミングで実行する処理を記述できます。
//    onInit: function() {},
 
    //このプラグインが削除された後に実行する処理を記述できます。
//    onDestroy: function() {},
//});


//
//var wH = $(window).height(); //ウィンドウサイズの高さを取得
//var wW = $(window).width(); //ウィンドウサイズの横幅を取得
//$('.particleScreen').css('height',wH+'px'); //ウィンドウサイズの高さを指定
//$('.pg-canvas').css('height',wH+'px'); //ウィンドウサイズの高さを指定
//$('.pg-canvas').css('width',wW+'px'); //ウィンドウサイズの横幅を指定


/*
// jQuery plugin example:
$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});
*/


