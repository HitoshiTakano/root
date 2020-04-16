<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'html/meta.html'; ?>
	<title></title>
	<?php include_once 'html/file.html'; ?>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.slide_wrapper').slick({
				autoplay:true,
				autoplaySpeed:5000,
				speed:700,
				dots: true,
			});
		});
	</script>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
</head>
<body>
	<?php include_once 'html/header.html' ?>

	<?php include_once 'html/top.html' ?>

	<?php include_once 'html/footer.html' ?>
</body>
</html>