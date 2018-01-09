<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = '404 - Could not find that';
$customClass = '_404';

include_once('inc/template.head.php');
?>
<body>
<?php
	include_once('inc/template.header.php');
	include_once('inc/module.google-analytics.php');
?>

<div class="gradient-helper <?php echo $customClass; ?>">
	<div class="container">
		<h1>Can't find that!</h1>
		<p class="main">But worry not, you'll find your Tokens <a href="<?php echo $headerPageList['ICO']; ?>">here</a>.</p>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
