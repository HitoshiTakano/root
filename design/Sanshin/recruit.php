<?php
	$page = '採用情報';
	$title = $page . '｜三伸工業株式会社';
?>
<!DOCTYPE html>
<html>
<head lang="ja">
	<?php include_once dirname(__FILE__) . '/html/meta.html'; ?>
	<title><?= $title ?></title>
	<?php include_once dirname(__FILE__) . '/html/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/recruit.css">
</head>
<body>
	<!-- HEADER -->
	<?php include_once dirname(__FILE__) . '/html/header.html'; ?>
	<!-- MAIN -->
	<main id="main">
		<?php include_once dirname(__FILE__) . '/html/common.html'; ?>
		
		<!-- Kinds section -->
		<section id="recruit">
			<div>
				<h2>採用情報（三伸工業株式会社）</h2>
				<div>
					<h3>業務内容</h3>
					<p>
						機械メンテナンス（タービン・発電機・ポンプ・コンプレッサーの分解・整備・組立及び据付業務）<br>
						主に、京浜・京葉地区の発電所・化学工場での（タービン・発電機・ポンプ・コンプレッサー等）の機会メンテナンス作業です。<br>
					</p>
				</div>
				<div>
					<h3>現場範囲（エリア）</h3>
					<p>神奈川県・東京都・千葉県一円</p>
				</div>
				<div>
					<h3>雇用形態</h3>
					<p>正社員</p>
				</div>
				<div>
					<h3>試用期間</h3>
					<p>
						あり<br>
						労働条件　2か月<br>
					</p>
				</div>
				<div>
					<h3>勤務時間</h3>
					<p>sample sample sample sample sample sample </p>
				</div>
				<div>
					<h3>休日等</h3>
					<p>
						休日：日・祝日 他<br>
						週休二日制（毎週）<br>
						6ヶ月経過後の年次有給休暇日数：10日<br>
						※年末年始・夏季休暇・特別休暇（慶事等）<br>
					</p>
				</div>
				<div>
					<h3>賃金</h3>
					<p>基本給：￥244,800～（20.4日：月平均労働日数）<br />家族手当：￥5,000×扶養人数</p>
				</div>
				<div>
					<h3>備考</h3>
					<p>
						※未経験者歓迎！丁寧に指導いたします。<br>
						※選考場所までの交通費負担（規定有）<br>
						<span>☆福利厚生充実☆</span><br>
						借上住宅有（現在12名の従業員「持家以外の従業員」が利用）・家賃補助有、赴任費用支給有、任意労災に加入可<br>
					</p>
				</div>
			</div>
			<div class="contact">
				<a href="contact.php">お問い合わせ</a>
				<p>電話：045-573-2399<a href="tel:0455732399">電話</a></p>
			</div>
		</section>
	</main>
	<!-- FOOTER -->
	<?php include_once dirname(__FILE__) . '/html/footer.html'; ?>
</body>
</html>