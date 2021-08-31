<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<center>
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
</ul>	
	<h1>
		
		<?php
		
		print($_POST['name']." Active");
		
		?>
	</h1>
</center>
</body>
</html>
