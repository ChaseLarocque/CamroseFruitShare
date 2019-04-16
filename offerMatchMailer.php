<?php
/**
offerMatchMailer.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 31, 2019

This php file contains SQL query code that is initialized through HTML executed through PHP and will send an email using swiftmailer to any 
users with fruit requests matching an offering's fruit. 
**/

require 'DBConnect.php'; //Need this for the pdo
require_once 'resources/swiftMailer/vendor/autoload.php';

session_start();

//userId is pulled from the session as user is logged in
$sessionId = $_SESSION['id'];
$newFruitOffered = $_SESSION['fruit'];

$sql = $pdo -> prepare("SELECT username, id FROM users WHERE id in (SELECT userid FROM fruit_request WHERE requestName = ?)");

$sql->bindParam(1, $newFruitOffered, PDO::PARAM_STR, 50);

$sql -> execute();

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	$username = $row['username'];

	$msg = "You have a fruit match on Hidden Harvests of Camrose!";

	// Create the transport. 25 is a well know port number for smtp
	$transport = new Swift_SmtpTransport('smtp.ualberta.ca', 25);

	// Create the Mailer using the created Transport
	$mailer = new Swift_Mailer($transport);

	// Create a message
	$message = (new Swift_Message('Fruit Match!'))
	  ->setFrom(['no-reply@hiddenharvests.ca' => 'Hidden Havests of Camrose Feedback'])
	  ->setTo($username)
	  ->setBody($msg)
	  ;

	// Send the message
	$mailer->send($message);
}//while

//nullify $sql and $pdo to erase code from memory
$sql = null;
$pdo = null;

//redirect to the userPage
header("location: userPage.php");
?>
