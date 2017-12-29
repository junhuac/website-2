<?php
	session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BetterBetting</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
	<!-- build:css assets/css/libs.css -->
	<link rel="stylesheet" href="assets/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/libs/nouislider.css">
	<link rel="stylesheet" href="assets/css/libs/owl/owl.carousel.css">
	<!-- endbuild -->
	<!-- build:css assets/css/main.css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- endbuild -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon.png?v=Jy7WrKnjGe">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png?v=Jy7WrKnjGe">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png?v=Jy7WrKnjGe">
	<link rel="manifest" href="assets/images/favicons/manifest.json?v=Jy7WrKnjGe">
	<link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg?v=Jy7WrKnjGe" color="#232836">
	<link rel="shortcut icon" href="assets/images/favicons/favicon.ico?v=Jy7WrKnjGe">
	<meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml?v=Jy7WrKnjGe">
	<meta name="theme-color" content="#232836">
</head>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111023593-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-111023593-1');
</script>

<!-- Content -->
<main>
<header class="header subsite-header">
	<div class="container">
		<a href="index.html" class="logo">
			BetterBetting
		</a>
		<div class="menu-icon"></div>
		<div class="menu">
			<ul>
				<!-- <li>
					<a href="market.html">Market</a>
				</li> -->
				<li>
					<a href="BETTER_BETTING_Foundation_White_Paper.pdf">Whitepaper</a>
				</li>
				<li>
					<a href="events.html">Events</a>
				</li>
				<li>
					<a href="media.php">Media</a>
				</li>
				<li>
					<a href="road_map.html">Roadmap</a>
				</li>
				<li>
					<a href="team.html">Team</a>
				</li>
				<li>
					<a href="technical.html">Technical</a>
				</li>
				<!-- <li>
					<a href="bounty.html">Bounty</a>
				</li> -->
				<li>
					<a href="ico-sales.html">ICO</a>
				</li>
				<li>
					<a class="active" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="betr-offer">
		<div class="buy-bbb-methods">
			<div class="text">Buy <b>BETR</b> with</div>
			<div class="methods">
				<div class="method cash"></div>
				<div class="method bitcoin"></div>
				<div class="method other"></div>
			</div>
		</div>
		<div class="buy-bbb-btn">
			<a href="ico-sales.html" class="button block colorful">Buy <b>Betr</b> <span>Tokens</span></a>
			<div class="extension"></div>
		</div>
	</div>
</header>

