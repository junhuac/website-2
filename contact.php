<?php
	session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'contact';
$customClass = 'contact';
$customFooterScripts = '<script src="https://www.google.com/recaptcha/api.js"></script>';

include_once('inc/template.head.php');


$currencyData = getData('general');

if ($currencyData['status'] == 'ok') {
	foreach ($currencyData['content']['currencies'] as $currency) {
		$currencies[] = "
			<div class='currency'>
				<span class='currency-logo-{$currency}'></span>
			</div>";
	}
}
?>
<body>
<?php include_once('inc/template.header.php'); ?>

<div class="gradient-helper <?php echo $customClass; ?>">
	<div class="container">
		<form method="POST" action="form-process.php">
			<h1>Contact Us</h1>
			<div class="row">
				<div class="col-sm-6">
					<p>BetterBetting ICO Sales are now live! Please register here to buy tokens.  If you have any questions or require more information please complete the form below and we will be in contact.</p>
				</div>
				<div class="col-sm-6">
					<p>For more information on the ICO, please complete the form below and we will be in contact.</p>
				</div>
			</div>

			<div class="container details-section">
				<h2 class="text-center">Details</h2>
				<h3 class="text-center">Better Betting Foundation</h3>
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
			<?php if (!empty($currencies)): ?>
				<h3 class="currencies-title">Payment Methods Accepted</h3>
				<div class="currencies">
					<?php echo implode('', $currencies); ?>
				</div>
			<?php endif; ?>
		</form>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
