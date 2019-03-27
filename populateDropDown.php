<?php                                  
	include 'DBConnect.php';
	session_start();

	$sql = $pdo-> prepare("SELECT fruitName FROM fruit");
	$sql -> execute();
	echo '<option selected disabled hidden>Choose...</option>';
	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		echo '<option>'.$row['fruitName'].'</option>';
	}	
?>