<?php
	// 直接のアクセス時リダイレクト処理

	$server = $_SERVER;
	$selecter = 0;
	$url = 'https://riding.co.jp';
	$local = 'http://localhost/Englearn/HT/Riding/';

	var_dump($server['SERVER_NAME']);
	if($server['SERVER_NAME'] == 'localhost') {
		$selecter = 1;
	}


	switch ($selecter) {
		case 1:		
			header('Location: ' . $local);
			break;
		default:
			header('Location: ' . $url);
			break;
	}

// 　 exit();

