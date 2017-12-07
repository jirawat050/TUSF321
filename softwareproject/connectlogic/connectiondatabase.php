<?php
	$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
	$dbname = "test"; // the name of the database that you are going to use for this project
	$dbuser = "ppn"; // the username that you created, or were given, to access your database
	$dbpass = "1q1q"; // the password that you created, or were given, to access your database
	$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("not connect database");

?>
