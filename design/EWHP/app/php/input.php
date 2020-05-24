<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php 

//スパム防止のためのリファラチェック（フォームページが同一ドメインであるかどうかのチェック）(する=1, しない=0)
$Referer_check = 1;

//リファラチェックを「する」場合のドメイン ※以下例を参考に設置するサイトのドメインを指定して下さい。
$Referer_check_domain = "excitingworks.jp";
//----------------------------------------------------------------------
//  関数実行、変数初期化
//----------------------------------------------------------------------
$encode = "UTF-8";//このファイルの文字コード定義（変更不可）
session_start();

$dispMode ="0";
$post = $_POST;
$cookie = $_COOKIE;
$_SESSION['session'] = 'EW100token';
$_SESSION['cookie'] = $cookie;
$tokenId = $_SESSION;


if(!preg_match('/^([1-4]{1})$/', $post['list'])) {
	errorMsg();
	return false;
}

var_dump($cookie);
 //if(isset($cookie)) $cookie = sanitize($cookie);//NULLバイト除去//
//var_dump($cookie);
 if($encode == 'SJIS'){ $_POST = sjisReplace($_POST,$encode);}//Shift-JISの場合に誤変換文字の置換実行
 $funcRefererCheck = refererCheck($Referer_check,$Referer_check_domain);//リファラチェック実行
 
//申し込み項目判別用変数
if((isset($_POST['list']) && ($dispMode =="0"))){
	$list = $_POST['list'];
	switch ( $list ){
		case "1":
		 $title = "脂質代謝";
		 $dispMode ="1";
		  break;
		case "2": 
		 $title = "肝機能"; 
		 $dispMode ="1";
		break;
		case "3":
		 $title = "糖代謝";
		 $dispMode ="1";
	 	break;
		case "4":
		 $title = "腎機能";
		 $dispMode ="1";
		break;
		default: 
		$title = "ERROR";
		$dispMode ="0"; break;
	}
}
if($dispMode =="1" && (preg_match('/^([1-4]{1})$/', $list))){
	?>
<!DOCTYPE html>
<html lang="ja">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($title, ENT_QUOTES) . 'お申し込み' ?></title>

<link rel="stylesheet" href="../basic/css/style.css" />
<link rel="stylesheet" href="../basic/css/inquiry.css" />


<script type="text/javascript" src="../basic/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"></script>
</head>

<body>

<header>
<div class="headWrap">
<h1><?php echo htmlspecialchars($funcRefererCheck, ENT_QUOTES) . htmlspecialchars($title, ENT_QUOTES) . '検査へのお申し込み' ?></h1>
</div>
</header>

<div class="wrapper">
<div class="wrap">

<h2>お客様情報入力</h2>
<div id="inquiry">
<form action="<?php echo ($_SERVER['SCRIPT_NAME']); ?>" method="post" autocomplete="off">

<div id="name"><label for="inputName">氏名<span class="small">required</span></label><br>
<input id="inputName" name="inputName" type="text" placeholder="NAME(ex. YAMADA TARO) 最大20文字" maxlength="20" required/>
<p class="error hidden">氏名が正しく入力されていません</p></div>

<div id="birth"><label for="inputBirth">生年月日<span class="small">required</span></label><br>
<input id="inputBirth" name="inputBirth" type="text" placeholder="BIRTHDAY(ex. 19890101) 最大8文字" maxlength="8" required/>
<p class="error hidden">生年月日が正しく入力されていません</p></div>

<div id="address"><label for="inputAddress">住所<span class="small">required</span></label><br>
<input id="inputAddress" name="inputAddress" type="text" placeholder="ADDRESS 最大200文字" maxlength="200" required/>
<p class="error hidden">住所が正しく入力されていません</p></div>

<div id="tel"><label for="inputTel">電話番号<span class="small">required</span></label><br>
<input id="inputTel" name="inputTel" type="tel" placeholder="TELPHONE NUMBER(ex. 01234567890) 最大13文字" maxlength="13" required/>
<p class="error hidden">電話番号が正しく入力されていません</p></div>

<div id="mail"><label for="inputMail">メールアドレス<span class="small">required</span></label><br>
<input id="inputMail" name="inputMail" type="mail" placeholder="MAIL ADDRESS(ex. sample@mail.com) 最大200文字" maxlength="200" required/>
<p class="error hidden">メールアドレスが正しく入力されていません</p></div>

<div id="consent">
 <p>各項目を入力後</p>
 <p><a href="javascript:void(0);" style="color:#C33;" >同意書に関する注意事項</a>をお読みの上、</p>
 <p>下記チェックボックスをチェックした後、</p>
 <p>「支払方法へ」へおすすみください。</p>
</div>

<div id="checkBtn" class="center">
<input type="checkbox" name="check" value="Yes" id="lp" />
<label for="lp" class="check_css">同意する</label>

</div>

<div class="center">
<p style="color:#F00; text-align:center">↓↓システム開発中（選択不可）↓↓</p>
</div>
<div class="center">
<button id="submit" name="submit" type="submit" disabled/><label>支払方法へ</label></button>
</div>
<div class="center">
<p style="color:#F00; text-align:center">↑↑システム開発中（選択不可）↑↑</p>
</div>


</form>
</div>

<div>
<a href="../basic/confirm.html" style="font-size:20px;">送信後へ</a>
<br><br><br>
</div>

</div>
</div>


</body>
</html>
<?php 
}else if($dispMode == '0'){ 
	errorMsg();
	return false;
}

?>

<?php


/*-----------
*
*	関数定義
*
------------*/
//SJIS => UTF-8
function sjisReplace($arr,$encode){
	foreach($arr as $key => $val){
		$key = str_replace('＼','ー',$key);
		$resArray[$key] = $val;
	}
	return $resArray;
}

//mail address check
function checkMail($str){
	$mailaddress_array = explode('@',$str);
	if(preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-z]+(\.[!#%&\-_0-9a-z]+)+$/", "$str") && count($mailaddress_array) ==2){
		return true;
	}else{
		return false;
	}
}
//リファラチェック
function refererCheck($Referer_check,$Referer_check_domain){
	if($Referer_check == 1 && !empty($Referer_check_domain)){
		if(strpos($_SERVER['HTTP_REFERER'],$Referer_check_domain) === false){
			return exit('<p align="center">リファラチェックエラー。フォームページのドメインとこのファイルのドメインが一致しません</p>');
		}
	}
}
//XSS保険
function is_xss($xss) {
  if (preg_match('/[&<>"\'~|%#$*]/', $xss)) {
    return true;
  } else {
    return false;
  }
}

//エラーメッセージ
function errorMsg(){
	return exit('

<!DOCTYPE html>
<html lang="ja">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<head>
<meta charset="UTF-8">
<title>エラーページ</title>

<link rel="stylesheet" href="../basic/css/style.css" />
<link rel="stylesheet" href="../basic/css/inquiry.css" />


<script type="text/javascript" src="../basic/js/jquery-3.3.1.min.js"></script>
</head>

<body>
<div class="wrapper">
<div class="wrap">
<p align="center">入力内容に誤りがございました。</p>
<p>再度、<a href="/app/" style="color:#C00">トップページ</a>からアクセスしてください。</p>
</div>
</div>

</body>
</html>

');
}


?>


