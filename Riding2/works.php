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
	<link rel="stylesheet" type="text/css" href="css/works.css?<?php echo $now ?>">
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
		<div class="bgSkew"></div>
		<section class="title">
			<div>
				<h1>業務内容</h1>
				<span>WORKS</span>
				<h2>OUR WORKS</h2>
				<div class="circle_wrapper">
					<div class="circle"></div>
				</div>
			</div>
		</section>
		<section class="bread">
			<ul>
				<li><a href="https://riding.co.jp">TOP</a></li>
				<li>業務内容(WORKS)</li>
			</ul>
		</section>
		<section id="ses">
			<div>
				<h2>ＳＥＳ(システムエンジニアリングサービス)事業</h2>
				<div>
					<img src="img/engineer.jpg" alt="RIDING SES_IMAGE ">
					<p>SES（システムエンジニアリングサービス）企業様の開発・保守・運用における委託契約の一種で、特定の業務に対して技術者を提供するサービス(契約)です。<br>Java、PHP、Perl、C++、Objective-C、Android、HTML/CSS、Photoshopなどエンジニアの常駐型開発を通して、企業様へのリソース不足の問題解決を手助けをさせていただいております</p>
				</div>
				<div class="square_blue"></div>
			</div>
		</section>
		<section id="education">
			<div>
				<h2>IT事務・フロントエンジニア教育事業</h2>
				<div>
					<p>IT関連におけるスキル<br>PC操作・Office「Excel / Word / PowerPoint」などツールの取り扱いなどの初心者レベルから、フロントエンドエンジニア・コーダーまで未経験から習得可能なスキルの教育を行っております。<br><span>▼主な習得可能スキル</span><br>Excel/Word/PowerPoint/VBA/SQL/<br>HTML/CSS/JavaScript(JQuery/Vue.js)/PHP(Smarty/Laravel/Symfony)<br>WordPress/ECCube/UIpath/Perlなど<br></p>
					<img src="img/keyboard.jpg" alt="RIDING IT_ENGINEER EDUCATION_IMAGE ">
				</div>
				<div class="circle_tra"></div>
			</div>
		</section>
		<section id="develop">
			<div>
				<h2>WEBサービス開発事業</h2>
				<div>
					<img src="img/pc.jpg" alt="RIDING DEVELOP_IMAGE ">
					<p>WEBコンテンツ制作（ホームページ・LP制作、WEBシステム開発）<br>「業務改善・効率化」アプリケーション・システム開発<br>
						<span>▼主な制作内容</span><br>HTML/CSS・JavaScriptを使用したコーポレートサイトなどのホームページ制作・改修<br>PHPを主軸としたサーバーサイド開発・改修<br>GASを利用したGoogle Formなどの動的導線のシステム開発・改修<br>Excel VBA/Access VBA / UI Pathを利用したRPA・社内業務システム開発・改修<br>Photoshop/Illustratorによるイラスト・画像加工・デザイン制作<br></p>
				</div>
				<div class="donut"></div>
			</div>
		</section>
	</main>
	<!-- COMMON FOOTER -->
	<?php include_once './html/footer.html'; ?>

</body>
</html>