<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'roadmap';
$customClass = 'roadmap';
$customFooterScripts = "
<script>
	$(document).ready(function() {
		shiftRoadmapItems('.roadmap-wrapper');
		$(window).resize(function() {
			shiftRoadmapItems();
		});
	});
</script>";

include_once('inc/template.head.php');
?>
<body>
<?php include_once('inc/template.header.php'); ?>

<div id="content" class="gradient-helper <?php echo $customClass; ?>" >
	<div class="container">
		<h1 class="roadmap-title">Better Betting Roadmap</h1>
		<a href="<?php echo $headerPageList['ICO']; ?>" class="button huge"><span class="bg-wrapper">650,000,000 Tokens</span></a>
		<div class="small text-center" style="display: block;">Total number of BETR are capped and cannot be increased after ICO.</div>
		<div class="roadmap-wrapper">
			<div class="first-line">
				<div class="timeline-single hidden"></div>
				<div class="timeline-single text-right dot-12">
					<h3>Design and Setup</h3>
					<div class="small">October 30 2017</div>
					<p>Preparation for launch, PR, Corporate Technology.</p>
				</div>
				<div class="timeline-single no-shape"></div>
				<div class="timeline-single text-right dot-18">
					<h3>Public Sales</h3>
					<div class="small">December 15 2017</div>
					<p>Public Sales Start</p>
				</div>
				<div class="timeline-single no-shape"></div>
				<div class="timeline-single text-right dot-20">
					<h3>Betting API Launched</h3>
					<div class="small">March 2018</div>
					<p>
						Initial Betting API defined
						Token Encapsulates API. Bets can be placed using tokens
					</p>
				</div>
				<div class="timeline-single no-shape"></div>
				<div class="timeline-single text-right dot-24">
					<h3>Authentication and Identification</h3>
					<div class="small">July 2018</div>
					<p>Launch of Identified Layors Introduction of Authentication</p>
				</div>
				<div class="timeline-single no-shape"></div>
				<div class="timeline-single text-right dot-36">
					<h3>Bookie Dapp</h3>
					<div class="small">September 2018</div>
					<p>Reference code for Bookie app released</p>
				</div>
			</div>
			<div class="image">
				<img src="assets/images/roadmap_image.png" alt="">
				<div class="timeline-single hidden" data-home="false"></div>
				<div class="timeline-single dot-40" data-dest="10">
					<h3>Directory V2</h3>
					<div class="small">October 2018</div>
					<p>True Decentralisation comes to the Directory</p>
				</div>
			</div>
			<div class="last-line">
				<div class="timeline-single no-shape" data-home="false"></div>
				<div class="timeline-single dot-15" data-dest="2">
					<h3>Launch and Presales</h3>
					<div class="small">November 22 2017</div>
					<p>
						Public  Announcement, Website go live, Active marketing starts.
						Presales start to Institutions.
						Countdown to Public Sales.
					</p>
				</div>
				<div class="timeline-single no-shape" data-home="false"></div>
				<div class="timeline-single text-right dot-20" data-dest="4">
					<h3>Token Tradable</h3>
					<div class="small">January 2018</div>
					<p>
						Final end to Public Sales if not ended sooner
						Token tradable within 2 weeks
					</p>
				</div>
				<div class="timeline-single no-shape" data-home="false"></div>
				<div class="timeline-single text-right dot-24" data-dest="6">
					<h3>Directory V1</h3>
					<div class="small">May 2018</div>
					<p>
						First version of Better Betting Node released
					</p>
				</div>
				<div class="timeline-single no-shape" data-home="false"></div>
				<div class="timeline-single text-right dot-28" data-dest="8">
					<h3>Betting Dapp</h3>
					<div class="small">September 2018</div>
					<p>
						Reference code for betting Dapp released
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
