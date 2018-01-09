<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'careers';
$customClass = 'careers';
include_once('inc/config.php');
include_once('inc/template.head.php');

// Helper function for infinite array walk
function loopListItems($content) {
	if (is_array($content)) {
		foreach ($content as $parent => $child) {
			$children = loopListItems($child);

			// Don't let array indexes print as their own array
			if (!is_numeric($parent)) {
				$result .= "
					<li>{$parent}
						<ul>
							{$children}
						</ul>
					</li>";
			} else {
				$result .= $children;
			}
		}
	} else {
		$result = "<li>{$content}</li>";
	}

	return $result;
}


$jobsData = getData('vacancies');
if ($jobsData['status'] == 'error') {
	$errors[] = $jobsData['content'];
} else {
	$jobList = [];
	$jobContent = '';
	foreach ($jobsData['content'] as $id => $content) {
		if (!$content['visible'])
			continue;

		$jobList[] = "<li><a href='#job{$id}'>{$content['title']}</a></li>";

		$title = "<h2>{$content['title']}</h2>";
		$lists = '';
		$description = '';

		if (!empty($content['description']))
			$description = "<p>{$content['description']}</p>";

		if (!empty($content['lists'])) {
			foreach ($content['lists'] as $category => $content) {
				$category = ucwords(str_replace('_', ' ', $category));
				$lists .= "<h4>{$category}</h4>";
				$items = loopListItems($content);
				$lists .= "
					<ul>
						{$items}
					</ul>";
			}
		}

		$jobContent .= "
			<div id='job{$id}' class='item'>
				{$title}
				{$description}
				{$lists}
			</div>";
	}
}
?>
<body>
	<?php include_once('inc/template.header.php'); ?>
	<?php include_once('inc/module.google-analytics.php'); ?>

	<div class="gradient-helper <?php echo $customClass; ?>">
		<div class="right-shape"></div>
		<div class="container">
			<h1>Working with BetterBetting</h1>
			<p class="main">Thanks for your interest in the BETR token. So you want to buy BETR tokens? That&rsquo;s great! We have prepared a step-by-step guide for you. In case of any questions, we&rsquo;re glad to help you in our live chat on <a href="https://twitter.com/BETRBetting">Telegram</a> or <a href="https://t.me/joinchat/HNsEWQ-L0aCjHMsmKW-d_w">Twitter</a> or email us <a href="mailto:ico@betterbetting.org">here</a>.</p>

			<div class="row register">
				<div class="col-xs-12 text-center">
					<a href="<?php echo $headerPageList['Contact']; ?>" class="button buy-now">Apply Now!</a>
				</div>
			</div>
			<div>
				<?php if (!$errors): ?>
					<?php if (count($jobList) > 1): ?>
						<p>Available jobs:</p>
						<ol>
							<?php echo implode('', $jobList); ?>
						</ol>
					<?php endif; ?>
					<div class="jobs">
						<?php echo $jobContent; ?>
					</div>
				<?php else: ?>
					<p><?php echo implode('</p><p>', $errors); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
