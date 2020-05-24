
$(document).ready(function(){
	var randNum1 = Math.floor( Math.random() * 9001 + 1000) ;
	var randNum2 = Math.floor( Math.random() * 9001 + 1000) ;
	var randNum3 = Math.floor( Math.random() * 9001 + 1000) ;
	
	var qrnum = randNum1 + "-" + randNum2 + "-" + randNum3;
	console.log(qrnum);
	
	$('#personalNumber').html("");
	$('#personalNumber').html(qrnum);
	
	$('#person').html("");
	$('#person').html(String(randNum1) + String(randNum2) + String(randNum3));
	
	$('#qrcode').qrcode(location.href + "/" + qrnum );
	//jquery('#qrcode').qrcode({width: 256, height: 256, text: "information"});

});