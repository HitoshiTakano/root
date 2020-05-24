//validate

$(document).ready(function(){

	inputValidate.init();

});

var inputValidate = {
	init:function(){
		var val = $("#inputTel").val();
		mailCheck();
		numCheck(val);
		
	}
	,addEvent:function(){
		
		$("input:text,textarea,tel").on('blur',function(){
			Main.changeZenHan($(this).attr('id'));
			Main.chkErrorList($(this).attr('name'));
			Main.activate_chklist();			//遒ｺ隱咲判髱｢繧｢繧ｯ繝�ぅ繝吶�繝医メ繧ｧ繝�け
		});
		
	}
	,mailCheck:function(){
		var msg ="";
		
		if (!($("#inputMail").val().match(/^[a-zA-Z0-9]+[a-zA-Z0-9\._-]*@[a-zA-Z0-9]+[a-zA-Z0-9_-]*\.[a-zA-Z0-9\._-]*[a-zA-Z]+$/))){
			//ERROR NOT MAIL ADDRESS
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力が正しくありません";
			
		}else if($("#inputMail").val().length>254){
			//ERROR ADDRESS CHORD LONG
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力は254文字以内にしてください";
			
		}else if($("#inputMail").val()==''){
			//ERROR NULL MAILADDRESS
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力は必須です";
			
		}else{
			//Correct Mailaddress 
			("#mailError").removeClass("error");
			("#mailError").addClass("hidden");
			msg ="";
		}
		("#mailError").innerText = msg;
		
	}
	,numCheck:function(val){
		var msg ="";
		
		if (!val.match(/^[a-zA-Z0-9]+[a-zA-Z0-9\._-]*@[a-zA-Z0-9]+[a-zA-Z0-9_-]*\.[a-zA-Z0-9\._-]*[a-zA-Z]+$/))){
			//ERROR NOT MAIL ADDRESS
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力が正しくありません";
			
		}else if($("#inputMail").val().length>254){
			//ERROR ADDRESS CHORD LONG
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力は254文字以内にしてください";
			
		}else if($("#inputMail").val()==''){
			//ERROR NULL MAILADDRESS
			("#mailError").addClass("error");
			("#mailError").removeClass("hidden");
			msg = "メールアドレスの入力は必須です";
			
		}else{
			//Correct Mailaddress 
			("#mailError").removeClass("error");
			("#mailError").addClass("hidden");
			msg ="";
		}
		("#mailError").innerText = msg;
	}
	,changeZenHan:function(this_id){
		switch(this_id){
			//zenkaku
			case "name1" :
			case "name2" :
			case "kana1" :
			case "kana2" :
				$("#"+this_id).val(strform.chgHankaku($("#"+this_id).val(), 2));
				break;

			//hankaku
			case "mail" :
			case "tel1" :
			case "tel2" :
			case "tel3" :
			case "zip" :
			case "own_mile":
				$("#"+this_id).val(strform.chgHankaku($("#"+this_id).val(), 1));
				if(this_id=="own_mile" && Number($("#"+this_id).val()) != "0"){
					$("#"+this_id).val(Number($("#"+this_id).val()));
				}
				break;
	}
}