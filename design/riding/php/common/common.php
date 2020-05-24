<?php

class commonClass{
	function __construct(){
		session_start();
	    ini_set('display_errors', 1);
	   	error_reporting(E_ALL);
	   	$expires = 86400;	// キャッシュ時間 60*60*24 ->  1 day
	   	header('Cache-Control: no-store, no-cache, must-revalidate');
	   	header('Cache-Control: post-check=0, pre-check=0', FALSE);
	   	header('Pragma: no-cache');
	   	header('Expires: ' . gmdate('D, d M Y H:i:s T', time() + $expires));
	   	header('Last-Modified: '. gmdate('D, d M Y H:i:s T', time() + $expires) .' GMT');
		//エラーログをon
		ini_set('log_errors', 'On');
		//エラーログの記録先を指定
		ini_set('error_log', '../log/error.log');
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
	}
	//リファラチェック
	public function referChk($target_url){
		$refer = $_SERVER["HTTP_REFERER"];
		$url = parse_url($refer);
		$host = $url['host'];
		return ($target_url==$host) ? true : false;
	}
	//TOKEN 生成
	public function genToken(){
		$str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ';
		$csrf_token = substr(str_shuffle($str), 0, 15);
		$_SESSION['TOKEN'] = '';
		$_SESSION['TOKEN'] = $csrf_token;
		return $csrf_token;
	}
	//TOKEN 除去
	public function delToken(){
		$_SESSION['TOKEN'] = '';
		$csrf_token = '';
		return $csrf_token;
	}
	//GET TOKEN 
	public function chkToken($token){
		if(!isset($_SESSION['TOKEN'])) return false;
		if($token==null) return false;
		if($_SESSION['TOKEN']==$token) return true;
		return false;
	}
	//bot 判定
	public function is_bot() {
	    // ボットのUAに含まれる文字列
	    $bots = array(
	        "googlebot",
	        "bingbot",
	        "yahoo", 
	    );
	    // UAがボットに一致するかどうか
	    $ua = $_SERVER['HTTP_USER_AGENT'];
	    foreach( $bots as $bot ) {
	        if (stripos( $ua, $bot ) !== false) return true;
	    }
	    return false;
	}
	//htmlspecialchars
	public function h($str){
		return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}
	//ERROR MAIL
	public function errorMail($message,$mail){
		$now = date('Y/m/d H:i:s');
		$ip = $_SERVER['REMOTE_ADDR'];
		error_log('[ TIME:' . $now . ', IP:'. $ip . ' ] '. $message . ";\n", 1, $mail);	//1:メール　で出力
	}
	//SJIS 変換処理
	public function sjisReplace($arr,$encode){
		foreach($arr as $key => $val){
			$key = str_replace('＼','ー',$key);
			$resArray[$key] = $val;
		}
		return $resArray;
	}
	// Error Log
	public function errorLog($text){
		$dir = dirname(__FILE__);
		$date = date('Ymd', time());
		$time = date('Y-m-d H:i:s', time());
		$fileName = $date .'.log';
		$path = ($_SERVER['HTTP_HOST']=='localhost') ? $dir . '\log\\'. $fileName : $dir . '/../log/' . $fileName;
		error_log("$time {$text}\r\n", 3, $path);
	}
	public function sendMail($to, $cc, $bcc, $from, $subject, $message){
		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		$firstAccess = (isset($_SESSION['ACCESS'])) ? $_SESSION['ACCESS'] : '';
		$body = "ホームページから問い合わせ\r\n";
		$body .= $message;
		$message = $body;
		$message.="\r\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\r\n";
		$message.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\r\n";
		$message.="送信者のIPアドレス：".@$_SERVER["REMOTE_ADDR"]."\r\n";
		$message.="送信者のホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\r\n";
		$message.="問い合わせのページURL：".@$_SERVER['HTTP_REFERER']."\r\n";
		$message.="問い合わせデバイス：".@$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message.="訪問先URL：".$firstAccess."\r\n";
		
		$header="From: " . $from;
		$header.="\n";
		$header.="Cc: " . $cc;
		$header.="\n";
		$header.="Bcc: " . $bcc;
		return mb_send_mail($to, $subject, $message, $header); 	
	}
}

?>