//全角・半角変換
var strform = {
	chgHankaku:function(val,flg){
		val = $.trim(val);
		flg = flg || '1';
		han = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		han += "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝｧｨｩｪｫｬｭｮｯ";
		han += "!\"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~ ";
		zen = "０１２３４５６７８９ＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ";
		zen += "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲンァィゥェォャュョッ";
		zen += "！”＃＄％＆’（）＊＋，－．／：；＜＝＞？＠［￥］＾＿｀｛｜｝～　";

		// change zenkaku
		if(flg == '2'){
			str1 = han;
			str2 = zen;
		}else{
			str1 = zen;
			str2 = han;
		}

		for (i = 0; i < val.length; i++){
			n = str1.indexOf(val.charAt(i),0);
			if (n >= 0){
				val = val.replace(val.charAt(i),str2.charAt(n));
			}
		}
		return val;
	}
}
