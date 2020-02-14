<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>株式会社Riding(ライディング) || Riding.inc Corporate Site</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/top.css">
	<script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./js/common.js"></script>
	<script type="text/javascript" src="./js/lib/perlin.js"></script>
	<script type="text/javascript" src="./js/draw.js"></script>
	<script type="text/javascript" src="./js/top.js"></script>
</head>
<body>
	<header>
		<div id="header_container">
			<div class="logo">
				<img src="./img/logo.png" alt="株式会社Riding LOGO">
			</div>
			<div id="menu_bar" class="">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav>
				<ul>
					<li><a href="#top"><ruby><rb>TOP</rb><rt>トップ</rt></ruby></a></li>
					<li><a href="#mission"><ruby><rb>MISSION</rb><rt>経営理念</rt></ruby></a></li>
					<li><a href="#works"><ruby><rb>WORKS</rb><rt>業務内容</rt></ruby></a></li>
					<li><a href="#about"><ruby><rb>ABOUT</rb><rt>企業概要</rt></ruby></a></li>
					<li><a href="#contact"><ruby><rb>CONTACT</rb><rt>お問い合わせ</rt></ruby></a></li>
					<li><a href="#qa"><ruby><rb>Q/A</rb><rt>よくある質問</rt></ruby></a></li>
				</ul>
			</nav>	
		</div>
	</header>
	<main>
		<section id="top">
			<div>
				<canvas id="wave"></canvas>
			</div>
			<h1><img src="./img/logo.png" alt="株式会社Riding LOGO"></h1>
		</section>
		<section id="business">
			<div>
				<h2 id="anime1" class="anime">株式会社 Riding とは<span>BUSINESS</span></h2>
				<div class="col_two">
					<div class="text">
						<h3 class="anime">BUSINESS</h3>
						<p class="anime">株式会社Ridingでは、最先端の情報や時代の波を、スキルやツールといった「乗り物」で越えていくことをコンセプトとし、<br>IT分野において、個人における「技術・知識の市場価値」・企業における「サービスの市場価値」を改善・向上をお手伝いさせていただきます。</p>
					</div>
					<div class="image">
						<img src="./img/design.jpg">
					</div>
				</div>
			</div>
		</section>
		<section id="works">
			<div>
				<h2 class="anime">事業紹介</h2>
				<div class="col_thr">
					<div class="anime">
						<h3>SES<span>(システムエンジニアリングサービス)</span><br>事業</h3>
						<a href="">
							<div>
								<img src="./img/engineer.jpg">
							</div>
							<p>SES（システムエンジニアリングサービス）企業様の開発・保守・運用における委託契約の一種で、特定の業務に対して技術者を提供するサービス(契約)です。<br>
							Java、PHP、Perl、C++、Objective-C、Android、HTML/CSS、Photoshopなどエンジニアの常駐型開発を通して、企業様へのリソース不足の問題解決を手助けをさせていただいております</p>
						</a>
					</div>
					<div class="anime">
						<h3>WEBサービス開発事業</h3>
						<a href="">
							<div>
								<img src="./img/pc.jpg">
							</div>
							<p>
								WEBコンテンツ制作（ホームページ・LP制作、WEBシステム開発）<br>
								「業務改善・効率化」アプリケーション・システム開発<br>

								<span>▼主な制作内容</span><br>
								HTML/CSS・JavaScriptを使用したコーポレートサイトなどのホームページ制作・改修<br>
								PHPを主軸としたサーバーサイド開発・改修<br>
								GASを利用したGoogle Formなどの動的導線のシステム開発・改修<br>
								Excel VBA/Access VBAを利用した社内業務システム開発・改修<br>
								Photoshop/Illustratorによるイラスト・画像加工・デザイン制作<br>
							</p>
						</a>
					</div>
					<div class="anime">
						<h3>IT事務・フロントエンジニア教育事業</h3>
						<a href="">
							<div>
								<img src="./img/keyboard.jpg">
							</div>
							<p>IT関連におけるスキル<br>
								PC操作・Office「Excel / Word / PowerPoint」などツールの取り扱いなどの初心者レベルから、フロントエンドエンジニア・コーダーまで未経験から習得可能なスキルの教育を行っております。<br>
								<span>▼主な習得可能スキル</span><br>
								Excel/Word/PowerPoint/VBA/SQL/<br>
								HTML/CSS/JavaScript(JQuery/Vue.js)/PHP(Smarty/Laravel/Symfony)<br>
								WordPress/ECCube/UIpath/Perlなど<br>
							</p>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="map">
			<div>
				<h2 class="anime">所在地</h2>
				<div class="address anime">
					<p>最寄り駅</p>
					<p>渋谷駅 徒歩　約10分</p>
					<p>〒150-0031 東京都渋谷区桜丘町１１−９</p>
					<p>桜ケ丘セントラルハイツ402</p>
				</div>
				<div class="map anime">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.907935265944!2d139.69957871502154!3d35.65463983903765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5a0c436f4b%3A0xd0fdacaa8688412e!2z44CSMTUwLTAwMzEg5p2x5Lqs6YO95riL6LC35Yy65qGc5LiY55S677yR77yR4oiS77yZIOahnOOCseS4mOOCu-ODs-ODiOODqeODq-ODj-OCpOODhA!5e0!3m2!1sja!2sjp!4v1581424274600!5m2!1sja!2sjp" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</section>
		<section id="company">
			<div>
				<h2>企業概要</h2>
				<div class="table">
					<p>
						<span>社名</span>
						<span>株式会社Riding（ライディング）</span>
					</p>
					<p>
						<span>代表</span>
						<span>久保田淳平</span>
					</p>
					<p>
						<span>所在地</span>
						<span>〒150-0031 東京都渋谷区桜丘町１１−９　桜ケ丘セントラルハイツ402</span>
					</p>
					<p>
						<span>電話番号</span>
						<span>03-6453-0197</span>
					</p>
					<p>
						<span>FAX</span>
						<span>03-6453-0199</span>
					</p>
					<p>
						<span>事業内容</span>
						<span>ＳＥＳ（システムエンジニアリングサービス）事業 / システムエンジニア・IT事務人材育成事業 / WEBサービス開発事業</span>
					</p>
					<p>
						<span>設立</span>
						<span>
							2017年10月12日（株式会社KAgent）<br>
							2020年02月01日（株式会社Riding　社名変更）
						</span>
					</p>
					<p>
						<span>資本金</span>
						<span>5,000,000円</span>
					</p>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="site_map">
			<ul>
				<li><a href="#top">TOP</a></li>
				<li><a href="#mission">経営理念</a></li>
				<li><a href="#works">業務内容</a></li>
				<li><a href="#about">企業概要</a></li>
				<li><a href="#contact">お問い合わせ</a></li>
				<li><a href="#qa">Q / A</a></li>
			</ul>
		</div>
		<h2 class="foot">&copy; 株式会社Riding 2020</h2>
	</footer>
</body>
</html>