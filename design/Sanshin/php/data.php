<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-type: text/html; charset=utf-8");

	$arr = [
		[
			'date'		=> '2020/04/01',
			'url'		=> './',
			'content'	=> '三伸工業株式会社 コーポレートサイト運用開始',
		],
		[
			'date'		=> '1965/03/13',
			'url'		=> '',
			'content'	=> '三伸工業株式会社　設立',
		],
	];



	echo json_encode($arr);