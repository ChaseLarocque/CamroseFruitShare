<?php    
/*
populateDropDown.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

Contains code to fill the fruit dropdown list in fruitSearch.php and fruitOffer.php
*/

include 'DBConnect.php';
session_start();

$sql = $pdo-> prepare("SELECT fruitName FROM fruit");
$sql -> execute();
echo '<option selected disabled hidden>Choose...</option>';

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	echo '<option>'.$row['fruitName'].'</option>';
}//while	

?>