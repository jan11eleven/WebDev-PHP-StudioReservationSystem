<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = mysqli_connect($host, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
 ?>