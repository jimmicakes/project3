<?php

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	$message = Trim(stripslashes($_POST['message']));
	
	//create database	connection
	include "db-info.php";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//insert the form data into	the	database
	$query  = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
	//send the query to	the	database
	$result = mysqli_query($connection, $query);
	
	//error	checking
	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1) {
		die('No records were written to the database.');
	}
	
	//close	and	redirect
	mysqli_close($connection);
	header("Location: database-read.php");

?>