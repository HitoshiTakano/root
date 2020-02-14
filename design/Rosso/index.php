<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOP || CLEANING</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/top.js"></script>
</head>
<body>
	<header>
		<h2>大阪府全域の廃品回収にかかわることなら、有限会社セイシン興産へ！関西エリア全域対応</h2>
		<div>
			<div>
				<h3>様々な状況に対応した回収業者</h3>
				<h1>有限会社セイシン興産</h1>
			</div>
			<div>
				<div class="menu_bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<nav>
					<ul>
						<li><a href="#about">特徴</a></li>
						<li>
							<a href="#bussiness">事業内容</a>
							<ul>
								<li><a href="./sub1.php">（ご家庭様）廃品回収</a></li>
								<li><a href="./sub2.php">（法人様）廃品回収</a></li>
								<li><a href="./sub3.php">バッカン事業</a></li>
							</ul>
						</li>
						<!-- <li><a href="#achievement">実績</a></li> -->
						<li><a href="#company">会社概要</a></li>
						<li><a href="#contact">お問い合わせ</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<main>
		<!-- Background Image -->
		<div class="bgImg"></div>

		<!-- SECTIONS -->
		<!-- TOP -->
		<section id="top">
			<div class="theme">
				<h2>キャッチコピー</h2>
				<p>廃品回収・不用品回収業</p>
				<p class="comp">有限会社&#9675;&#9675;</p>
			</div>
			<div class="news">
				<span class="title">NEWS</span>
				<span class="date">2020/3/1</span>
				<span class="content">ホームページを公開しました。</span>
			</div>
		</section>
		<!-- BUSINESS -->
		<section id="business">
			<h4>粗大ごみや不用品、回収処分いたします！</h4>
			<p>COURCE</p>
			<div>
				<div>
					<a href="./sub1.php">
						<h3>不用品回収（ご家庭）</h3>
						<p>ご家庭で不要になったタンスやベッドなどの大物家具や遺品整理、引っ越しのごみなどを回収処分いたします。</p>
						<img src="">
					</a>
					<a href="./sub2.php">
						<h3>不用品回収（店舗・事業所）</h3>
						<p>店舗・事務所の移転に伴い発生した、不用品やごみなどを回収処分いたします。</p>
					</a>
					<a href="#clean">
						<h3>バッカン業務</h3>
						<p>samplesamplesamplesamplesamplesamplesamplesamplesamplesamplesamplesample</p>
					</a>
				</div>
			</div>
		</section>
		<!-- about -->
		<section id="about" class="col-two">
			<div>
				<h4>&#9675;&#9675;が選ばれる理由</h4>
				<p>右記3つをモットーに、あらゆる空間の清掃のプロとしての誇りを持ち、地域に皆様のお役に立てるよう邁進しております。お客様一人一人を大切にして、正確な事前打ち合わせから、迅速なアフターケアまで責任を持った施工を行います。</p>
			</div>
			<div>
				<div class="row-thr">
					<div>
						<div>
							<img src="img/cleaning.jpg">
						</div>
						<div>
							<h4>丁寧で高品質</h4>
							<p>専門的な知識・経験からお客様のご要望に細かいところまでお応えできるように、従業員一同、日々研究・トレーニングをしております！</p>
						</div>
					</div>
					<div>
						<div>
							<img src="img/office.jpg">
						</div>
						<div>
							<h4>地域最安値</h4>
							<p>地域最安値を目指し、お客様への負担・コストを抑えた事業形態をとっております。</p>
						</div>
					</div>
					<div>
						<div>
							<img src="img/plan.jpg">
						</div>
						<div>
							<h4>安心のお客様フォロー</h4>
							<p>お客様が抱える問題点に関して、不明点・ご質問など随時受け付けております。お気軽にお問い合わせください。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ACHIEVEMENT -->
		<!-- <section id="achievement">
			
		</section> -->

		<!-- COMPANY INFORMATION -->
		<!-- <section id="company"></section> -->

		<!-- CONTACT FORM -->
		<section id="form">
			<h2>お問い合わせフォーム</h2>
			<form method="post" action="#" autocomplete="off">
				<p>
					<label>氏名：</label>
					<input type="text" name="name" placeholder="山田　太郎">
				</p>
				<p>
					<label>電話番号：</label>
					<input type="text" name="name" placeholder="0123456789">
				</p>
				<p>
					<label>メールアドレス：</label>
					<input type="text" name="name" placeholder="sample@mail.com">
				</p>
				<p>
					<label>お問い合わせ種類</label>
				</p>
				<div>	
					<span>
						<input type="radio" name="c_1" value="1">PLAN 1
					</span>
					<span>
						<input type="radio" name="c_1" value="2">PLAN 2
					</span>
					<span>
						<input type="radio" name="c_1" value="3">PLAN 3
					</span>
				</div>
				<p>
					<label>内容</label>
					<textarea></textarea>
				</p>
				<p>
					<input type="submit" name="submit" value="送信" disabled>
				</p>
			</form>
	</main>
	<!-- FOOTER -->
	<footer>
		<div class="info">
			<p class="pr">粗大ごみ回収のパイオニア</p>
			<div>
				<h2>有限会社セイシン興産</h2>
				<p>大阪府エリア全域対応</p>	
			</div>
		</div>
		<div class="mail">
			<a href="mailto:sample@sample.com">
				<div>
					<p>メールで24時間</p>
					<p>無料見積・相談</p>
				</div>
				<span>▶</span>
			</a>
		</div>
		<div class="tel">
			<a href="tel:0123456789">
				<p>受付時間 9:00 ～ 21:00 <span>年中無休</span></p>
				<h3>012-345-6789</h3>
			</a>
		</div>
	</footer>

</body>
</html>

