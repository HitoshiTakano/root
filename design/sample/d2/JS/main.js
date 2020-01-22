$(function(){
	$('.contents').each(function(i, elem){

        var contentsPOS = $(elem).offset().top;

        $(window).on('load scroll resize', function(){
            var winHeight = $(window).height();
            var scrollTop = $(window).scrollTop();
            var showClass = 'show';
            var timing = 500; // 500pxコンテンツが見えたら次のif文がtrue

            if (scrollTop >= contentsPOS - winHeight + timing){
              $(elem).addClass(showClass);
            } else {
              $(elem).removeClass(showClass);
            }

        });
    });

    var flg = 1;

    $('.menu_icon').on('click', function() {
        if(!$('nav').hasClass('open')){
            $('nav').addClass('open');
            $('.menu_icon').css({
                'top': '57vh', 
                'transform': 'rotateZ(540deg) translateX(50%)'
            });
            flg = 0;
        }else{
            $('nav').removeClass('open');
            $('.menu_icon').css({
                'top': '8vh', 
                'transform': 'rotateZ(0deg) translateX(-50%)'
            });
            flg = 1;
        }
    });	
});
