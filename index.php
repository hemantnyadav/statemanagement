<?PHP session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center>
<h1>
Welcome 
<?PHP 
	if(isset($_COOKIE['name']))
	{
		session_destroy();
		print($_COOKIE['name']);
	}
	
	
	if(isset($_SESSION['name']))
	{
		print($_SESSION['name']);
	}
	print("<br>");
	
	if(isset($_SESSION['Cart']))
	{
		print(" Total Products in cart: ".count($_SESSION['Cart']));
	}
	
?>
<a href="destroySession.php">Destroy Session</a>
</h1>

<style>
li{
 display:inline-block;
 padding:20px;
 }
</style>
<ul>
	<li>
		<a href="index.php">Home</a>
	</li>
	<li>
		<a href="page1.php">Page1	</a>
	</li>
	<li>
		<a href="page2.php">Page2	</a>
	</li>
	<li>
		<a href="page3.php">Page3	</a>
	</li>
	<li>
		<a href="viewProducts.php">View Products	</a>
	</li>
	<li>
		<a href="emptyCart.php">Empty Cart	</a>
	</li>
	<li>
		
	</li>
</ul>	
<ul>
	<li>
		<a href="addProduct.php?Product=P1">Product1</a>
	</li>
	<li>
		<a href="addProduct.php?Product=P2">Product2</a>
	</li>
	<li>
		<a href="addProduct.php?Product=P3">Product3</a>
	</li>
	<li>
		<a href="addProduct.php?Product=P4">Product4</a>
	</li>
</ul>	
<!-- <form action="createSession.php" method="post">  -->
 <form action="createCookies.php" method="post"> 
<!-- <form action="page1.php" method="post"> -->
	<h3>Please enter your name</h3>
	<input type="text" name="name"/>
	<input type="submit" />
</form>

</center>
</body>
</html>
