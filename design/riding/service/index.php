<?php
	session_start();
	$file = 'service';
	$title = '事業内容 | SERVICE';
	$page = '株式会社Riding';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once '../html/common/meta_sub.html'; ?>
	<title><?php echo $title . ' - ' . $page; ?></title>
	<?php include_once '../html/common/file_sub.html'; ?>
	<script type="text/javascript">
		$(function(){
			$('header').addClass('sub');
		});
	</script>
	<script type="text/javascript" src="../js/service.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/sub.css">
</head>
<body>
	<?php include_once '../html/common/sub_header.html'; ?>
	<?php include_once '../html/service.html'; ?>
	<?php include_once '../html/common/sub_footer.html'; ?>
</body>
</html>