<div class="gradient-helper contact">
	<div class="container">
		<form method="POST" action="form-process.php">
			<h1>Contact Us</h1>
			<div class="row">
				<div class="col-sm-6">
					<p>BetterBetting ICO Sales are now live! Please register here to buy tokens.  If you have any questions or require more information please complete the form below and we will be in contact.</p>
				</div>
				<div class="col-sm-6">
					<p>For more information on Pre Sales and the ICO, please complete the form below and we will be in contact.</p>
				</div>
			</div>

			<div class="container details-section">
				<h2 class="text-center">Details</h2>
				<h3 class="text-center">BetterBetting</h3>
				<p class="text-center">Company No: 90014075</p>
				<div class="address-container">
					<address>
						Rotermanni tn 14
						<br>
						Harju County
						<br>
						10111
						<br>
						Tallin, Estonia
					</address>
					<address class="text-right">
						Office 19
						<br>
						Labs Atrium Camden
						<br>
						The Stables Market
						<br>
						Chalk Farm Rd
						<br>
						London
						<br>
						NW1 8AH
					</address>
				</div>
			</div>

			<h2 class="text-center">Enquiry Form</h2>

			<div class="form-box notify">
				<?php
					if (!empty($_GET['notify'])) {
						if ($_GET['notify'] == 'error' && !empty($_SESSION['notify']['error'])) {
							foreach ($_SESSION['notify']['error'] as $error) {
								?>
								<div class="alert alert-danger">
									<?php echo $error; ?>
								</div>
								<?php
							}
						}
						if ($_GET['notify'] == 'success' && !empty($_SESSION['notify']['success'])) {
							foreach ($_SESSION['notify']['success'] as $success) {
								?>
								<div class="alert alert-success">
									<?php echo $success; ?>
								</div>
								<?php
							}
						}
						unset($_SESSION['notify']);
					}
				?>
			</div>

			<div class="form-box">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="First name" class="form-control" id="first_name" name="first_name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="Last name" class="form-control" id="last_name" name="last_name">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<input type="email" placeholder="E-mail" class="form-control" id="email" name="email" required>
						</div>
						<div class="form-group">
							<textarea placeholder="Message" class="form-control" id="message" name="message"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="g-recaptcha" data-sitekey="6LfCnjkUAAAAAF7QjKS2-XtFCuypRSzJOEXTKTgr"></div>
			<input type="hidden" name="source" value="contact.php">
			<button class="button button-invest red">SUBMIT</button>
			<h3 class="text-center">Payment Methods Accepted</h3>
			<div class="payment-methods">
				<div class="payment-method">
					<input type="radio" name="payment-method" id="bitcoin" value="bitcoin" disabled>
					<label for="bitcoin" class="method">
						<span class="method-bitcoin"></span>
					</label>
					<input type="radio" name="payment-method" id="ethereum" value="ethereum" disabled>
					<label for="ethereum" class="method">
						<span class="method-ethereum"></span>
					</label>
					<input type="radio" name="payment-method" id="litecoin" value="litecoin" disabled>
					<label for="litecoin" class="method">
						<span class="method-litecoin"></span>
					</label>
					<input type="radio" name="payment-method" id="bitcoin-cash" value="bitcoin-cash" disabled>
					<label for="bitcoin-cash" class="method">
						<span class="method-bitcoin-cash"></span>
					</label>
					<input type="radio" name="payment-method" id="dash" value="dash" disabled>
					<label for="dash" class="method">
						<span class="method-dash"></span>
					</label>
				</div>
			</div>
		</form>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<h1>ICO is Live Now</h1>
		<p class="main">We’re raising a Hard Cap from between $2m - $30m which will be equivalent of 650,000,000 BETR.</p>

		<form action="ico-sales.html">
			<!-- <input type="text" value="10.000">
			<span class="calc-value">500$</span> -->
			<button class="button buy-now" type="submit">Buy BETR Now</button>
		</form>
		<div class="socials">
			<ul>
				<li>
					<a href="https://www.facebook.com/BETRBetting/" data-toggle="tooltip" title="Like us on Facebook" class=""><i class="icon icon-facebook"></i></a>
				</li>
				<li>
					<a href="https://twitter.com/BETRBetting" data-toggle="tooltip" title="Follow on twitter"><i class="icon icon-twitter"></i></a>
				</li>
				<li>
					<a href="https://www.linkedin.com/company/betterbetting" data-toggle="tooltip" title="Follow on linkedin"><i class="icon icon-linkedin"></i></a>
				</li>
				<li>
					<a href="https://t.me/joinchat/HNsEWQ-L0aCjHMsmKW-d_w" data-toggle="tooltip" title="Check us out on telegram"><i class="icon icon-telegram"></i></a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCFvNUWRiedqvcpNHqLnDAXg" data-toggle="tooltip" title="Check out our youtube channel"><i class="icon icon-youtube"></i></a>
				</li>
				<!-- <li>
					<a href="" data-toggle="tooltip" title="Bitcoin"><i class="icon icon-bitcoin"></i></a>
				</li> -->
			</ul>
		</div>

		<div class="footer-menu">
			<ul class="left">
				<!-- <li>
					<a href="market.html">Market</a>
				</li> -->
				<li>
					<a href="events.html">Events</a>
				</li>
				<li>
					<a href="media.php">Media</a>
				</li>
				<li>
					<a href="road_map.html">Roadmap</a>
				</li>
				<li>
					<a href="team.html">Team</a>
				</li>
				<li>
					<a href="technical.html">Technical</a>
				</li>
				<!-- <li>
					<a href="bounty.html">Bounty</a>
				</li> -->
			</ul>
			<ul class="right">
				<li>
					<a href="ico-sales.html">Token Sale</a>
				</li>
				<li>
					<a href="BETTER_BETTING_Foundation_White_Paper.pdf">Whitepaper</a>
				</li>
				<li>
					<a href="terms-conditions.html">Terms &amp; Conditions</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
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
<!-- build:js assets/js/libs.js -->
<script src="assets/js/libs/bootstrap.min.js"></script>
<script src="assets/js/libs/owl.carousel.js"></script>
<script src="assets/js/libs/owl.autoplay.js"></script>
<script src="assets/js/libs/wNumb.js"></script>
<script src="assets/js/libs/nouislider.js"></script>
<!-- endbuild -->
<!-- build:js assets/js/main.js -->
<script src="assets/js/main.js"></script>
<!-- endbuild -->
</body>
</html>
