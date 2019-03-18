<?php
require('dbconnect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$ID=$_POST['ID'];
$password=$_POST['password'];

$stmt=$conn->prepare("INSERT INTO doc_table(fname,lname,email,ID,password)
	VALUES(?,?,?,?,?)");
$stmt->bind_param("sssss",$fname,$lname,$email,$ID,$password);

$stmt->execute();
$stmt->close();
header("");
?>