<!--
enableAdminPageButton.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019

This page creates a button to navigate to the admin page if the account logged in is the admin account
-->

<?php

function enableAdminPage(){
	$hasAccess = false;
	if($_SESSION['username'] == 'chaselarocque@gmail.com'){
	   $hasAccess = true;
	}
	if($hasAccess == true){
		echo
	        '<li class="divider-vertical"></li>
	        <li class = "nav-item">
	        <a class="nav-link navBtn" href="adminPage.php">Admin Settings</a>
	    </li>';
	}
}
?>