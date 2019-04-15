<!--
feedbackMailer.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose fruit picking website)
March 23, 2019

Contains code to mail the feedback from feedbackFrom.php to Greg (Or whoever is specified in setTo())
Currently set to mail using the outgoing ualberta smtp (Simple Mail Transport Protocol) server
Uses SwiftMailer https://swiftmailer.symfony.com/docs/introduction.html
-->

<?php
require_once 'resources/swiftMailer/vendor/autoload.php';

if($_POST["feedback"]){
	$msg = $_POST["feedback"];

	// Create the transport. 25 is a well know port number for smtp
	$transport = new Swift_SmtpTransport('smtp.ualberta.ca', 25);

	// Create the Mailer using the created Transport
	$mailer = new Swift_Mailer($transport);

	// Create a message
	$message = (new Swift_Message('Website Feedback'))
	  ->setFrom(['feedback@hiddenharvests.ca' => 'Hidden Havests of Camrose Feedback'])
	  ->setTo(['jikenouy@ualberta.ca' => 'Greg King'])
	  ->setBody($msg)
	  ;

	// Send the message
	$result = $mailer->send($message);

	echo($result);
}

//reload the feedback page
header("location: feedbackForm.php");
?>