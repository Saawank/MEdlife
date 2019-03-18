<?php
require('dbconnect.php');
$fullname=$_POST['fullname'];
$aemail=$_POST['aemail'];
$adate=$_POST['adate'];
$atime=$_POST['atime'];
$message=$_POST['message'];


$stmt=$conn->prepare("INSERT INTO appointment(fullname,aemail,adate,atime,message)
	VALUES(?,?,?,?,?)");
$stmt->bind_param("ssiis",$fullname,$aemail,$adate,$atime,$message);

$stmt->execute();
$stmt->close();
header("thank.php");
?>