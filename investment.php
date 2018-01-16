<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'investment';
$customClass = '';
include_once('inc/template.head.php');
?>
<body>
<?php include_once('inc/template.header.php'); ?>

<div class="gradient-helper investment-page">
	<div class="container">
		<form>
			<h1>Get Shares Now</h1>
			<div class="row">
				<div class="col-sm-6">
					<p>Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
				</div>
				<div class="col-sm-6">
					<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
				</div>
			</div>
			<span class="small calculate">Calculate your <strong>Investment</strong> and Potential <strong>Profit</strong></span>
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
			<input type="hidden" class="slider-input-value" value="">

			<h3 class="text-center">Fill in your Details</h3>

			<div class="form-box">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="First name" class="form-control" id="first_name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="Last name" class="form-control" id="last_name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control" id="email_name">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" placeholder="Phone No." class="form-control" id="phone_no">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<textarea placeholder="Address (Street Name, Street No. etc)" class="form-control" id="adress"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<input type="text" placeholder="Country" class="form-control" id="country">
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<input type="text" placeholder="City" class="form-control" id="city">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3 class="text-center">Choose Payment Method</h3>
			<div class="payment-methods">
				<div class="investment-value">
					<span class="small">Investment Value</span>
					<p>
						<span class="investment-dollars-value">190.000</span> USD  =
						<span class="investment-btc-value">42.175360</span> BTC
					</p>
				</div>

				<div class="payment-method">
					<input type="radio" name="payment-method" id="bitcoin" value="bitcoin" checked>
					<label for="bitcoin" class="method">
						<span class="method-bitcoin"></span>
					</label>
					<input type="radio" name="payment-method" id="ethereum" value="ethereum">
					<label for="ethereum" class="method">
						<span class="method-ethereum"></span>
					</label>
					<input type="radio" name="payment-method" id="mastercard" value="mastercard">
					<label for="mastercard" class="method">
						<span class="method-mastercard"></span>
					</label>
				</div>
			</div>
			<button class="button button-invest red">INVEST WITH BITCOIN</button>
		</form>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
