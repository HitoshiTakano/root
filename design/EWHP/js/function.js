// JavaScript Document

// スクロールを無効にする
/*
$(window).on('touchmove.noScroll', function(e) {
    e.preventDefault();
});
*/

$(document).ready(function(){
  $('#ses').on('click', function(){
	$('#sesInfo').removeClass('hidden');
	$('#sesInfo').addClass(' fadeinAni');
	$('#webskill').addClass('hidden');
	$('#vbaskill').addClass('hidden');
    $('#ses').children('img').attr('src', 'img/menubutton/common/sesbtn_pushed.png');
	$('#web').children('img').attr('src', 'img/menubutton/common/webskillbtn_normal.png');
	$('#vba').children('img').attr('src', 'img/menubutton/common/vbabtn_normal.png');
  });
  $('#web').on('click', function(){
	$('#sesInfo').addClass(' hidden');
	$('#webskill').removeClass(' hidden');
	$('#webskill').addClass('fadeinAni');
	$('#vbaskill').addClass(' hidden');
    $('#web').children('img').attr('src', 'img/menubutton/common/webskillbtn_pushed.png');
	$('#ses').children('img').attr('src', 'img/menubutton/common/sesbtn_normal.png');
	$('#vba').children('img').attr('src', 'img/menubutton/common/vbabtn_normal.png');
  });
  $('#vba').on('click', function(){
	$('#sesInfo').addClass(' hidden');
	$('#webskill').addClass('hidden');
	$('#vbaskill').removeClass('hidden');
	$('#vbaskill').addClass('fadeinAni');
    $('#web').children('img').attr('src', 'img/menubutton/common/webskillbtn_normal.png');
	$('#ses').children('img').attr('src', 'img/menubutton/common/sesbtn_normal.png');
	$('#vba').children('img').attr('src', 'img/menubutton/common/vbabtn_pushed.png');
  });
});
