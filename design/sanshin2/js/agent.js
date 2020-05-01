$(function(){
	
	var agent = window.navigator.userAgent.toLowerCase();
	var version = window.navigator.appVersion.toLowerCase();

	var result = 'none';
	if(agent.indexOf("msie") > -1){
		if (version.indexOf("msie 6.") > -1){
			result = 'IE6';
		}else if (version.indexOf("msie 7.") > -1){
			result = 'IE7';
		}else if (version.indexOf("msie 8.") > -1){
			result = 'IE8';
		}else if (version.indexOf("msie 9.") > -1){
			result = 'IE9';
		}else if (version.indexOf("msie 10.") > -1){
			result = 'IE10';
		}else{
			result = 'IE(バージョン不明)';
		}
	}else if(agent.indexOf("trident/7") > -1){
		result = 'IE11';
	}else if(agent.indexOf("edge") > -1){
		result = 'Edge';
	}else if (agent.indexOf("chrome") > -1){
		result = 'Chrome';
	}else if (agent.indexOf("safari") > -1){
		result = 'Safari';
	}else if (agent.indexOf("opera") > -1){
		result = 'Opera';
	}else if (agent.indexOf("firefox") > -1){
		result = 'Firefox';
	}

	if(result=='Safari'){
		$('header > nav > ul > li > a').each(function(i,e){
			$(this).addClass('safari');
		});
	}
	
})