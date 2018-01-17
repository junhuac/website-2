<?php
include_once('config.navigation.php');

$customClass = !empty($customClass) ? $customClass : '';


$headerCurrencyData = getData('general');

$menu = '';
foreach ($headerPageList as $name => $url) {
	$class = '';

	if (!strcasecmp($name, $pageName))
		$class = 'class="active"';

	$menu .= "<li><a $class href='{$url}'>{$name}</a></li>";
}

if ($headerCurrencyData['status'] == 'ok' && $pageName !== 'index') {
	foreach ($headerCurrencyData['content']['currencies'] as $currency) {
		$headerCurrencies[] = "
			<div class='header-currency'>
				<span class='currency-logo-{$currency}'></span>
			</div>";
	}
	unset($currency);
}
?>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<?php
include_once('inc/module.google-analytics.php');
if (!empty($_GET['404']))
	include_once('inc/module.404.php');


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
				<div class="mobile-buttons">
					<a href="https://ico.betterbetting.org/user" class="button mobile-button-companion">Login</a>
					<a href="<?php echo $headerPageList['ICO']; ?>" class="button orange w-165">Register</a>
				</div>
				<ul>
					<?php echo $menu; ?>
				</ul>
				<a href="https://ico.betterbetting.org/user" class="button-companion">Login</a>
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button orange w-165">Register</a>
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
			<?php if (!empty($headerCurrencies)): ?>
				<div class="buy-token-currencies">
					<div class="text">Buy <b>BETR</b> with</div>
					<div class="currencies">
						<?php echo implode('', $headerCurrencies); ?>
					</div>
				</div>
			<?php endif; ?>
			<div class="buy-token-btn">
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button block colorful">Buy <b>Betr</b> <span>Tokens</span></a>
				<div class="extension"></div>
			</div>
		</div>
	</header>

<?php endif; ?>
