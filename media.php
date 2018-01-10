<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'media';
$customClass = 'media';
include_once('inc/template.head.php');


$mediaData = getData('media');
if ($mediaData['status'] !== 'error') {
	foreach ($mediaData['content'] as $details) {
		if (!$details['visible'])
			continue;

		switch ($details['type']) {
			case 'image':
				$mediaItem = "<img src='{$details['src']}' alt='{$details['name']}' title='{$details['name']}'>";
				break;

			case 'video':
				$mediaItem = "
					<div>
						<iframe width='560' height='315' src='{$details['src']}' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>
					</div>";
		}

		$mediaOutput[] = "<div class='media-item {$details['type']}'>{$mediaItem}</div>";
	}
} else {
	$mediaOutput = "<div class='has-error'><p>{$mediaData['content']}</p></div>";
}
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
				<?php echo implode('', $mediaOutput); ?>
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
