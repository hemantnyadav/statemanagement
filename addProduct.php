<?php session_start(); ?>
<?php 
$i = 0;

if(isset($_GET['Product']))
{
	$i  = count($_SESSION['Cart']);
	$_SESSION['Cart'][$i] = $_GET['Product'];
}

header("Location:index.php"); 

?>
