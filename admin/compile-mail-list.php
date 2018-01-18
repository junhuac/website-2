<?php
if ($_POST) {
	$basePath = getcwd();
	$baseUrl = sprintf(
		'%s://%s%s',
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		dirname($_SERVER['REQUEST_URI'])
	);
	$recaptcha_secret = '6LfCnjkUAAAAADXMBH-Kx92G9RVirugcwl8yX52u'; // Keep Secret!
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_response = $_POST['g-recaptcha-response'];

	//// Check reCaptcha
	if (!empty($recaptcha_response)) {
		$curl_vars = "secret={$recaptcha_secret}&response={$recaptcha_response}";

		$ch = curl_init($recaptcha_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_vars);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$curl_response = json_decode(curl_exec($ch), true);

		if (!$curl_response['success']) {
			$error[] = 'ReCaptcha error: ' . $curl_response['error-codes'][0];
		}
	} else {
		$errors[] = 'Please tick the reCaptcha box below to prove that you are not a robot.';
	}

	if (empty($errors)) {
		if (is_dir($basePath . '/data')) {
			foreach (glob("data/*") as $file) {
				unlink($file);
			}
		} else {
			mkdir($basePath . '/data');
		}
	}

	if ($_FILES['email-list-upload']['size'] > 0) {
		// Sort out File Upload
		$responseType = 'file';

		if (is_array($_FILES['email-list-upload']['error']))
			$errors[] = 'Invalid parameters.';

		switch ($_FILES['email-list-upload']['error']) {
			case UPLOAD_ERR_OK:
				break;

			case UPLOAD_ERR_NO_FILE:
				$errors[] = 'No file selected.';
				break;

			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				$errors[] = 'Exceeded file size limit.';
				break;

			default:
				$errors[] = 'Unknown file upload error.';
				break;
		}

		$finfo = new finfo(FILEINFO_MIME_TYPE);
		if (false === $ext = array_search(
			$finfo->file($_FILES['email-list-upload']['tmp_name']),
			array(
				'txt' => 'text/plain',
				'csv' => 'text/csv',
				'csv' => 'application/vnd.ms-excel'
			),
			true
		)) {
			var_dump($finfo->file($_FILES['email-list-upload']['tmp_name']));
			$errors[] = 'Invalid file format. Must be CSV.';
		}

		$fileLocation = sprintf(
			'%s/data/%s.%s',
			$basePath,
			sha1_file($_FILES['email-list-upload']['tmp_name']),
			$ext
		);

		if (!move_uploaded_file(
			$_FILES['email-list-upload']['tmp_name'],
			$fileLocation
		)) {
			$errors[] = 'Failed to move file.';
		}
	} else {
		$responseType = 'string';
		if (strlen($_POST['email-list']) < 1)
			$errors[] = 'No emails given.';
		if (!preg_match('/@{1}(\w+).(\w+)/', $_POST['email-list']))
			$errors[] = 'No emails detected in your response.';
	}

	if (empty($errors)) {
		if ($responseType == 'file') {
			$rawEmails = str_getcsv(file_get_contents($fileLocation));

			$emailList = array_filter($rawEmails, function($value) {
				return preg_match('/@{1}(\w+).(\w+)/', $value);
			});
		} else {
			$rawEmails = str_replace(' ', '', strip_tags($_POST['email-list']));
			$emailList = explode(',', $rawEmails);
		}

		$preEmailListOutput = $emailList;
		array_walk($preEmailListOutput, function(&$value, $key) { $value = '"' . $value . '"';});
		$emailListOutput = implode(',', $preEmailListOutput);

		$emailListFileCheck = file_put_contents($basePath . '/data/email-list.csv', $emailListOutput);
		if ($emailListFileCheck)
			$emailListFile = $baseUrl . '/data/email-list.csv';
	}
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BetterBetting | Send Mail</title>
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
	<style>
		.result-output p, .result-output textarea {
			overflow-wrap: break-word;
			word-wrap: break-word;
			hyphens: none;
		}
	</style>
	<script>
		function copyToClipboard(elementId) {
			var aux = document.createElement("input");
			aux.setAttribute("value", document.getElementById(elementId).innerHTML);
			document.body.appendChild(aux);
			aux.select();
			document.execCommand("copy");
			document.body.removeChild(aux);
		}
	</script>
</head>
<body style="background-color: #000; color: #fff;">
	<?php if (!empty($errors)): ?>
		<div>
			<p>Errors: </p>
			<ul>
				<li><?php echo implode('</li><li>', $errors); ?></li>
			</ul>
		</div>
	<?php endif; ?>
	<form method="POST" enctype="multipart/form-data">
		<label for="email-list">Emails to send to (must separate with commas)</label>
		<input id="email-list" type="text" name="email-list">

		<label for="email-list-upload">Upload the email list exported from the ICO software (Statistics >> Members) (must be a CSV file)</label>
		<input id="email-list-upload" type="file" name="email-list-upload" accept="text/*">

		<div class="g-recaptcha" data-sitekey="6LfCnjkUAAAAAF7QjKS2-XtFCuypRSzJOEXTKTgr"></div>
		<input type="submit" value="Submit">
	</form>
	<?php if (!empty($emailListOutput)): ?>
		<h1>Results</h1>
		<div>
			<h4><a href="<?php echo $emailListFile; ?>">CSV Download</a></h4>
		</div>
		<div class="result-output" style="width: 100%;">
			<h4>CSV Output</h4>
			<button id="copy-output" onclick="copyToClipboard('output');">Copy to Clipboard</button>
			<p id="output"><?php echo $emailListOutput; ?></p>
		</div>
	<?php endif; ?>
	<script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
