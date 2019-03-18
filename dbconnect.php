<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="health_care";

	$conn= mysqli_connect($servername, $username, $password,$dbname);
	// Check connection
	if (mysqli_connect_error()){
		echo "Something went wrong...";
	}
?>