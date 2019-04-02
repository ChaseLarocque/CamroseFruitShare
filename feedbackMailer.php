<!--
feedbackMailer.php

Contains code to mail the feedback to Greg (Or whoever is specified)
Uses swift mailer https://swiftmailer.symfony.com/docs/messages.html
-->
<?php
if($_POST["feedback"]){
	$msg = wordwrap($_POST["feedback"],70);
	$result = mail("jikenouy@ualberta.ca", "Feedback Form", $msg, "From: feedback@csl.augustana.ualberta.ca");

	if($result){
		echo "SENT";
	}
	else{
		echo "Failed";
	}
}

// $ composer require "swiftmailer/swiftmailer:^6.0"
// require_once '/path/to/vendor/autoload.php';

// $transport = (new swiftmailer)


// //create a message
// $message = (new Swift_Message('Hidden Harvests Feedback'))
// 	->setFrom(['currentuser'])

// //send the message
// $result = $mailer->send($message);
?>