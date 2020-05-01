$(function(){
	validation.init();
})
var validation = {
	inputData:{},		//{ name(string) : {title:string, val:string, req:boolean, type:string, error:boolean} }
	notValiArr:[
		'mode',			//確認画面遷移確認用
		'submit', 		//送信ボタン
		'verify',
		'token',		//二重送信防止用
	],
	errorTempMessage:{
		null:'は入力必須です',
		format:'の形式が異なります',
		symbol:'に使用不可な半角記号が含まれます',
	},
	errorMessage:{},
	init:function(){
		this.initSet();
		this.addEvent();
		this.initInputCheckEvent();
	},
	addEvent:function(){
		this.blurEvent();
		this.clickSubmit();
	},
	blurEvent:function(){
		$('input, textarea').on('blur', function(){
			if(!validation.allCheckEvent($(this))){
				validation.outputErrorMessage($(this));
				return false;
			}
			validation.outputErrorMessage($(this));
			validation.activateSubmit();
		});
	},
	outputErrorMessage:function(_this){
		var name = _this.attr('name');
		$('.'+name+'_div .err_msg').text(validation.errorMessage[name]);
	},
	initInputCheckEvent:function(){
		var cnt = 0;
		var mode = $('input[name="mode"]').val();
		$('input, textarea').each(function(i,e){
			var name = $(this).attr('name');
			if(validation.notValiArr.indexOf(name)==-1){
				if(!validation.allCheckEvent($(this))) cnt++;
				if(mode==1) validation.outputErrorMessage($(this));
			}
		});
		if(cnt>0) return false;
		validation.activateSubmit();
		return true;
	},
	allCheckEvent:function(_this){
		var name = _this.attr('name');
		var val = _this.val();
		if(validation.notValiArr.indexOf(name)==-1){
			validation.inputData[name].val = val;
		}else{
			return false;
		}

		if(validation.inputData[name].req){
			if(!validation.nullCheck(name, val)) return false;
		}
		if(val!=''){
			switch(name){	
				case 'tel':
					if(!validation.telCheck(val)) return false;
					break;
				case 'mail':
					if(!validation.mailCheck(val)) return false;
					break;
				default:
					if(!validation.symbolCheck(name, val)) return false;
					break;
			}
		}
		return true;
	},
	initSet:function(){
		$('input, textarea').each(function(i,e){
			var name = $(this).attr('name');
			var type = $(this).attr('type');
			var req = $(this).prop('required');
			var val = $(this).val();
			var title = $('.'+ name + '_div p:first-child').text();
			var error = (name=='company') ? true : false;
			if(type==undefined) type = 'text';
			if(validation.notValiArr.indexOf(name)==-1){
				var arr = {
					title:title,
					type:type,
					val:val,
					req:req,
					error:error,
				}
				validation.inputData[name] = arr;
				validation.errorMessage[name] = '';
			}
		});
	},
	nullCheck:function(name, val){
		this.resetMessage(name);
		if(val=='' || val==undefined || val==null){
			validation.errorMessage[name] = validation.inputData[name].title + validation.errorTempMessage.null;
			return false;
		}
		return true;
	},
	symbolCheck:function(name, val){
		let reg = new RegExp(/["#$%&'()\*\+,;<=>\[\\\]^`{|}~]/g);
		validation.inputData[name].error = false;
		this.resetMessage(name);
		if(reg.test(val)) {	
			validation.errorMessage[name] = validation.inputData[name].title + validation.errorTempMessage.symbol;
			return false;
		}
		validation.inputData[name].error = true;
		return true;
	},
	telCheck:function(val){
		this.resetMessage('tel');
		validation.inputData.tel.error = false;
		if( !val.match(/^0\d{9,10}$/) ){
			validation.errorMessage.tel = validation.inputData.tel.title + validation.errorTempMessage.format;
			return false;
		}
		validation.inputData.tel.error = true;
		return true;
	},
	mailCheck:function(val){
		let mail_regex1 = new RegExp( '(?:[-!#-\'*+/-9=?A-Z^-~]+\.?(?:\.[-!#-\'*+/-9=?A-Z^-~]+)*|"(?:[!#-\[\]-~]|\\\\[\x09 -~])*")@[-!#-\'*+/-9=?A-Z^-~]+(?:\.[-!#-\'*+/-9=?A-Z^-~]+)*' );
		let mail_regex2 = new RegExp( '^[^\@]+\@[^\@]+$' );
		validation.errorMessage.mail = '';
		validation.inputData.mail.error = false;
		if( val.match( mail_regex1 ) && val.match( mail_regex2 ) ) {
			// 全角チェック
			if( val.match( /[^a-zA-Z0-9\!\"\#\$\%\&\'\(\)\=\~\|\-\^\\\@\[\;\:\]\,\.\/\\\<\>\?\_\`\{\+\*\} ]/ ) ) {
				validation.errorMessage.mail = 'メールアドレスに半角以外の文字が含まれております。';
				return false;
			}
			// 末尾TLDチェック（〜.co,jpなどの末尾ミスチェック用）
			if( !val.match( /\.[a-z]+$/ ) ) {
				validation.errorMessage.mail = 'メールアドレスのドメイン部分に不正な部分があります。';
				return false;
			}
			// 不正記号チェック（-「ハイフン」 .「ドット」  _「アンダーバー」のみ許可）
			if( val.match( /[\!\"\#\$\%\&\'\(\)\=\~\|\^\\\[\;\:\]\,\/\\\<\>\?\`\{\+\*\} ]/ ) ) {
				validation.errorMessage.mail = 'メールアドレスには半角英数字、記号は_（アンダーバー）.（ドット）-（ハイフン）@（アットマーク）のみです。';
				return false;
			}
			validation.inputData.mail.error = true;
			return true;
		} else {
			validation.errorMessage.mail = validation.inputData.mail.title + validation.errorTempMessage.format;
			return false;
		}
	},
	resetMessage:function(name){
		validation.errorMessage[name] = '';
	},
	activateSubmit:function(){
		for(var key in validation.inputData) {
			if(validation.inputData.hasOwnProperty(key)) {
				var val = validation.inputData[key];
				var err = val.error;
				if(!err){
					$('input[type="submit"]').attr('disabled',true);
					return false;
				}
			}
		}
		$('input[type="submit"]').attr('disabled',false);
		return true;
	},
	clickSubmit:function(){
		$('input[type="submit"]').on('click', function(){
			if(!validation.initInputCheckEvent()){
				var pos = $('#contact').offset().top;
				$('html,body').animate({scrollTop:pos},700,'swing');
				$(this).attr('disabled',true);
				return false;
			}
		});
	},
}