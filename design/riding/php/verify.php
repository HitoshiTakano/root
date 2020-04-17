<main class="sub">
	<section id="title">
		<h1>VERIFY</h1>
	</section>
	<section id="contact">
		<div class="verify">
			<?php
				foreach ($inputArray as $key => $value) {
					echo '<div>';
					echo '	<span>' . $value . '</span>';
					if($key=="contents")echo '	<span>' . nl2br(h($post[$key])) . '</span>';
					else echo '	<span>' . h($post[$key]) . '</span>';
					
					echo '</div>';
				}
			?>
			<div class="verify_btn">
				<form action="./contact.php" method="post" accept-charset="utf-8">
					<?php
					foreach ($inputArray as $key => $value) {
						echo '<input type="hidden" name="' . $key .'" value="'. h($post[$key]) .'"">';
					}
					echo '<input type="hidden" name="token" value="'. $token . '">';
					?>
					<input type="hidden" name="mode" value="1">
					<input id="reinput" class="reinput" type="submit" name="reinput" value="MODIFY">
					<label for="reinput">MODIFY</label>
				</form>
				<form action="./contact.php" method="post" accept-charset="utf-8">
					<?php
					foreach ($inputArray as $key => $value) {
						echo '<input type="hidden" name="' . $key .'" value="'. h($post[$key]) .'"">';
					}
					echo '<input type="hidden" name="token" value="'. $token . '">';
					?>
					<input type="hidden" name="mode" value="3">
					<input id="send" type="submit" name="send" value="SEND">
					<label for="send">SEND</label>
				</form>
			</div>
		</div>
	</section>
</main>