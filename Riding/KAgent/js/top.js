$(function(){
	// 遷移用
	$('a').on('click', function(){
		location.href="./sample_sub.html";
	});

	// SLICK SLIDER ANIMATION
	/*$('.slick-slider').slick({
			infinite: true, //スライドをループさせるか
			arrows: false, //前後ボタンの表示
			dots: true, //点の表示
			slidesToShow: 1,
			fade:true,
			lazyLoad: 'ondemand',
			variableWidth: false,
			autoplaySpeed:3000,
			centerMode: true, //要素を中央寄せ
			centerPadding:'0', //両サイドの見えている部分のサイズ
			autoplay:true, //自動再生
	});	*/
});
// 新着情報量判定（スクロール化）
$(window).on('load resize', function(){
	var InfoHeight = $('.info > table').outerHeight();
	(InfoHeight>300) ? $('.info').css('overflow-y','scroll') : $('.info').css('overflow-y','visible');
	if($(window).scrollTop()==0) $('nav').addClass('scroll');
});
// SCROLL EVENT（windowサイズ)
var startPos = 0;	//スクロール開始地点
var headerHeight = $('header').outerHeight();
$(window).on('scroll', function(){
	var pos = $(this).scrollTop();	// 現在位置の取得
	if (pos > startPos) {
		if($(this).scrollTop() >= headerHeight) $('nav').removeClass('scroll');
	}else{
		($(this).scrollTop() <= headerHeight) ? $('nav').addClass('scroll') : $('nav').addClass('scroll');
	}
	startPos = pos;	//スクロール開始地点の更新
});
$(window).on('resize', function(){
	var h = $(window).scrollTop();
	(h > 0) ? $('nav').removeClass('scroll') : $('nav').addClass('scroll');
	
});
// vue console dev warning remove
Vue.config.devtools = false;
Vue.config.productionTip = false

var top = new Vue({
	el:'header',
	data:{
		menuBtnFlg:false,
	},
	methods:{
		menuBtnClick:function(){
			this.menuBtnFlg = (!this.menuBtnFlg) ? true : false;
		},
	}
});
var news = new Vue({
	el:'#info',
	data:{
		// PHPでjson化予定
		news:[
			{date:'2018/10/27', content:'株式会社KAgent設立'},
			{date:'2018/10/27', content:'SES事業開始'},
			{date:'2018/11/01', content:'IT事務教育事業開始'},
			{date:'2019/06/01', content:'事務所移転'},
			{date:'2018/07/01', content:'フロントエンジニア教育事業開始'},
			{date:'2019/10/01', content:'受託業務開始'},
		],
	},
	methods:{
		sortData:function(data){
			this.news.sort(function(a, b){
				return (a.date < b.date ? -1 : 1);
			});
		},
	},
	mounted(){

	},
})


// Canvas Method
$(function () {

var unit = 100,
    canvas, context, canvas2, context2,
    height, width, xAxis, yAxis,
    draw, repeat;

var canvasArray = [
				'#sineCanvas',
				'#cosCanvas',
				'#sinCosCanvas'
			];

function init(canvasid) {
    
    canvas = document.getElementById(canvasid);
    
    canvas.width = $(window).width();
    canvas.height = $(window).outerHeight();
    
    context = canvas.getContext("2d");
    
    height = canvas.height;
    width = canvas.width;
    
    xAxis = Math.floor(height/2);
    yAxis = 0;
    
    draw();
}

function draw() {
    
    // キャンバスの描画をクリア
    context.clearRect(0, 0, width, height);

    //波を描画
    drawWave('#10c2cd', 1, 3, 0);
    
    // Update the time and draw again
    draw.seconds = draw.seconds + .009;
    draw.t = draw.seconds*Math.PI;
    repeat = setTimeout(draw, 35);
};
draw.seconds = 0;
draw.t = 0;

function drawWave(color, alpha, zoom, delay) {
    context.fillStyle = color;
    context.globalAlpha = alpha;

    context.beginPath(); //パスの開始
    drawSine(draw.t / 0.5, zoom, delay);
    context.lineTo(width + 10, height); //パスをCanvasの右下へ
    context.lineTo(0, height); //パスをCanvasの左下へ
    context.closePath() //パスを閉じる
    context.fill(); //塗りつぶす
}

function drawSine(t, zoom, delay) {

    var x = t; //時間を横の位置とする
    var y = 4 * Math.sin(x)/zoom + 2 * Math.sin(x * Math.PI)/zoom;
    context.moveTo(yAxis, unit*y+xAxis); //スタート位置にパスを置く
    
    // Loop to draw segments (横幅の分、波を描画)
    for (i = yAxis; i <= width + 10; i += 10) {
        x = t+(-yAxis+i)/unit/zoom;
        y = 3 * Math.sin(x - delay)/3 * Math.sin(x * Math.PI)/zoom;
        context.lineTo(i, unit*y+xAxis);
    }
}
	for (var i = 0; i < canvasArray.length; i++) {
		init(canvasArray[i]);
	}
;

// resize function
$(window).on('resize', function(){
	for (var i = 0; i < canvasArray.length; i++) {
		init(canvasArray[i]);
	}
});
   
});