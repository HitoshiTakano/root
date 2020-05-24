//title
$(document).ready(function(){
	
	var trail = document.referrer;
	var url = 'http://excitingworks.jp/app/basic/';
	
	var fat = url + "list1.html";
	var sugar = url + "list3.html";
	var liver = url + "list2.html";
	var kidney = url + "list4.html";

	switch( trail ){
		case fat:
			$('#list').html("");
			$('#list').html("脂質代謝");
			break;
		
		case sugar:
			$('#list').html("");
			$('#list').html("糖代謝");
			break;
		
		case liver:
			$('#list').html("");
			$('#list').html("肝機能");
			break;
		
		case kidney:
			$('#list').html("");
			$('#list').html("腎機能");
			break;
			
		default:
			$('#list').html("");
			$('#list').html("エラー");
		break;	
	}
	
	
	if(preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', mailaddress)){
		
		
		}else{
	}
	
});


