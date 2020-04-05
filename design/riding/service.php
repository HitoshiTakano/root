<?php
	$file = 'service';
	$title = '事業内容 | SERVICE';
	$page = '株式会社Riding';
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
	<script type="text/javascript" src="js/service.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
</head>
<body>
	<?php include_once './html/common/header.html'; ?>
	<?php include_once './html/service.html'; ?>
	<?php include_once './html/common/footer.html'; ?>
</body>
</html>