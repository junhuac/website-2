<?php
$customFooterScripts = "
<script>
	$('#modal-404')
		.modal('show')
		.on('hidden.bs.modal', function(e) {
			removeGet();
		});
</script>
";

$url = 'https://www.google-analytics.com/collect';
$cid = str_replace('GA1.2.', '', $_COOKIE['_ga']);

$data = "v=1&t=pageview&tid=UA-111023593-1&cid={$cid}&dp=404-modal&dt=BetterBetting%20%7C%20404%20on%20{$_SERVER['HTTP_REFERER']}";

$ping = curl_init($url);
curl_setopt($ping, CURLOPT_POST, 1);
curl_setopt($ping, CURLOPT_POSTFIELDS, $data);
curl_setopt($ping, CURLOPT_AUTOREFERER, 1);
curl_setopt($ping, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ping, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ping, CURLOPT_FRESH_CONNECT, 1);

curl_exec($ping);

?>
<aside id="modal-404" class="modal fade shield-404">
	<div class="close" data-dismiss="modal" aria-label="close"></div>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h1 class="modal-title">404 - Can&rsquo;t find that!</h1>
			</div>
			<div class="modal-body">
				<div class="row register">
					<div class="col-xs-12 col-sm-6 text-center">
						<button type="button" class="button buy-now previous-page" onclick="removeGet();" data-dismiss="modal">Back to Previous Page</button>
					</div>
					<div class="col-xs-12 col-sm-6 text-center">
						<a href="<?php echo $headerPageList['ICO']; ?>" class="button buy-now">Buy Tokens</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<script>
	function removeGet() {
		window.location = window.location.pathname + window.location.hash;
	};

	// If the page is reloaded
	if (window.performance) {
		if (performance.navigation.type == 1) {
			removeGet();
		}
	}
</script>
