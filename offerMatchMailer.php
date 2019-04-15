<?php
/**
offerMatchMailer.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 31, 2019

This php file contains SQL query code that is initialized through HTML executed through PHP and will post a fruit offering to the fruit_offer table in the database
**/

require 'DBConnect.php'; //require the database - ensuring nothing is executed unless connection to DB is established
require_once 'resources/swiftMailer/vendor/autoload.php';

session_start();

//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];
$newFruitOffered = $_POST['fruitOffName'];

$sql = $pdo-> prepare("SELECT userName,id from users WHERE id IN (SELECT userid FROM fruit_request WHERE $newFruitOffered = requestName) AND NOT userId = $sessionId");
$sql -> execute();

foreach($pdo-> query($sql) as $row){
	$username = $row['username'];

	$msg = "You have a fruit match on Hidden Harvests of Camrose!";

	// Create the transport. 25 is a well know port number for smtp
	$transport = new Swift_SmtpTransport('smtp.ualberta.ca', 25);

	// Create the Mailer using the created Transport
	$mailer = new Swift_Mailer($transport);

	// Create a message
	$message = (new Swift_Message('Fruit Match!'))
	  ->setFrom(['no-reply@hiddenharvests.ca' => 'Hidden Havests of Camrose Feedback'])
	  ->setTo($userName)
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
