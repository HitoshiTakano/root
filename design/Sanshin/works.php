<?php
	$page = '業務内容';
	$title = $page . '｜三伸工業株式会社';
?>
<!DOCTYPE html>
<html>
<head lang="ja">
	<?php include_once dirname(__FILE__) . '/html/meta.html'; ?>
	<title><?= $title ?></title>
	<?php include_once dirname(__FILE__) . '/html/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/works.css">
</head>
<body>
	<!-- HEADER -->
	<?php include_once dirname(__FILE__) . '/html/header.html'; ?>
	<!-- MAIN -->
	<main id="main">
		<?php include_once dirname(__FILE__) . '/html/common.html'; ?>
		<!-- PAGES CONTENTS -->
		<section id="works">
			<div>
				<h2>事業内容</h2>
				<div>
					<div class="col_two">
						<div class="works_img"></div>
						<div>
							<ol>
								<li>回転機点検・整備</li>
								<li>ポンプ点検・整備</li>
								<li>コンプレッサー点検・整備</li>
								<li>タービン点検・整備</li>
								<li>発電機点検・整備</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="trade">
			<div>
				<h2>取引先一覧</h2>
				<div>
					
				</div>
			</div>
		</section>
	</main>
	<!-- FOOTER -->
	<?php include_once dirname(__FILE__) . '/html/footer.html'; ?>
</body>
</html>