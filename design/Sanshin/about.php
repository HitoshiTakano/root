<?php
	$page = '会社概要';
	$title = $page . '｜三伸工業株式会社';
?>
<!DOCTYPE html>
<html>
<head lang="ja">
	<?php include_once dirname(__FILE__) . '/html/meta.html'; ?>
	<title><?php echo $title; ?></title>
	<?php include_once dirname(__FILE__) . '/html/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body>
	<!-- HEADER -->
	<?php include_once dirname(__FILE__) . '/html/header.html'; ?>
	<!-- MAIN -->
	<main id="main">
		<?php include_once dirname(__FILE__) . '/html/common.html'; ?>
		<section id="company" ref="company">
			<div>
				<h2>会社概要</h2>
				<div>
					<h3>社名</h3>
					<p>三伸工業　株式会社<br>（さんしんこうぎょう　かぶしきがいしゃ）</p>
				</div>
				<div>
					<h3>所在地</h3>
					<p>&#12306;230-0072<br>神奈川県横浜市鶴見区梶山１丁目２６番２号</p>
				</div>
				<div>
					<h3>設立年月日</h3>
					<p>1965年（昭和40年） 3月13日</p>
				</div>
				<div>
					<h3>資本金</h3>
					<p>1,000万円</p>
				</div>
				<div>
					<h3>役員</h3>
					<p>
						<span>
							<span>代表取締役社長</span>
							<span>中島稔</span>
						</span>
						<span>
							<span>取締役</span>
							<span>中島藤男</span>
						</span>
						<span>
							<span>取締役</span>
							<span>浜崎敏夫</span>
						</span>
						<span>
							<span>取締役</span>
							<span>西里修</span>
						</span>
						<span>
							<span>監査役</span>
							<span>中島千代美</span>
						</span>
					</p>
				</div>
				<div>
					<h3>取引先銀行</h3>
					<p>三井住友銀行　鶴見支店<br />川崎信用金庫　駒岡支店</p>
				</div>
				<div>
					<h3>従業員数</h3>
					<p>
						<span>
							<span>仕上工</span>
							<span>20名</span>
						</span>
						<span>
							<span>クレーン工</span>
							<span>5名</span>
						</span>
					</p>
				</div>
			</div>
		</section>
		<section id="history">
			<div>
				<h2>沿革</h2>
				<p>
					<span>1947年4月</span>
					<span>三伸工業株式会社　設立</span>
				</p>
				<p>
					<span>1964年4月</span>
					<span>東京電力新東京火力発電所　常駐</span>
				</p>
				<p>
					<span>1976年4月</span>
					<span>資本金 350万円 増資</span>
				</p>
				<p>
					<span>1983年3月</span>
					<span>東京電力新東京火力発電所　常駐解消</span>
				</p>
				<p>
					<span>1981年4月</span>
					<span>中島稔　代表取締役社長就任</span>
				</p>
				<p>
					<span>1992年5月</span>
					<span>資本金 1,000万円 増資</span>
				</p>
			</div>
		</section>
		<section id="map">
			<div>
				<h2>三伸工業株式会社　Google Map</h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d445.8300982926753!2d139.66479553354938!3d35.52667487019226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185e4f4fcf46fd%3A0xe49d7bd52faec60a!2z44CSMjMwLTAwNzIg56We5aWI5bed55yM5qiq5rWc5biC6ba06KaL5Yy65qK25bGx77yR5LiB55uu77yS77yW4oiS77yS!5e0!3m2!1sja!2sjp!4v1583589238992!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>
	</main>
	<!-- FOOTER -->
	<?php include_once dirname(__FILE__) . '/html/footer.html'; ?>
</body>
</html>