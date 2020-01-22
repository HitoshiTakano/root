<?php
// 現在日時を YYYY/MM/DD hh:mm:ss の書式の文字列で取得する
$now = date('Ymd_His');
// var_dump($now);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>サンプルデザイン</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<header>
		<div>
			<a href="#top">LOGO</a>	
		</div>
		<div>
			<p>
				<span>TEL</span>
				<span>
					<a href="tel:000xxxxxxxx">000-xxxx-xxxx</a>
				</span>
			</p>
			<p>
				<span>営業時間</span>
				<span>9:00～21:00</span>
			</p>
		</div>
	</header>
	<nav>
		<ul>
			<li><a href="#top">TOP</a></li>
			<li><a href="#about">バッカンとは</a></li>
			<li><a href="#plan">料金プラン</a></li>
			<li><a href="#company">会社概要</a></li>
			<li><a href="#contact">お問い合わせ</a></li>
		</ul>
	</nav>
	<main>
		<!-- TOP -->
		<section id="top">
			<img src="img/top.jpg" alt="top">
			<!-- <div class="img_top"></div> -->
			<div class="circlesWrapper">
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
				<div class="circle"></div>
			</div>
			<div class="top">
				<h1>TOPIC</h1>
				<div>
					<p>welcome comment sample</p>
				</div>
			</div>
			<span class="scrollDown"></span>
		</section>
		
		<!-- ABOUT -->
		<section id="about">
			<img src="img/about.jpg">
			<!-- <div class="img_about"></div> -->
			<h2>ABOUT</h2>
			<div class="content right">
				<p>coment sample sample sample sample sample sample sample sample sample sample sample sample sample sample </p>
			</div>
		</section>

		<!-- PLAN -->
		<section id="plan">
			<img src="img/plan.jpg">
			<!-- <div class="img_plan"></div> -->
			<h2>プラン</h2>
			<div class="content center">
				<div class="plansBox">
					<div class="plan">
						<div class="front">
							<h3>プランA</h3>
							<p>料金</p>
							<span>Hover</span>	
						</div>
						<div class="top">
							<p>説明 sample sample sample sample sample sample sample sample sample sample sample sample</p>	
						</div>
					</div>
					<div class="plan">
						<div class="front">
							<h3>プランB</h3>
							<p>料金</p>
							<span>Hover</span>	
						</div>
						<div class="top">
							<p>説明 sample sample sample sample sample sample sample sample sample sample sample sample</p>	
						</div>
					</div>
					<div class="plan">
						<div class="front">
							<h3>プランC</h3>
							<p>料金</p>
							<span>Hover</span>	
						</div>
						<div class="top">
							<p>説明 sample sample sample sample sample sample sample sample sample sample sample sample</p>	
						</div>
					</div>
				</div>
			</div>
		</section>
			
		<!-- COMPANY -->
		<section id="company">
			<img src="img/company.jpg">
			<!-- <div class="img_company"></div> -->
			<h2>会社概要</h2>
			<div class="content left">
				<div class="tbl">
					<div>
						<p>社名</p>
						<p>Sample .inc</p>
					</div>
					<div>
						<p>所在地</p>
						<p class="col">
							<span class="post">xxx-xxxx</span>
							<span>Sample Sample sample x-xx-x</span>
						</p>
					</div>
					<div>
						<p>事業内容</p>
						<p class="col">
							<span>Sample Sample sample</span>
							<span>Sample Sample sample</span>
						</p>
					</div>
					<div>
						<p>電話番号</p>
						<p>xxx-xxx-xxxx</p>
					</div>
					<div>
						<p>FAX</p>
						<p>xxx-xxx-xxxx</p>
					</div>
					<div>
						<p>MAIL</p>
						<p>xxxx@xxxx.xxx</p>
					</div>
					<div>
						<p>設立</p>
						<p>xxxx/xx/xx</p>
					</div>
					<div>
						<p>資本金</p>
						<p>&yen; xx,xxx,xxx</p>
					</div>
				</div>
			</div>
		</section>
		
		<!-- CONTACT -->
		<section id="contact">
			<img src="img/contact.jpg">
			<!-- <div class="img_contact"></div> -->
			<h2>お問い合わせ</h2>
			<div class="content center">
				<p> MAP </p>
				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.745880802547!2d139.75239791496543!3d35.658632080199524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b1ca2b3ffff%3A0xb0f791db77f62a79!2z5qCq5byP5Lya56S-44Kx44O844K444Kn44Oz44OI!5e0!3m2!1sja!2sjp!4v1579036116911!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;max-height: 40vh;margin: 0 auto;margin-top:10px;position: absolute; top: 20px; left: 50%; transform: translateX(-50%);" allowfullscreen=""></iframe>
				<p>coment sample sample sample sample sample sample sample sample sample sample sample sample sample sample </p>
			</div>
		</section>
	</main>

	<div id="pageTop">
		<span></span>
	</div>
</body>
</html>