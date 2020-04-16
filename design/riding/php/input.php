<main class="sub">
	<section id="title">
		<h1>CONTACT</h1>
	</section>
	<section id="contact">
		<div class="form">
			<p class="alert"><?php echo $errorMessage; ?></p>
			<form action="contact.php" method="post" autocomplete="off">
				<div class="company_div">
					<label>
						<p>会社名</p>
						<p>
							<span>Company name</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<input type="text" name="company" value="<?php if(isset($post['company'])) echo h($post['company']); ?>" id="company" maxlength="50" placeholder="株式会社Riding">
				</div>
				<div class="name_div">
					<label>
						<p>お名前</p>
						<p>
							<span>First name / Last name</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<input type="text" name="name" value="<?php if(isset($post['name'])) echo h($post['name']); ?>" id="name" maxlength="50" placeholder="久保田　淳平" required>
				</div>
				<div class="mail_div">
					<label>
						<p>メールアドレス</p>
						<p>
							<span>Mail address</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<input type="email" name="mail" value="<?php if(isset($post['mail'])) echo h($post['mail']); ?>" id="mail" maxlength="255" placeholder="info@riding.co.jp" required>
				</div>
				<div class="tel_div">
					<label>
						<p>電話番号</p>
						<p>
							<span>Phone number</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<input type="tel" name="tel" value="<?php if(isset($post['tel'])) echo h($post['tel']); ?>" id="tel" maxlength="13" placeholder="0364530197" required>
				</div>
				<div class="subject_div">
					<label>
						<p>件名</p>
						<p>
							<span>Title</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<input type="text" name="subject" value="<?php if(isset($post['subject'])) echo h($post['subject']); ?>" id="subject" maxlength="150" placeholder="件名" required>
				</div>
				<div class="contents_div">
					<label>
						<p>お問い合わせ内容</p>
						<p>
							<span>Message</span>
							<span class="err_msg"></span>
						</p>
					</label>
					<textarea name="contents" placeholder="お問い合わせ内容" id="contents" maxlength="500" value required><?php if(isset($post['contents'])) echo h($post['contents']); ?></textarea>
				</div>
				<input type="hidden" name="token" value="<?php echo $token; ?>">
				<input type="hidden" name="mode" value="<?php echo $mode; ?>">
				<div class="submit_div">
					<input type="submit" name="verify" value="SEND" disabled>
				</div>
			</form>
		</div>
	</section>
</main>