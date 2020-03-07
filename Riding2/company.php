<?php
	$now = date('Ymd');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<?php include_once './html/meta.html'; ?>
	<title>株式会社Riding || 会社概要（About us）</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/common.css?<?php echo $now ?>">
	<link rel="stylesheet" type="text/css" href="css/sub.css?<?php echo $now ?>">
	<link rel="stylesheet" type="text/css" href="css/company.css?<?php echo $now ?>">
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
				<h1>企業概要</h1>
				<span>Company</span>
				<h2>COMPANY</h2>
				<div class="circle_wrapper">
					<div class="circle"></div>
				</div>
			</div>
		</section>
		<section class="bread">
			<ul>
				<li><a href="https://riding.co.jp">TOP</a></li>
				<li>企業概要(COMPANY)</li>
			</ul>
		</section>
		<section id="main_content">
			<div>
				<div class="table">
					<h2>会社情報</h2>
					<p>
						<span>社名</span>
						<span>株式会社Ｒｉｄｉｎｇ（ライディング）<br><small>（旧社名：株式会社KAgent）</small></span>
					</p>
					<p>
						<span>代表取締役</span>
						<span>久保田 淳平</span>
					</p>
					<p>
						<span>所在地</span>
						<span>&#12306;150-0031 東京都渋谷区桜丘町１１−９<br>桜ケ丘セントラルハイツ４０２</span>
					</p>
					<p>
						<span>電話番号</span>
						<span>03-6453-0197<a href="tel:0364530197">電話</a></span>
					</p>
					<p>
						<span>ＦＡＸ</span>
						<span>03-6453-0199</span>
					</p>
					<p>
						<span>事業内容</span>
						<span>ＩＴ人材育成<br>ＳＥＳ事業<br>Ｗｅｂデザイン・システム開発</span>
					</p>
					<p>
						<span>設立日</span>
						<span>2017/10/12</span>
					</p>
					<p>
						<span>資本金</span>
						<span>&yen;5,000,000</span>
					</p>
				</div>
			</div>
		</section>
		<!-- HISTORY -->
		<!-- <section id="history">
			<div>
				<h2>HISTORY</h2>
				<h3>沿革</h3>
				<div class="tree">
					<div class="stem"></div>
					<div class="branch">
						<p></p>
					</div>
				</div>
			</div>
		</section> -->
		<!-- GOOGLE MAP -->
		<section id="map">
			<div>
				<h2>MAP</h2>
				<h3>最寄り駅：渋谷駅</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3241.8846203463204!2d139.6990795651106!3d35.65521423020042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5a0c436f4b%3A0xd0fdacaa8688412e!2z44CSMTUwLTAwMzEg5p2x5Lqs6YO95riL6LC35Yy65qGc5LiY55S677yR77yR4oiS77yZIOahnOOCseS4mOOCu-ODs-ODiOODqeODq-ODj-OCpOODhA!5e0!3m2!1sja!2sjp!4v1582474563596!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;width: 100%;height: 400px;margin: 10px auto;" allowfullscreen=""></iframe>
			</div>
		</section>
	</main>
	<!-- COMMON FOOTER -->
	<?php include_once './html/footer.html'; ?>

</body>
</html>