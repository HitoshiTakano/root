<?php
	$file = 'contact';
	$title = 'お問い合わせ | RECRUIT';
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
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	<?php include_once './html/common/header.html'; ?>
	<?php include_once './html/contact.html'; ?>
	<?php include_once './html/common/footer.html'; ?>
</body>
</html>