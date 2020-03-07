<?php
	$now = date('Ymd');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<?php include_once './html/meta.html'; ?>
	<title>株式会社Ｒｉｄｉｎｇ（ライディング）- Corporate Site</title>
	<link rel="stylesheet" type="text/css" href="css/common.css?<?php echo $now ?>">
	<link rel="stylesheet" type="text/css" href="css/top.css?<?php echo $now ?>">
	<script type="text/javascript" src="js/lib/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/lib/perlin.min.js"></script>
	<script type="text/javascript" src="js/common.js?<?php echo $now ?>"></script>
	<script type="text/javascript" src="js/draw.js?<?php echo $now ?>"></script>
	<script type="text/javascript" src="js/top.js?<?php echo $now ?>"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142502581-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-142502581-2');
	</script>
</head>
<body>
	<!-- COMMON HEADER -->
	<?php include_once './html/header.html'; ?>

	<!-- MAIN -->
	<main>
		<!-- TOP -->
		<section id="top">
			<div>
				<canvas id="wave"></canvas>
				<h1>株式会社Riding（ライディング） コーポレートサイト
					<img src="img/logo.png" alt="株式会社Riding design">
				</h1>
			</div>
		</section>
		<!-- MISSION -->
		<section id="mission">
			<div>
				<div class="title">
					<h2>Mission<span>株式会社Riding</span></h2>
					<span class="bg_text">MISSION</span>
				</div>
				<div class="text">
					<img src="img/pc.jpg" alt="株式会社Riding ImagePC">
					<img src="img/memo.jpg" alt="株式会社Riding imageMemo">
					<p>株式会社Riding（ライディング）では、最先端の情報や時代の波を、スキルやサービスといった、ツールを使って乗り越えていくことをコンセプトとし、IT分野において、個人における「技術・知識」・企業における「サービス・業務」の改善・向上をお手伝いさせていただきます。</p>
				</div>
			</div>
		</section>
		<!-- WORKS -->
		<section id="works">
			<div>
				<h2>WORKS</h2>
				<h3>Riding<br>WORKS</h3>
				<div>
					<div class="col_two parent">
						<a href="./works#ses" class="child">
							<div></div>
							<p class="text">人材エージェント</p>
							<img src="img/shakeHands.jpg" alt="株式会社Riding 人材エージェント">
						</a>
						<a href="./works#education" class="child">
							<div></div>
							<p class="text">IT人材教育</p>
							<img src="img/educational.jpg" alt="株式会社Riding IT人材教育">
						</a>
						<a href="./works#develop" class="child">
							<div></div>
							<p class="text">WEBデザイン<br>システム開発</p>
							<img src="img/design.jpg" alt="株式会社Riding ＷＥＢデザイン">
						</a>
						<a href="./works#develop" class="child">
							<div></div>
							<p class="text">業務改善<br>システム開発</p>
							<img src="img/develop.jpg" alt="株式会社Riding 業務改善">
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="recruit">
			<span>CONTACT</span>
			<div>
				<h2>CONTACT</h2>
				<h3>
					株式会社Riding
					<p>SES・パートナー様</p>
					<p>フリーランスエンジニア様</p>
					<p>募集</p>
				</h3>
				<div class="col_two">
					<a href="./contact"><span>SES・パートナー様<span></a>
					<a href="./contact"><span>フリーランスエンジニア様<span></a>
				</div>
			</div>
		</section>

		<section id="news">
			<div>
				<div class="col_two">
					<div>
						<h2>NEWS</h2>
					</div>
					<div class="scrollY">
						<p>
							<span>2020/02/01</span>
							<span>株式会社Ridingホームページ運用開始</span>
						</p>
						<p>
							<span>2020/02/01</span>
							<span>渋谷事務所 移転</span>
						</p>
						<p>
							<span>2020/02/01</span>
							<span>社名変更「株式会社Riding」</span>
						</p>
						<p>
							<span>2019/09/01</span>
							<span>受託事業 開始</span>
						</p>
						<p>
							<span>2019/06/01</span>
							<span>大門事務所 移転</span>
						</p>
						<p>
							<span>2017/12/01</span>
							<span>ITエンジニア教育事業 開始</span>
						</p>
						<p>
							<span>2017/10/12</span>
							<span>SES事業 開始</span>
						</p>
						<p>
							<span>2017/10/12</span>
							<span>株式会社KAgentホームページ運用開始</span>
						</p>
						<p>
							<span>2017/10/12</span>
							<span>株式会社KAgent設立</span>
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- COMMON FOOTER -->
	<?php include_once './html/footer.html'; ?>
</body>
</html>