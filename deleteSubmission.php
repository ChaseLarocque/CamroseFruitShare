<?php 

function deleteOffer($offerId){
	require 'DBConnect.php';
	$sql = $pdo->prepare( "DELETE FROM fruit_offer 
		WHERE  offerId = ?");
	$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50);	
	$sql -> execute();
	$pdo = null;
	$sql = null;
	header("location: userPage.php");
}
?>