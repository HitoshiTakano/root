<?php
	$page = '施行事例';
	$title = $page . '｜三伸工業株式会社';
?>
<!DOCTYPE html>
<html>
<head lang="ja">
	<?php include_once dirname(__FILE__) . '/html/meta.html'; ?>
	<title><?= $title ?></title>
	<?php include_once dirname(__FILE__) . '/html/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/example.css">
</head>
<body>
	<!-- HEADER -->
	<?php include_once dirname(__FILE__) . '/html/header.html'; ?>
	<!-- MAIN -->
	<main id="main">
		<?php include_once dirname(__FILE__) . '/html/common.html'; ?>
		
		<?php include_once dirname(__FILE__) . '/html/example.html'; ?>
		
	</main>
	<!-- FOOTER -->
	<?php include_once dirname(__FILE__) . '/html/footer.html'; ?>
	<?php include_once dirname(__FILE__) . '/html/jquery.html'; ?>
	<script type="text/javascript" src="js/example.js"></script>
</body>
</html>