<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'events';
$customClass = 'events';
include_once('inc/template.head.php');


$eventsData = getData('events');
$mediaData = getData('media');

if ($eventsData['status'] !== 'error') {
	foreach ($eventsData['content'] as $eventId => $event) {
		$startTimestamp = date_format(date_create_from_format('H:i d-m-Y', $event['start']), 'U');
		$endTimestamp = date_format(date_create_from_format('H:i d-m-Y', $event['end']), 'U');
		$hasBegun = $startTimestamp > (date('U'));
		$hasEnded = $endTimestamp < (date('U'));

		$startDate = date('F j', $startTimestamp);
		$endDate = date('F j Y', $endTimestamp);
		$excerpt = $event['excerpt'] ? $event['excerpt'] : $event['content'];
		$tense = $hasEnded ? 'past' : 'upcoming';

		$contentElement = '';
		if ($hasEnded && $mediaData['status'] !== 'error') {
			foreach ($mediaData['content'] as $item) {
				if ($item['eventId'] !== $eventId)
					continue;

				switch ($item['type']) {
					case 'image':
						$itemElement .= "<img src='{$item['src']}' alt='{$item['name']}'>";
						break;

					case 'video':
						$itemElement .= "
							<div>
								<iframe width='560' height='315' src='{$item['src']}' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>
							</div>";
						break;
				}

				$contentElement .= "<div class='media-item {$item['type']}'>{$itemElement}</div>";
			}

			$contentElement .= "
					<div class='more-media category'>
						<a href='{$headerPageList['Media']}?q={$eventId}' class='button buy-now' title='See More media from this event!'>
							<img src='assets/images/svg/right_arrow.svg' alt='See More Link'>
							<span>See More</span>
						</a>
					</div>";
		} else {
			$contentElement .= "<p>{$event['content']}</p>";
		}

		$registerElement = $event['register'] && !$hasEnded ? "
			<div class='register'>
				<a href='{$event['register']}' class='button event-register' title='Register to {$event['name']}'>Register</a>
			</div>" : '';

		$eventItem = "
			<div class='{$tense}-event'>
				<div>
					<div class='logo'>
						<a href='{$event['website']}'>
							<img src='{$event['logo']}' alt='{$event['name']} Logo'>
						</a>
					</div>
					{$contentElement}
				</div>
				<div class='details'>
					<p class='details-text'>{$startDate} – {$endDate}, <a href='{$event['location']['link']}' title='Go to Google Maps'>{$event['location']['addressShort']}</a></p>
					{$registerElement}
				</div>
			</div>";

		if ($hasEnded)
			$pastEvents[] = $eventItem;
		else
			$futureEvents[] = $eventItem;
	}
} else {
	if ($eventsData['status'] == 'error')
		$errors[] =  $eventsData['content'];
	if ($mediaData['status'] == 'error')
		$errors[] =  $mediaData['content'];
}
?>
<body>
<?php include_once('inc/template.header.php'); ?>
<?php include_once('inc/module.google-analytics.php'); ?>

<div class="gradient-helper <?php echo $customClass; ?>">
	<div class="right-shape"></div>
	<div class="container">
	<?php if (count($futureEvents) > 0): ?>
		<div id="first-section">
			<h1>Upcoming Events</h1>
			<?php echo implode('', $futureEvents); ?>
		</div>
	<?php endif; ?>
	<?php if (count($pastEvents) > 0): ?>
		<div id="second-section">
			<h1>Past Events</h1>
			<?php echo implode('', $pastEvents); ?>
		</div>
		<div class="row more-media">
			<div class="col-xs-12 text-center">
				<a href="<?php echo $headerPageList['Media']; ?>" class="button buy-now">More Media</a>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($errors): ?>
		<h1>Events</h1>
		<?php echo implode('', $errors); ?>
	<? endif;?>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
