<?php

include_once('inc/config.navigation.php');
include_once('inc/config.social.php');
$menu = [];
$socialItems = '';

foreach ($footerPageList as $side => $list) {
	$menu[$side] = '';

	foreach ($list as $name => $url) {
		$menu[$side] .= "<li><a href='{$url}'>{$name}</a></li>";
	}
}

foreach ($socialLinks as $id => $data) {
	$socialItems .= "<li><a href='{$data['url']}' data-toggle='tooltip' title='{$data['description']}'><i class='icon {$data['icon']}'></i></a></li>";
}
?>
<footer class="footer <?php echo $customClass; ?>-footer">
	<div class="container">
		<h1>ICO is Live Now</h1>
		<p class="main">We’re raising a Hard Cap from between $2m - $30m which will be equivalent of 650,000,000 BETR.</p>

		<form action="<?php echo $headerPageList['ICO']; ?>">
			<!-- <input type="text" value="10.000">
			<span class="calc-value">500$</span> -->
			<button class="button buy-now" type="submit">Buy BETR Now</button>
		</form>
		<div class="socials">
			<ul>
				<?php echo $socialItems; ?>
			</ul>
		</div>

		<div class="footer-menu">
			<ul class="left">
				<?php echo $menu['left']; ?>
			</ul>
			<ul class="right">
				<?php echo $menu['right']; ?>
			</ul>
		</div>
	</div>
</footer>
</main>

<!-- Investment Aside Popup -->
<aside class="popup-general" data-show-limit="10">
	<div class="container">
		<div class="hidden-xs col-xs-10">
			<p>Looking to invest with BetterBetting? Join our <strong>Telegram</strong> channel to discuss.</p>
		</div>
		<div class="col-xs-12 col-md-2">
			<a class="button red" href="https://t.me/joinchat/HNsEWQ-L0aCjHMsmKW-d_w">Join us on Telegram</a>
		</div>
	</div>
	<div class="close"></div>
</aside>

<!-- jQuery -->
<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<!-- build:js(../website) assets/js/libs.js -->
<script src="assets/js/libs/bootstrap.min.js"></script>
<script src="assets/js/libs/owl.carousel.js"></script>
<script src="assets/js/libs/owl.autoplay.js"></script>
<script src="assets/js/libs/wNumb.js"></script>
<script src="assets/js/libs/nouislider.js"></script>
<!-- endbuild -->
<!-- build:js(../website) assets/js/main.js -->
<script src="assets/js/main.js"></script>
<!-- endbuild -->

<?php if (!empty($customFooterScripts)) echo $customFooterScripts; ?>
