<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BetterBetting | Script Index</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicons/apple-touch-icon.png?v=Jy7WrKnjGe">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png?v=Jy7WrKnjGe">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png?v=Jy7WrKnjGe">
	<link rel="manifest" href="../assets/images/favicons/manifest.json?v=Jy7WrKnjGe">
	<link rel="mask-icon" href="../assets/images/favicons/safari-pinned-tab.svg?v=Jy7WrKnjGe" color="#232836">
	<link rel="shortcut icon" href="../assets/images/favicons/favicon.ico?v=Jy7WrKnjGe">
	<meta name="msapplication-config" content="../assets/images/favicons/browserconfig.xml?v=Jy7WrKnjGe">
	<meta name="theme-color" content="#232836">
</head>
<body bgcolor="#000000">
	<font color="#FFFFFF" face="Verdana,Arial" size="3">
		<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100%; width: 100%; text-align: center;">
			<span style="font-weight: bold; text-transform: uppercase;margin-top: 0.5rem;">BetterBetting Temporaray Admin Dashboard</span><br>
			&nbsp;<br>
			<font size="2">
				<p>Click any of the links below to perform specific tasks</p>
				<ul style="padding-left:0;color:white;font-weight:bold;text-decoration:none;list-style-type:none;text-transform:uppercase;">
					<?php
					foreach(glob("*.php") as $script) {
						if ($script == 'index.php')
							continue;

						$scriptName = str_replace(['-', '.php'], [' ', ''], $script);
						echo '<li><a style="color: white;" href="' . $script . '">' . $scriptName . '</a></li>';
					}
					unset($script);
					?>
				</ul>
			</font>
		</div>
	</font>
</body>
</html>
