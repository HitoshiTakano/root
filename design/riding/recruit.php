<?php
	$file = 'recruit';
	$title = '採用情報 | RECRUIT';
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
	<link rel="stylesheet" type="text/css" href="css/sub.css">
</head>
<body>
	<?php include_once './html/common/sub_header.html'; ?>
	<?php include_once './html/recruit.html'; ?>
	<?php include_once './html/common/sub_footer.html'; ?>
</body>
</html>