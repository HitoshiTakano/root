<?php
	require_once './php/common/common.php';
	require_once './php/common/validate.php';

	$comm = new commonClass();
	$vali = new validate();

// INITIAL SETTINGS
	$file = 'contact';
	$title = 'お問い合わせ | CONTACT';
	$page = '株式会社Riding';
	$top_page = 'https://riding.co.jp/';
	
// SET POST DATA
	$mode = 0;		//0:input, 1:reinput, 2:verify, 3:finish
	$post = $_POST;
	$token = '';
// Mail Setting
	$subject = 'ホームページからの問い合わせ';
	$message = '';
	$to = 'develop@riding.co.jp';
	$cc = 'develop@riding.co.jp';
	$bcc = 'security@excitingworks.jp';
	$from = 'contact@riding.co.jp';
// INPUT DATA
	$inputArr = ['company', 'name', 'mail', 'tel', 'subject', 'contents'];
	$inputArray = ['company' => '会社名', 'name' => '氏名', 'mail' => 'メールアドレス', 'tel' => '電話番号', 'subject' => '件名', 'contents' => 'お問い合わせ内容'];
	$errorMessage = '';

//  ROUTE CONTROL
	if(isset($post['verify'])) $mode=2;
	elseif (isset($post['send'])) $mode=3;
	elseif (isset($post['reinput'])) $mode=1;
	else $mode = 0;

// ROUTE VALIDATION
	if($mode==0){
		if($mode==1) $_POST=[];
		$token = $comm->genToken();
	}else{
		if(isset($post['token'])){
			$token = $post['token'];
			if(!$comm->chkToken($token)){
				$token = $comm->genToken();
				$mode = 0;
			}
			if(!validation($post)){
				$errorMessage='メール・電話番号に入力形式に誤りがあります。ご確認ください。';
				$mode = 1;
			}
			if($mode==3){
				var_dump('test');
				$message = shapeMessage();
				// exit();
				if(!$comm->sendMail($to, $cc, $bcc, $from, $subject, $message)){
					$mode = 4;
				}
				$comm->delToken();
			}
		}else{
			$token = $comm->genToken();
			$mode = 0;
		}
	}

	function shapeMessage(){
		global $comm, $post, $inputArray;
		$body = "+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+" . "\r\n\r\n";
		foreach ($inputArray as $k => $v) {
			$data = h($post[$k]);
			$body .= $v . "：\r\n" . $data . "\r\n";
		}
		$body .= "\r\n\r\n" . "+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+" . "\r\n";
		return $body;
	}

// VALIDATION
	function validation($post){
		global $comm, $vali, $inputArr;
		foreach ($post as $k => $v) {
			if (array_key_exists($k, $inputArr)) {
				switch ($k) {
					case 'tel':
						if(!$vali->chkNumber($v)) return false;
						break;
					case 'mail':
						if(!$vali->chkMail($v)) return false;
						break;
					default:
						break;
				}
			}
		}
		return true;
	}
// ESCAPE METHOD
	function h($text){
		global $comm;
		return $comm -> h($text);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once './html/common/meta.html'; ?>
	<title><?php echo $title . ' - ' . $page; ?></title>
	<?php include_once './html/common/file.html'; ?>
	<script type="text/javascript">
		$(function(){
			$('header').addClass('sub');
		});
	</script>
	<?php if($mode==1 || $mode==0){ ?>
	<script type="text/javascript" src="js/validate.js"></script>
	<?php } ?>
	
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<?php include_once './html/common/sub_header.html'; ?>
	<?php 
		if($mode===1 || $mode===0) include_once './php/input.php';
		elseif ($mode===2) include_once './php/verify.php';
		elseif ($mode===3) include_once './php/finish.php';
		else include_once './php/error.php';
	?>
	<?php include_once './html/common/sub_footer.html'; ?>
</body>
</html>