// JavaScript Document

$(document).ready(function(){
	console.log("test");
	
	var trail = document.referrer;
	var mainAdress = 'http://excitingworks.jp/app/basic/';
	console.log("test");
	var fat = mainAddress+"list1.html";
	var sugar = mainAddress+"list3.html";
	var liver = mainAddress+"list2.html";
	var kidney = mainAddress+"list4.html";
	
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
	
	switch( trail ){
		case fat:
			$('#list').html("");
			$('#list').html("脂質代謝");
			break;
		
		case sugar:
			$('#list').html("");
			$('#list').html("等代謝");
			break;
		
		case liver:
			$('#list').html("");
			$('#list').html("肝機能");
			break;
		
		case kidney:
			$('#list').html("");
			$('#list').html("腎機能");
			break;
			
		default:break;
		
	}





});
