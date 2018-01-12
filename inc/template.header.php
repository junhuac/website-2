<?php
include_once('config.navigation.php');

$customClass = !empty($customClass) ? $customClass : '';
$menu = '';

foreach ($headerPageList as $name => $url) {
	$class = '';

	if (!strcasecmp($name, $pageName))
		$class = 'class="active"';

	$menu .= "<li><a $class href='{$url}'>{$name}</a></li>";
}
?>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php
if ($pageName == 'index'):

	$announcement = getData('general')['content']['announcement'];
	if ($announcement['message'] !== ''):
		?>
	<!-- Delay Message -->
	<aside class="popup-announcement" data-show-limit="<?php echo $announcement['showLimit']; ?>">
		<div class="container">
			<div>
				<p><?php echo $announcement['message']; ?></p>
			</div>
		</div>
		<div class="close"></div>
	</aside>
	<?php endif; ?>

<main>
	<header class="header <?php echo $customClass; ?>-header">
		<div class="container">
			<a href="./" class="logo">BetterBetting</a>
			<div class="menu-icon"></div>
			<div class="menu">
				<ul>
					<?php echo $menu; ?>
				</ul>
				<a href="https://ico.betterbetting.org/user" class="button-companion">Login</a>
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button orange w-165">REGISTER</a>
			</div>
		</div>
	</header>

<?php else: ?>
<main>
	<header class="header subsite-header <?php echo $customClass; ?>">
		<div class="container">
			<a href="./" class="logo">BetterBetting</a>
			<div class="menu-icon"></div>
			<div class="menu">
				<ul>
					<?php echo $menu; ?>
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
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button block colorful">Buy <b>Betr</b> <span>Tokens</span></a>
				<div class="extension"></div>
			</div>
		</div>
	</header>

<?php endif; ?>
