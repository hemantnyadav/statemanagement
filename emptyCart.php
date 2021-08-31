<?php
session_start();
unset($_SESSION['Cart']); 
header("Location:index.php");
?>