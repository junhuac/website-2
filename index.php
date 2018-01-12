<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'index';
$customClass = 'homepage';
include_once('inc/template.head.php');
include_once('inc/config.social.php');

$socialItems = '';
foreach ($socialLinks as $id => $data) {
	$socialItems .= "<li><a href='{$data['url']}' data-toggle='tooltip' title='{$data['description']}'><i class='icon {$data['icon']}'></i></a></li>";
}
?>
<body>
<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: BetterBetting_Homepage_RET
URL of the web page where the tag is expected to be placed: https://betterbetting.org/
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 01/12/2018
-->
<script type="text/javascript">
	var axel = Math.random() + "";
	var a = axel * 10000000000000;
	document.write('<iframe src="https://8329922.fls.doubleclick.net/activityi;src=8329922;type=retgi0;cat=bette0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
	<iframe src="https://8329922.fls.doubleclick.net/activityi;src=8329922;type=retgi0;cat=bette0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<?php include_once('inc/template.header.php'); ?>
<?php include_once('inc/module.google-analytics.php'); ?>

<div class="homepage-banner <?php echo $customClass; ?>">
	<div class="container">
		<div class="banner-align-helper">
			<h1>
				Betting Currency of the Future
				<i class="betr_logo_big"></i>
			</h1>
			<p>
				Introducing BETR - the betting crypto-currency that will establish truly decentralised sports betting on the internet. Providing a Global Betting Liquidity Pool, BETR is being built by gaming industry veterans, for the industry. BETR will become the exclusive crypto-currency of some of the world's leading gaming operators.
			</p>
			<div class="button-line">
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button orange w-200">BUY BETR NOW</a>
				<div class="logos">
					<div class="logo-row">
						<img src="assets/images/payment/bitcoin_logo_long_white.png" alt="Bitcoin Logo">
						<img src="assets/images/payment/ethereum_logo_long_white.png" alt="Ethereum Logo">
					</div>
					<div class="logo-row">
						<img src="assets/images/payment/litecoin_logo_long_white.png" alt="Litecoin Logo">
						<img src="assets/images/payment/bitcoin-cash_logo_long_white.png" alt="Bitcoin-cash Logo">
						<img src="assets/images/payment/dash_logo_long_white.png" alt="Dash Logo">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="banner-extras">
	<div class="container">
		<div class="socials">
			<ul>
				<?php echo $socialItems; ?>
			</ul>
		</div>
		<div class="about-banner">
			<p>
				<strong>Endorsed by Ronnie O&rsquo;Sullivan (&ldquo;The Rocket&rdquo;)</strong>
				The Greatest Snooker Player to Ever Live
			</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="press">
		<h2>BETR Token Live now!</h2>
		<div class="container">
			<p>Token Audit: <a href="BETTER_BETTING_Foundation_Audit.pdf">here</a>.</p>
			<p>Token Contract Address: <a href="https://etherscan.io/token/0x763186eb8d4856d536ed4478302971214febc6a9">0x763186eb8d4856d536ed4478302971214febc6a9</a></p>
		</div>
		<h3>As seen in the Press</h3>
		<div class="container">
			<div class="press-logos">
				<a href="http://bitcoinprbuzz.com/betbetting-launches-pre-ico-betr-betting-currency-future/">
					<img src="assets/images/press/bitcoin-pr-buzz.png" alt="Bitcoin PR Buzz Logo">
				</a>
				<a href="https://finance.yahoo.com/news/betterbetting-launches-pre-ico-betr-004800210.html">
					<img src="assets/images/press/yahoo.png" alt="Yahoo Finance Logo">
				</a>
				<a href="http://www.igamingbusiness.com/press/betterbetting-launches-pre-ico-betr-betting-currency-future">
					<img src="assets/images/press/igamingbusiness.png" alt="iGamingBusiness Logo">
				</a>
				<a href="https://calvinayre.com/2017/11/24/press-releases/betterbetting-launches-pre-ico-betr-betting-currency-future/">
					<img src="assets/images/press/calvinayre.png" alt="Calvin Ayre Logo">
				</a>
				<a href="http://coinwisdom.org/35965-betterbetting-launches-pre-sales-for-the-future-of-betting-betr/">
					<img src="assets/images/press/coin-wisdom.png" alt="Coin Wisdom Logo">
				</a>
				<a href="http://news.morningstar.com/all/access-wire/ASWAccesswire483339MSN/betterbetting-launches-pre-ico-for-betr-the-betting-currency-of-the-future.aspx">
					<img src="assets/images/press/morningstar.png" alt="Morningstar Logo">
				</a>
				<a href="https://www.sbcnews.co.uk/technology/2017/11/24/betterbetting-launches-pre-ico-betting-cryptocurrency-betr/">
					<img src="assets/images/press/sbc-news.png" alt="SBC News Logo">
				</a>
				<a href="http://kicktrend.com/2017/11/24/icotrack-betterbetting-org-betterbetting-betting-currency-of-the-future/">
					<img src="assets/images/press/kicktrend.png" alt="Kicktrend Logo">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="gradient-helper top-wave">
	<div class="container">
		<h1>Why Better Betting</h1>
		<ul class="why-list">
			<li><strong>Peer to Peer betting with no central party</strong></li>
			<li><strong>Provably fair and unbreakable</strong></li>
			<li><strong>Applicability to other gaming activities</strong></li>
			<li><strong>All software will be open source and available for free</strong></li>
			<li><strong>Access to betting in more jurisdictions</strong></li>
			<li><strong>Access to much larger bets – global betting liquidity</strong></li>
			<li><strong>No risk to punters from underfunded operators</strong></li>
			<li><strong>Designed by the industry for the industry</strong></li>
		</ul>
		<h1 id="token-sales">Token Sales</h1>
		<p class="main">Development and marketing of the system will be funded through the issuing of a betting token (BETR). The number of BETR tokens is hard capped, with liquidity increases facilitated by an increase in token value. There will be an early bird bonus system built into the ICO to incentivise early investment, according to the following schedule:</p>

		<div class="traingle-image">
			<div class="button-helper">
				<div class="line"></div>
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button orange-gradient">$30.000.000</a>
			</div>
			<div class="counter-block left">
				<div>105% Tokens</div>
				<div>110% Tokens</div>
				<div>115% Tokens</div>
				<div>120% Tokens</div>
			</div>
			<picture>
				<source media="(min-width: 768px)" srcset="assets/images/triangle_asset.png">
				<source media="(max-width: 768px)" srcset="assets/images/HardCap_mobile.png">
				<img src="assets/images/triangle_asset.png" alt="Triangle">
			</picture>
			<div class="counter-block right">
				<div>$5.000.000 </div>
				<div>$4.000.000</div>
				<div>$3.000.000</div>
				<div>$2.000.000</div>
			</div>
			<div class="button-counter">
				<div class="button-count left">125% Tokens</div>
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button red live-now">BUY BETR</a>
				<div class="button-count right">$1.000.000</div>
			</div>
		</div>

		<h1>Reserve for future issue</h1>
		<p class="main">A reserve fund of tokens will be created as part of the initial token event to be sold on the market at the discretion of the foundation. This reserve fund will be not more than 10% of the amount issued at the ICO and will be held in trust and not released for at least 12 months. No further tokens will be created apart from ongoing maintenance tokens.</p>

		<h1>Ongoing Maintenance Tokens</h1>
		<p class="main">Ongoing maintenance tokens will be created periodically by the foundation and sold on the market to replenish tokens that are burnt as part of transaction fees. Transaction fees will be based on the underlying gas price consumed by the transaction and will be fixed per transaction regardless of the amount of the bet.</p>

		<h1>$30m Hard Cap</h1>
		<p class="main main-bg">Once the target $30M in ICO sales is reached there will be no further token sales apart from maintenance tokens and reserve funds. The total token pool is hard capped at 650,000,000</p>

		<a href="<?php echo $headerPageList['ICO']; ?>" class="button huge button-investment"><span class="bg-wrapper">650,000,000 Tokens</span></a>
		<span class="small text-center" style="display: block;">Total number of BETR’s are capped and cannot be increased after ICO.</span>

		<div class="bbb-section">
			<h1>Will seek to secure a Listing on Leading Exchanges</h1>
			<div class="list">
				<div>
					<img src="assets/images/kraken_logo.png" alt="">
					<span>Founded in 2011, San Francisco-based Kraken is the largest Bitcoin exchange in euro volume and liquidity and also trading Canadian dollars, US dollars, British pounds and Japanese yen. Kraken is trusted by hundreds of thousands of traders, the Tokyo government's court-appointed trustee, and Germany's BaFin regulated Fidor Bank.</span>
				</div>
				<div>
					<img src="assets/images/logotypes/block_ex.png" alt="">
					<span>The BlockEx Digital Asset Exchange Platform is fully API driven and permissioned. This allows all features of the platform to be used independently as its own product whether is asset creation tool, post trade services or the exchange’s matching engine.</span>
				</div>
				<div>
					<img src="assets/images/logotypes/hit_btc.png" alt="">
					<span>Founded in 2013 with 6 million euro venture capital, HitBTC trading platform is known for its state-of-the-art matching engine, variety of blockchain solutions support as well as its friendly customer service. The platform's dependable API is extremely stable and will satisfy the needs of algorithmic trading systems and provides an easy integration.</span>
				</div>
				<div>
					<img src="assets/images/logotypes/bittrex-logo-white.png" alt="">
					<span>Bittrex is a next generation crypto trading platform built and operated in the United States by crypto enthusiasts with extensive development and security background. We have over 50 combined years in the computer industry at companies like Microsoft, Amazon, Qualys, and Blackberry and have made careers developing secure and scalable software.</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="gradient-helper gradinet-timeline">
	<div class="end-section-triangle"></div>
	<div class="container">
		<h1>
			Roadmap
		</h1>
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
<div class="gradient-helper gradient-stage">
	<div class="container">
		<div class="stage">
			<h2>ICO ($2m-$30m)</h2>
			<span class="small">November 2017</span>

			<div class="bbb-values">
				<div>
					<i class="icon icon-bbb"></i>
					1 BETR
				</div>
				<div class="equals">
					<span class="small">equals</span>
				</div>
				<div>
					<i class="icon icon-dollar"></i>
					0.10 USD
				</div>
				<!-- <div>
					<i class="icon icon-btc"></i>
					0.00010 BTC
				</div>
				<div>
					<i class="icon icon-eth"></i>
					0.008 ETH
				</div> -->
			</div>

			<div class="stage-steps">
				<div class="stage-step">
					<div class="step-description">
						<span class="small">$0 - $1m</span>
					</div>
					<div class="step value-150">
						<p>125% Tokens</p>
					</div>
				</div>
				<div class="stage-step">
					<div class="step-description">
						<span class="small">$1m - $2m</span>
					</div>
					<div class="step value-140">
						<p>120% Tokens</p>
					</div>
				</div>
				<div class="stage-step">
					<div class="step-description">
						<span class="small">$2m - $3m</span>
					</div>
					<div class="step value-130">
						<p>115% Tokens</p>
					</div>
				</div>
				<div class="stage-step">
					<div class="step-description">
						<span class="small">$3m - $4m</span>
					</div>
					<div class="step value-120">
						<p>110% Tokens</p>
					</div>
				</div>
				<div class="stage-step">
					<div class="step-description">
						<span class="small">$4m - $5m</span>
					</div>
					<div class="step value-110">
						<p>105% Tokens</p>
					</div>
				</div>
			</div>

			<div class="button-line">
				<div class="button-line-inner">
				<a href="<?php echo $headerPageList['ICO']; ?>" class="button buy-now">BUY NOW</a>
					<div class="logos grey">
						<div class="logo-row">
							<img src="assets/images/payment/bitcoin_logo_long_white.png" alt="Bitcoin Logo">
							<img src="assets/images/payment/ethereum_logo_long_white.png" alt="Ethereum Logo">
						</div>
						<div class="logo-row">
							<img src="assets/images/payment/litecoin_logo_long_white.png" alt="Litecoin Logo">
							<img src="assets/images/payment/bitcoin-cash_logo_long_white.png" alt="Bitcoin-cash Logo">
							<img src="assets/images/payment/dash_logo_long_white.png" alt="Dash Logo">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="homepage-chart">
			<div class="chart-image">
				<img src="assets/images/charts.png" alt="">
			</div>
			<div class="chart-descriptions">
				<div class="foundation">
					<h4>Founders &amp; Staff 24%</h4>
				</div>
				<div class="investors">
					<h4>Early Stage Investors 5%</h4>
				</div>
				<div class="coins-tokens">
					<h4>Advisors &amp; Bounty 7%</h4>
				</div>
				<div class="protocol-miners">
					<h4>ICO 55%</h4>
				</div>
				<div class="reserve">
					<h4>Reserve Fund 9%</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="team-section">
	<div class="container"><h1>Our Team</h1></div>
	<div class="container">
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#brink">
				<img src="assets/images/team/brink.png" alt="">
				<h3>Adriaan Brink</h3>
				<span class="small">Founder</span>
				<p><strong>iCoins</strong> Founder (2007) pioneer of Crypto-Currency</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#ian">
				<img src="assets/images/team/ian.png" alt="">
				<h3>Ian Sherrington</h3>
				<span class="small">CTO</span>
				<p>Created the first ever Internet Sportsbook in 1996 <strong>Intertops.com</strong></p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#ehrlich">
				<img src="assets/images/team/ehrlich.png" alt="">
				<h3>Hilly Ehrlich</h3>
				<span class="small">Co-Founder</span>
				<p>Director of World’s <strong>Fastest Growing Poker Network</strong></p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#rankin">
				<img src="assets/images/team/rankin.png" alt="">
				<h3>Mitchell Rankin</h3>
				<span class="small">Managment Team</span>
				<p>Founder and <strong>CTO of Optimaplay</strong></p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#vlad">
				<img src="assets/images/team/vlad.png" alt="">
				<h3>Vlad Agaev</h3>
				<span class="small">Consultant</span>
				<p><strong>Blockchain</strong> developer</p>
			</a>
		</div>
	</div>
	<div class="container"><h2>Advisors</h2></div>
	<div class="container">
		<div class="person rocket">
			<a href="<?php echo $headerPageList['Team']; ?>#ronnie">
				<div class="image">
					<img src="assets/images/team/ronnie.png" alt="">
					<i class="icon icon-medal"></i>
				</div>
				<h3>Ronnie O’Sullivan</h3>
				<span class="small">Advisor</span>
				<p><strong>The Greatest Snooker Player</strong>  to Ever Live</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#matonis">
				<img src="assets/images/team/matonis.png" alt="">
				<h3>Jon Matonis</h3>
				<span class="small">Advisor</span>
				<p>Founding Director of the <strong>Bitcoin Foundation</strong></p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#jez">
				<img src="assets/images/team/image13.png" alt="">
				<h3>Jez San OBE</h3>
				<span class="small">Advisor</span>
				<p>Founder and CEO of Funfair.io</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#benz">
				<img src="assets/images/team/benz.png" alt="">
				<h3>Eric Benz</h3>
				<span class="small">Advisor</span>
				<p><strong>Cryptopay</strong> Managing Director, <strong>BlockEx</strong> Senior Advisor</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#vanrenen">
				<img src="assets/images/team/vanrenen.png" alt="">
				<h3>David Vanrenen</h3>
				<span class="small">Advisor</span>
				<p>Ex-chairman - Earthport PLC (LSE:EPT)</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#caselli">
				<img src="assets/images/team/caselli.png" alt="">
				<h3>Michael Caselli</h3>
				<span class="small">Advisor</span>
				<p>Founder of <strong>iGaming</strong> business</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#rasmus">
				<img src="assets/images/team/image16.png" alt="">
				<h3>Rasmus Sojmark</h3>
				<span class="small">Advisor</span>
				<p>CEO &amp; Founder of SBC Global and Oddslife.com</p>
			</a>
		</div>
		<!-- <div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#kamila">
				<img src="assets/images/team/image11.png" alt="">
				<h3>Kamila Bobinska</h3>
				<span class="small">Advisor</span>
				<p>Entrepreneur and investor focused on blockchain</p>
			</a>
		</div> -->
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#dennis">
				<img src="assets/images/team/image6.png" alt="">
				<h3>Dennis Van Maanen</h3>
				<span class="small">Advisor</span>
				<p>Founder of Esanda Recruitment</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#lyceum">
				<img src="assets/images/team/image17.png" alt="">
				<h3>Lyceum Media</h3>
				<span class="small">Media Partner</span>
				<p>iGaming PR &amp; Events</p>
			</a>
		</div>
		<div class="person">
			<a href="<?php echo $headerPageList['Team']; ?>#sbc">
				<img src="assets/images/team/sbc.png" alt="">
				<h3>SBC</h3>
				<span class="small">Media Partner</span>
				<p>Sports Betting Events, News &amp; Community</p>
			</a>
		</div>
	</div>
	<div class="container"><h2>Strategic Partners</h2></div>
	<div class="container">
		<div class="partner">
			<a href="<?php echo $headerPageList['Team']; ?>#2bet2">
				<img src="assets/images/team/image1.png" alt="">
			</a>
		</div>
		<div class="partner">
			<a href="<?php echo $headerPageList['Team']; ?>#optimaplay">
				<img src="assets/images/team/image2.png" alt="">
			</a>
		</div>
		<!-- <div class="partner">
			<a href="<?php echo $headerPageList['Team']; ?>#sorainen">
				<img src="assets/images/team/image3.png" alt="">
			</a>
		</div> -->
		<div class="partner">
			<a href="<?php echo $headerPageList['Team']; ?>#coinpoint">
				<img src="assets/images/team/coinpoint.png" alt="">
			</a>
		</div>
	</div>
	<a href="<?php echo $headerPageList['Team']; ?>" class="button more-team">More About the Team</a>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
