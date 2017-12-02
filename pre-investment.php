<?php
	session_start();
?>
<!doctype html>
<html class="no-js" lang="">
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

	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-touch-icon.png?v=jwLOaKBxPg">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png?v=jwLOaKBxPg">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png?v=jwLOaKBxPg">
	<link rel="manifest" href="assets/images/favicons/manifest.json?v=jwLOaKBxPg">
	<link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg?v=jwLOaKBxPg" color="#9538a2">
	<link rel="shortcut icon" href="assets/images/favicons/favicon.ico?v=jwLOaKBxPg">
	<meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml?v=jwLOaKBxPg">
	<meta name="theme-color" content="#9538a2">
</head>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<header class="header subsite-header">
	<div class="container">
		<a href="index.html" class="logo">
			BetterBetting
		</a>
		<div class="menu-icon"></div>
		<div class="menu">
			<ul>
				<!-- <li>
					<a href="market.html">MARKET</a>
				</li> -->
				<!-- <li>
					<a href="whitepaper.html">Whitepaper</a>
				</li> -->
				<li>
					<a href="block-show-asia.html">Block Show Asia</a>
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
				<li>
					<a href="pre-investment.php">Contact</a>
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
			<a href="pre-investment.php" class="button block colorful">Buy <b>BETR</b> <span>Tokens</span></a>
			<div class="extension"></div>
		</div>
	</div>
</header>

<div class="gradient-helper pre-investment-page">
	<div class="container">
		<form method="POST" action="form-process.php">
			<h1>Buy BETR Now</h1>
			<div class="row">
				<div class="col-sm-6">
					<p>ICO pre-sales are now live and available for qualified and institutional investors. Public sales will be available mid-December 2017.</p>
				</div>
				<div class="col-sm-6">
					<p>For more information on Pre Sales and the ICO, please complete the form below and we will be in contact.</p>
				</div>
			</div>
<!-- 			<span class="small calculate">Calculate your <strong>Investment</strong> and Potential <strong>Profit</strong></span>
			<div class="calculator-box">
				<div class="calculator-row">
					<div class="val">
						<p class="set-slider-calculated-value">42.175360 BTC</p>
						<span class="small">Bitcoin</span>
					</div>
					<div class="val">
						<p class="set-slider-formatted-value">190,000 USD</p>
						<span class="small">United States Dollar</span></div>
				</div>
				<div class="calculator-row slider-row">
					<div id="slider"></div>
				</div>
				<div class="calculator-row grey">
					<div class="val">
						<p>3.7%</p>
						<span class="small">Fixed Monthly Interest Rate</span>
					</div>
					<div class="val">
						<p>84,360 USD</p>
						<span class="small">Yearly Possible Profit</span>
					</div>
				</div>
			</div>
			<input type="hidden" class="slider-input-value" value=""> -->

			<h3 class="text-center">Enquiry Form</h3>

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
			<input type="hidden" name="source" value="pre-investment.php">
			<button class="button button-invest red">SUBMIT</button>
			<h3 class="text-center">Payment Methods Accepted</h3>
			<div class="payment-methods">
				<div class="payment-method">
					<input type="radio" name="payment-method" id="bitcoin" value="bitcoin" disabled>
					<label for="bitcoin" class="method">
						<span class="method-bitcoin"></span>
					</label>
					<input type="radio" name="payment-method" id="ethereum" value="ethereum" disabled>
					<label for="method" class="method">
						<span class="method-method"></span>
					</label>
				</div>
			</div>
		</form>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<h1>Pre-ICO is Live Now</h1>
		<p class="main">We’re raising a Hard Cap from between $2m - $30m which will be equivalent of 650,000,000 BETR.</p>

		<form action="pre-investment.php">
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
				<!-- <li>
					<a href="" data-toggle="tooltip" title="Send message on slack"><i class="icon icon-slack"></i></a>
				</li>
				<li>
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
					<a href="block-show-asia.html">Block Show Asia</a>
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
			</ul>
			<ul class="right">
				<!-- <li>
					<a href="pre-investment.php">Token Sale</a>
				</li>
				<li>
					<a href="">Whitepaper</a>
				</li>
				<li>
					<a href="">Terms &amp; Conditions</a>
				</li> -->
				<li>
					<a href="pre-investment.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</footer>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
	window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
	ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>
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
