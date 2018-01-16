<?php
include_once('inc/config.social.php');
// Start of DoubleClick Floodlight Tag: Please do not remove
// Activity name of this tag: BetterBetting_Telegram_CONF
// URL of the web page where the tag is expected to be placed: https://t.me/joinchat/HNsEWQ-L0aCjHMsmKW-d_w
// This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
// Creation Date: 01/12/2018
//
// Conversion to PHP means that it is now placed on join-telegram.php

$rand = rand() * 10000000000000;

$url = "https://8329922.fls.doubleclick.net/activityi;src=8329922;type=confm0;cat=bette00;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord={$rand}?";

$ping = curl_init($url);
curl_setopt($ping, CURLOPT_AUTOREFERER, 1);
curl_setopt($ping, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ping, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ping, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($ping, CURLOPT_HEADER, getallheaders());

curl_exec($ping);
$errors[] = curl_error($ping);
unset($ping);

// Send without campaign
$url = 'https://www.google-analytics.com/collect';
$cid = str_replace('GA1.2.', '', $_COOKIE['_ga']);

$data = "v=1&t=pageview&tid=UA-111023593-1&cid={$cid}&dp=%2Fjoin-telegram&dt=BetterBetting%20%7C%20Join%20Telegram";

$ping = curl_init($url);
curl_setopt($ping, CURLOPT_POST, 1);
curl_setopt($ping, CURLOPT_POSTFIELDS, $data);
curl_setopt($ping, CURLOPT_AUTOREFERER, 1);
curl_setopt($ping, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ping, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ping, CURLOPT_FRESH_CONNECT, 1);

curl_exec($ping);
$errors[] = curl_error($ping);

if ($errors) {
	if ($_GET['r'] < 2) {
		$retries = $_GET['r'] ? $retries + 1 : 1;
		header("Location: /join-telegram?r={$retries}");
	}
}

header("Location: {$socialLinks['telegram']['url']}");
