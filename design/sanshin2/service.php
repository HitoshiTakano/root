<?php
	$page = '事業内容';
	$title = $page . ' | 三伸工業株式会社';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php include_once 'html/meta.html'; ?>
	<title><?php echo $title; ?></title>
	<?php include_once 'html/file.html'; ?>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript">
	$(function(){
		var slider = ".main_slides";
		var thumbnailItem = ".thumbnail_wrapper .thumb_item";

		$(thumbnailItem).each(function(){
			var index = $(thumbnailItem).index(this);
			$(this).attr("data-index",index);
		});

		$(slider).on('init',function(slick){
			var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
			$(thumbnailItem+'[data-index="'+index+'"]').addClass("active");
		});

		//slickスライダー初期化  
		$(slider).slick({
			autoplay: false,
			// arrows: false,
			fade: true,
			infinite: false,
		});
		$(thumbnailItem).on('click',function(){
			var index = $(this).attr("data-index");
			$(slider).slick("slickGoTo",index,false);
		});
		$(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
			$(thumbnailItem).each(function(){
				$(this).removeClass("active");
			});
			$(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("active");
		});
	});
	</script>
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/sub.css">
</head>
<body>
	<?php include_once 'html/header.html' ?>

	<?php include_once 'html/service.html' ?>	

	<?php include_once 'html/footer.html' ?>
</body>
</html>