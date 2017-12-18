<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'media';
$customClass = 'media';
include_once('inc/template.head.php');
?>
<body>
<?php include_once('inc/template.header.php'); ?>
<?php include_once('inc/module.google-analytics.php'); ?>

<div class="gradient-helper media">
	<div class="right-shape"></div>
	<div class="container">
		<div>
			<h1>Media</h1>
			<div class="media-container">
				<div class="media-item image">
					<img src="assets/images/media/ronnie-adriaan1.jpg" alt="BetterBetting Media Image">
				</div>
				<div class="media-item image">
					<img src="assets/images/media/ronnie-adriaan2.jpg" alt="BetterBetting Media Image">
				</div>
				<div class="media-item image">
					<img src="assets/images/media/ronnie-adriaan3.jpg" alt="BetterBetting Media Image">
				</div>
				<div class="media-item image">
					<img src="assets/images/media/ronnie-adriaan4.jpg" alt="BetterBetting Media Image">
				</div>
				<div class="media-item video">
					<div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/qzBXJmvpEOM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- Can be the Lazy load CTA in the future -->
		<!-- <div class="row more-media">
			<div class="col-xs-12 text-center">
				<a href="media.php" class="button buy-now">More Media</a>
			</div>
		</div> -->
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
