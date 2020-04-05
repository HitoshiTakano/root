<?php
	$title = '';
	$page = '';
	require_once 'php/common.php';
	$comm = new chkCommon();
?>
<!DOCTYPE html>
<html translate="no" lang="ja">
<head>
	<?php include_once 'html/meta.html'; ?>
	<title></title>
	<?php include_once 'html/file.html'; ?>
	<link rel="stylesheet" type="text/css" href="css/sub.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<script src="js/form.js" type="text/javascript"></script>
</head>
<body>
	<?php include_once './html/header.html'; ?>
	<main>
		<section id="title" class="form">
			<div class="text">お問い合わせ</div>
			<div class="image">
				<img src="img/sub_title.png" alt="bg_title">
			</div>
		</section>
		<div class="complete">
			<h4>お問い合わせ完了</h4>
			<p>送信ありがとうございます。<br><br>この度はお問い合わせメールをお送りいただきありがとうございます。<br>後ほど、担当者よりご連絡をさせていただきます。<br>今しばらくお待ちくださいますようよろしくお願い申し上げます。<br>
			<br>なお、しばらくたっても返信、返答がない場合は、お手数ですが再度送信いただくか、<br>お電話（ 045-5732-399 ）にてご連絡いただけますと幸いです。</p>
			<a href="<?php echo $top_page ?>">TOPページへ戻る</a>
		</div>
	</main>
	<?php include_once './html/footer.html'; ?>
</body>
</html>