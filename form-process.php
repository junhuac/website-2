<?php
session_start();

// Options
$timestamp = date('H:i:s');
$logFile = 'logs/investment-message.log';
$admin_email = 'ico@betterbetting.org';
$recaptcha_secret = '6LfCnjkUAAAAADXMBH-Kx92G9RVirugcwl8yX52u'; // Keep Secret!
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

// Data Sanitation
$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);
$last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);
$email = $_POST['email'];
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);
$recaptcha_response = $_POST['g-recaptcha-response'];

unset($error, $success);

// Data Validation
if (strlen($email) < 1) {
	$error[] = 'Please fill in your e-mail address.';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error[] = 'Please use a valid e-mail address.';
}

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
	$error[] = 'Please tick the reCaptcha box below to prove that you are not a robot.';
}

if (!empty($error)) {
	$_SESSION['notify']['error'] = $error;
	header("Location: {$_POST['source']}?notify=error");
	exit;
}

// Log message
$log = "[{$timestamp}] {$email} ({$first_name} {$last_name}) - {$message}\n";

if (!file_put_contents($logFile, $log, FILE_APPEND))
	$error[] = 'Message failed to log.';

// Format data for mail
$mail_error = empty($error) ? '' : 'Server messages: \n' . serialize($error);
$mail_message = "
	Message received from: {$email} ({$first_name} {$last_name})\n
	\n
	Body:\n
	{$message}\n
	\n
	{$mail_error}
";
$mail_headers = "From: {$email}";

// Send mail
if (mail($admin_email, "A form submission has occured by {$email} ({$first_name} {$last_name})", $mail_message, $mail_headers)) {
	$success[] = 'Message has been sent successfully!';
} else {
	$error[] = 'Message failed to send. Please try again.';
}

if (!empty($error))
	$_SESSION['notify']['error'] = $error;

if (!empty($success))
	$_SESSION['notify']['success'] = $success;

$notify = empty($error) ? 'success' : 'error';
header("Location: {$_POST['source']}?notify={$notify}");
