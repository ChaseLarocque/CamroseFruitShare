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