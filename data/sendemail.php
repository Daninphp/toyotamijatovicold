<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Build POST request:
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
	$recaptcha_secret = '6LfM77oUAAAAAPMXJETH9OpCUSxgvkhl8xv7xhb6';
	$recaptcha_response = $_POST['recaptcha_response'];
	// Make and decode POST request:
	$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
	$recaptcha = json_decode($recaptcha);
	if($recaptcha->success==true){
		// Take action based on the score returned:
		if ($recaptcha->score >= 0.5) {
			echo '<pre>';
			print_r("Verified");
			echo '</pre>';
			// Verified
		} else {
			echo '<pre>';
			print_r("Not verified - show form error!");
			echo '</pre>';
			exit;
			// Not verified - show form error
		}
	}else{ // there is an error /
		///  timeout-or-duplicate meaning you are submit the  form
		echo '<pre>';
		print_r($recaptcha);
		echo '</pre>';
		exit;
	}
}

// Define some constants
define( "RECIPIENT_NAME", "Toyota Mijatovic" );
define( "RECIPIENT_EMAIL", "danindragosavac@gmail.com" );


// Read the form values
$success = false;
$senderName = isset( $_POST['ime'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['ime'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$message = isset( $_POST['poruka'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['poruka'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $message) {
	$recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
	$headers = "From: " . $senderName . " <" . $senderEmail . ">";
	$success = mail( $recipient, $message, $headers );

	//Set Location After Submission
	header('Location: ../index.php?message');
}

else{
	//Set Location After Submission
	header('Location: ../index.php');
}

?>