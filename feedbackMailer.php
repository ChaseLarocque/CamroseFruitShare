<!--
feedbackMailer.php

Contains code to mail the feedback to Greg (Or whoever is specified)
Uses swift mailer https://swiftmailer.symfony.com/docs/messages.html
-->
<?php
if($_POST["feedback"]){
	mail("jikenouy@ualberta.ca", "Feedback Form", $_POST ["feedback"], "From: an@email.address");
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