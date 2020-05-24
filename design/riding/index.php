<?php
	session_start();
	$file = 'index';
	$title = '';
	$page = '株式会社Riding';
	if(empty($_SESSION["ACCESS"]) && isset($_SERVER['HTTP_REFERER'])  && $_SERVER['SERVER_NAME']=='riding.co.jp'){
		$_SESSION["ACCESS"] = $_SERVER['HTTP_REFERER'];	
	}
	var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once './html/common/meta.html'; ?>
	<title><?php echo $page; ?></title>
	<?php include_once './html/common/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/top.css?2020041011">
</head>
<body>
	<?php include_once './html/common/header.html'; ?>
	<?php include_once './html/index.html'; ?>
	<?php include_once './html/common/footer.html'; ?>
</body>
</html>