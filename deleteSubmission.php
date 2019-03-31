<?php 
function deleteOffer($offerId) {
	require 'DBConnect.php';
	$sql = "DELETE FROM fruit_offer 
		WHERE  offerId = $offerId";
	$pdo -> query($sql);

}

function deleteRequest($requestId) {
	require 'DBConnect.php';
	$sql = "DELETE FROM fruit_request 
		WHERE  offerId = $requestId";
	$pdo -> query($sql);		
}
?>