<?php
    setcookie("name",$_POST['name'],time()+1800); 
	header("Location: index.php");
?>