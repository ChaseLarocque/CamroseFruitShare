<?php 
/*
function deleteOffer($offerId){
	require 'DBConnect.php';
	$sql = $pdo->prepare( "DELETE FROM fruit_offer 
		WHERE  offerId = ?");
	$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50);	
	$sql -> execute();
	$pdo = null;
	$sql = null;
	header("location: userPage.php");
}*/
if($_REQUEST['action'] == 'deleteOffer'){
	$offerId = $_REQUEST['offerId'];

	require 'DBConnect.php';
	$sql = $pdo->prepare( "DELETE FROM fruit_offer 
		WHERE  offerId = ?");
	$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50);	
	$sql -> execute();
	$pdo = null;
	$sql = null;
	header('Location: '.$_SERVER['PHP_SELF']);
	die;
	}
if($_REQUEST['action'] == 'deleteRequest'){
	$requestId = $_REQUEST['requestId'];
	require 'DBConnect.php';
	$sql = $pdo->prepare( "DELETE FROM fruit_request 
		WHERE  requestId = ?");
	$sql -> bindParam(1, $requestId, PDO::PARAM_STR, 50);	
	$sql -> execute();
	$pdo = null;
	$sql = null;
	header('Location: '.$_SERVER['PHP_SELF']);
	die;
	}
?>