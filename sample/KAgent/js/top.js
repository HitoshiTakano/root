$(function(){
	$('.slick-slider').slick({
		
			infinite: true, //スライドをループさせるか
			arrows: true, //前後ボタンの表示
			dots: true, //点の表示
			slidesToShow: 1,
			fade:true,
			lazyLoad: 'ondemand',
			variableWidth: false,
			autoplaySpeed:3000,
			centerMode: true, //要素を中央寄せ
			centerPadding:'0', //両サイドの見えている部分のサイズ
			autoplay:true, //自動再生

	});
});