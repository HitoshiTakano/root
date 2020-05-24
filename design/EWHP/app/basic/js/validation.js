// form validation js


var validation = {
	const:{
		'ERROR_NONE':0
		,'ERROR_NAME_EMPTY':1
		,'ERROR_NAME_OVER':2
		,'ERROR_NAME_STR':3
		
		,'ERROR_MAIL_EMPTY':4
		,'ERROR_MAIL_OVER':5
		,'ERROR_MAIL_STR':6
		
		,'ERROR_TEL_EMPTY':7
		,'ERROR_TEL_OVER':8
		,'ERROR_TEL_STR':9
		
		,'ERROR_ADDRESS_EMPTY':7
		,'ERROR_ADDRESS_OVER':8
		,'ERROR_ADDRESS_STR':9
		
		,'ERROR_BIRTH_EMPTY':7
		,'ERROR_BIRTH_OVER':8
		,'ERROR_BIRTH_STR':9
		
		,'ERROR_VISIT_EMPTY':7
		,'ERROR_VISIT_OVER':8
		,'ERROR_VISIT_STR':9
		
	}
	,addEvent:function(){
		$("input:text, tel, mail, textarea").blur(function(){
			if( $(this) == '#inputMail'){
				validation.checkMail($(this));
			}
			if( $(this) == '#inputTel' || $(this) == '#inputBirth'){
				validation.checkNum($(this));
			}
			if( $(this) == '#inputAddress'){
				validation.checkNumEng($(this));
			}
			if( $(this) == '#inputName'){
				validation.checkEng($(this));
			}
		});
	}
	
		,chk_mailstr:function(val){
		if(!val.match(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)){
		
		}
		
	}
	,checkNum:function(){
	}
	,checkEng:function(){
	}
	,checkNumEng:function(){
	}
	
	,zenhan:function(id){
 		var str = id.val();
       str = str.replace( /[Ａ-Ｚａ-ｚ０-９＠]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) - 65248);
        });
		id.val(str);
		
	}
	
}