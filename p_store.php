<?php
require('dbconnect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_number=$_POST['mobile_number'];

$stmt=$conn->prepare("INSERT INTO p_table(fname,lname,email,password,mobile_number)
	VALUES(?,?,?,?,?)");
$stmt->bind_param("ssssi",$fname,$lname,$email,$password,$mobile_number);

$stmt->execute();
$stmt->close();
header("");
?>