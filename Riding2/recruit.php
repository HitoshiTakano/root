<?php
	$now = date('Ymd');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<?php include_once './html/meta.html'; ?>
	<title>株式会社Riding || 採用情報（Recruit）</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/common.css?<?php echo $now ?>">
	<link rel="stylesheet" type="text/css" href="css/sub.css?<?php echo $now ?>">
	<link rel="stylesheet" type="text/css" href="css/recruit.css?<?php echo $now ?>">
	<!-- JS -->
	<script type="text/javascript" src="js/lib/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/common.js?<?php echo $now ?>"></script>
	<script type="text/javascript" src="js/sub.js?<?php echo $now ?>"></script>
</head>
<body>
	<!-- COMMON HEADER -->
	<?php include_once './html/header.html'; ?>

	<!-- MAIN -->
	<main>
		<section class="title">
			<div>
				<h1>採用情報</h1>
				<span>RECRUIT</span>
				<h2>RECRUIT INFOMATION</h2>
				<div class="circle_wrapper">
					<div class="circle"></div>
				</div>
			</div>
		</section>
		<section class="bread">
			<ul>
				<li><a href="https://riding.co.jp">TOP</a></li>
				<li>採用情報(RECRUIT)</li>
			</ul>
		</section>
		<section id="info">
			<div>
				<h2>正社員・契約社員</h2>
				<p>現在、正社員・契約社員の募集は行っておりません。</p>
			</div>
		</section>
		<section id="partner">
			<div>
				<h2>パートナー契約</h2>
				<p><a href="contact">お問い合わせ</a>よりご連絡ください。</p>
			</div>
		</section>
		<section id="free">
			<div>
				<h2>フリーランス契約</h2>
				<p><a href="contact">お問い合わせ</a>よりご連絡ください。</p>
			</div>
		</section>
	</main>
	<!-- COMMON FOOTER -->
	<?php include_once './html/footer.html'; ?>

</body>
</html>