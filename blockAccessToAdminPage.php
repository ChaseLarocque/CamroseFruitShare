<?php

session_start();
if($_SESSION['username'] != 'chaselarocque@gmail.com'){
   header("Location:index.php");
}

?> 