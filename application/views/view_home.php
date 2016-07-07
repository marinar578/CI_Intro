<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<h2>Add</h2>

	<p><?php echo $var1 . " + " . $var2 . " = " . $addTotal; ?></p>
	
	<h2>Subtract</h2>

	<p><?php echo $var1 . " - " . $var2 . " = " . $subTotal; ?></p>

</div>

</body>
</html>