<!doctype html>
<html class="no-js" lang="en">
<?php
$pageName = 'technical';
$customClass = 'technical';
include_once('inc/template.head.php');
?>
<body>
<?php include_once('inc/template.header.php'); ?>

<div id="content" class="gradient-helper <?php echo $customClass; ?>">
	<div class="right-shape"></div>
	<div class="container">
		<h1>The BETR Betting Model</h1>
		<p class="main">By eliminating the “middle man” – essentially the escrow agent – using blockchain technology it is possible to build sportsbook clients that operate with no human or business entity between betting pairs.</p>
		<div class="technical-image">
			<picture>
				<source media="(min-width: 768px)" srcset="assets/images/technical_image.png">
				<source media="(max-width: 768px)" srcset="assets/images/technical-image-small.png">
				<img class= "img-responsive" src="assets/images/technical-image.png" alt="Technical Image">
			</picture>

		</div>
		<div class="technical-icons">
			<div class="item">
				<i class="icon icon-peer_to_peer"></i>
				<h4>Peer to Peer Betting with no Central Party</h4>
				<p>By providing a robust escrow and settlement service between 2 parties who do not know one another and have no common operator the system provides access to betting opportunities that did not previously exist. </p>
			</div>
			<div class="item">
				<i class="icon icon-activities"></i>
				<h4>Applicability to other Activities</h4>
				<p>A transaction does not have to comprise a bet – the same system can be used for any activity where funds are escrowed prior to a result and then settled to the winner (eg. A game of poker) although we will focus on betting initially.</p>
			</div>
			<div class="item">
				<i class="icon icon-operate"></i>
				<h4>No requirement for a regulated entity</h4>
				<p>As there is no central intermediary there is no licensable entity (such as a bookmaker or exchange).  This does not mean that bookmakers and exchanges cannot participate in the action, but they would simply be another entity on the system.  </p>
			</div>
			<div class="item">
				<i class="icon icon-access"></i>
				<h4>Access to betting in jurisdictions where dealing with operators is illegal</h4>
				<p>Most jurisdictions that prohibit sportsbooks focus on the operator as the entity to be licensed.  Individuals wishing to bet do not break the law provided they do not bet with an unlicensed operator.  With this system the bet is always with another individual – there is no operator.</p>
			</div>
			<div class="item">
				<i class="icon icon-access"></i>
				<h4>Open Source Systems</h4>
				<p>Ultimately the software and standards that comprise the system will be open source and free for anyone to copy and use on the same blockchain.</p>
			</div>
			<div class="item">
				<i class="icon icon-diamond"></i>
				<h4>Access to large wholesale bets</h4>
				<p>There is a massive market for betting where the amounts exceed those that individual operators are prepared to risk.  This system will provide the liquidity to enable these bets to be placed – there are no system limits.  Bets are pooled so many parties can match a single bet.</p>
			</div>
			<div class="item">
				<i class="icon icon-scale"></i>
				<h4>Provably fair and Unbreakable</h4>
				<p>The software and transactions are provably fair and robust. Punters need to know that they will be paid their winnings – no questions asked!</p>
			</div>
			<div class="item">
				<i class="icon icon-founding"></i>
				<h4>Ease of funding for betting</h4>
				<p>No more credit cards, wire transfers and other outdated payment mechanisms. BETR (Betting coins) will trade on major crypto exchanges and can always be bought and sold against coins such as bitcoin and ethereum.</p>
			</div>
			<div class="item">
				<i class="icon icon-risk"></i>
				<h4>No risk to punters from underfunded Operators</h4>
				<p>Punters have no risk of operators who have insufficient funds to lay their bets – in this system all bets are prefunded on both sides.</p>
			</div>
			<div class="item">
				<i class="icon icon-winning"></i>
				<h4>Instant access to Winnings</h4>
				<p>Winnings are distributed as soon as a bet is resulted and available in instant crypto funds for use as the owner sees fit.</p>
			</div>
		</div>
	</div>

	<div class="compontents">
		<div class="container">
			<h1>Components of a Distributed Model</h1>

			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="distributed-model-image">
						<img src="assets/images/svg/distributed_model.svg" alt="">
					</div>
				</div>
				<div class="col-sm-7">
					<h2>Escrow and Settlement</h2>
					<p>Placing a bet with another party entails two important functions.  The first is to hold funds from the time that a bet is made until it is settled. The second is settlement in favour of the winner (assuming there is one – refunds to both parties in the event of a tie or cancellation).</p>
					<br />
					<p>Settlement poses a challenge. Any system that is automated would have to have a robust and agreed settlement system that is immune to human or system error. We will to cater for a number of different resulting/settlement systems – the differences being simply how the winner is determined.</p>
				</div>
			</div>

			<div class="technical-icons">
				<div class="item">
					<i class="icon icon-consensus"></i>
					<h4>Consensus</h4>
					<p>In a similar way to that in which the blockchain is kept inherently honest by all parties agreeing, settlement would be according to a majority vote. By understanding the nature of a bet (through the distributed directory) and observing resulting from other providers, bets would settle according to the majority view</p>
				</div>
				<div class="item">
					<i class="icon icon-layor"></i>
					<h4>Layor</h4>
					<p>Bets may be offered with the layor providing the result. This is normal for all online sportsbooks today and it is likely that they would choose to continue to provide their own resulting.</p>
				</div>
				<div class="item">
					<i class="icon icon-arbitration"></i>
					<h4>3rd party Arbitration</h4>
					<p>An interface will be provided for 3rd parties to provide settlement and arbitration.  There would be a fee associated with this service.  3rd party arbitration will be built into the protocol as one method of resulting.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="authentication">
		<div class="container">
			<div class="col-sm-7">
				<h2>
					Authentication
				</h2>
				<p>
					While parties may remain anonymous it is intended that this system can also be integrated with existing sports books or exchanges.  In this scenario placing a bet may require an account at the counterparty – bets that are offered may be flagged as requiring an account and authentication.
				</p>
				<p>
					The process of registration and authentication would also imply that those bets would not be pooled with others. We intend to introduce a distributed authentication mechanism to facilitate the offering of bets by entities that require player accounts.
				</p>
			</div>
			<div class="col-sm-5">
				<div class="authentication-image">
					<img src="assets/images/authentication.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="directory">
		<div class="container">
			<h2>The Directory</h2>
			<div class="row">
				<div class="col-sm-6">
					<p>It is no use having a wonderful betting system if the users cannot find the bet that they want.  Not only that, in order for the system to present sufficient liquidity (so bettors can find the bet that they want to make), and to provide optimal volume for consensus settlement, it is important that all software clients see the same selections as the same thing.  As an example, it is equally valid to call a match winner market “match winner” or “winner” or even “moneyline 1X2”.  The system needs to provide a mechanism to avoid duplication of markets and present a unified interface between disparate parties.</p>
					<p>A distributed directory of bets will be built in to the system making it simple for software clients to present a logically ordered menu of choices.  The system will combine the many “standards” for event and market naming so that the same bet is treated equally regardless of the source.</p>
					<p>This system presents two distinct advantages to the overall ecology. In the first instance it makes it easy to find any specific bet.</p>

				</div>
				<div class="col-sm-6">
					<p>Secondly, and very importantly it makes it possible for bets to be standardised and pooled together.</p>
					<p>By ensuring that anyone wishing to offer a specific bet uses a common registry we are able to increase the reliability of the consensus, and also to combine liquidity into a pool so bets are not simply one on one.
					So (as an example) assume I want to lay the Chelsea to win bet for this weekend’s premier league fixture.  I decide I am prepared to lay $1000.  Someone else also wishes to lay $1000.  There is now $2000 available for anyone wishing to back Chelsea.  The user would see a unified interface – disparate layors are agreeing on the identification of the same bet and their liquidity combined. As a punter I can come in and back Chelsea to win for $1500 and this would be shared across both Layors – as two separate transactions.</p>
					<p>The more entities on either side of the bet that exist the better consensus settlement will work.</p>

				</div>
			</div>
		</div>
	</div>

	<div class="target-market">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<img src="assets/images/targetmarket.png" alt="">
				</div>
				<div class="col-sm-7">
					<h2>Different views based&nbsp;on Target Market</h2>
					<p>While the API will provide all functionality to all participants it is anticipated that there would be more specific apps built that focus on the intended end user.  As an example, a sports bettor would in general use an interface similar to modern sports betting apps where bets can easily be found and taken with no concern for the underlying markets and events or laying prices.</p>
					<br />
					<p>Sportsbooks and wholesale bettors would utilise the lay side of bets and may or may not integrate the directory services.  Some implementation of directory services and lay pricing may be purely API level integrations with existing sports books or exchanges.</p>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="gradient-helper technical no-shape">
	<div class="miners">
		<div class="container">
			<h2>
				The Better Betting Node
			</h2>
			<p class="main">The BBN is a downloadable application which is installed on the user’s device and incorporates an ethereum wallet. It is similar to a blockchain application in so far as it operates without central servers and the nodes communicate with one another to maintain the state of the database. BBN does not need to store data indefinitely, and that is one aspect that sets it apart from standard blockchain networks where every node (or miner) stores a complete copy of the transaction ledger.
				<br /><br />
				By creating the BBN to be meet the precise technical requirements of the Bet Creators, the Bettors and API clients, the application will be fast and will have no 3rd party running costs. In its interface with Ethereum for creating and resulting bet contracts, the BBN will restrict the Ethereum costs to a minimum whilst still maintaining the decentralized nature of the application.
			</p>
			<div class="technical-icons two-in-row">
				<div class="item">
					<i class="icon icon-transaction"></i>
					<h4>Transaction Confirmation</h4>
					<p>Every transaction, whether placing, confirming or settling a bet is maintained on the blockchain via the BBN integrated Ethereum wallet.</p>
				</div>
				<div class="item">
					<i class="icon icon-directory"></i>
					<h4>Directory Service</h4>
					<p>Acting as a mirror service miners facilitate a coordinated, consistent distributed directory service.  It is this key building block that enables bets on the same selection to be pooled, both for aggregate betting and for consensus settlement. The more bets that are placed on any single selection the more robust the system becomes.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="cashiers">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="cashiers-image-1">
						<img src="assets/images/svg/cashiers_image.svg" alt="">
					</div>
					<div class="cashiers-image-2">
						<img src="assets/images/svg/cashiers_image-2.svg" alt="">
					</div>
				</div>
				<div class="col-sm-7">
					<h2>Cashiers</h2>
					<p>BETR will be listed on major crypto exchanges, making interchange seamless and priced according to supply and demand. So, as an example, the initial issue may be limited to $50M worth of coins. In the event that there is $500M in play at any one time, the price of each coin will have to increase from 10c to $1 in order to accommodate the increased volume.</p>
					<p>Usage of the coins is fundamental to any ICO – we believe that the betting market offers opportunities for token usage that far exceeds many other coins.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="apis">
		<div class="container">

			<h1>Crypto API</h1>
			<p class="main">BETR will be built on the Ethereum blockchain.  If in the future this becomes too slow or better blockchains emerge, it may migrate. The ICO token and BETR coin will be a standard ERC-20 token which provides for easy technical integration with 3<sup>rd</sup> part exchanges.</p>
		</div>
	</div>
</div>

<?php include_once('inc/template.footer.php'); ?>

</body>
</html>
