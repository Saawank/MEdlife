<?php
session_start();
$db_host="localhost";
$db_username="";
$db_password="";
$db_name="health_care";


$a="";
$b="";
$c="";
$d="";
$e="";


$db_connect= mysqli_connect($db_host, $db_username, $db_password,$db_name);

mysqli_select_db($db_connect,"health_care");
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "";
}

if (isset($_POST['Submit']))
{

$a=$_POST['fullname'];
$b=$_POST['aemail'];
$c=$_POST['adate'];
$d=$_POST['atime'];
$e=$_POST['message'];


$sql = "INSERT INTO appointment(fullname,aemail,adate,atime,message)
VALUES ('$a','$b','$c','$d','$e')";

if ($db_connect->query($sql) === TRUE) {
    echo "New record created successfully";
    session_unset(); 
    session_destroy(); 
	header('location:index.html');
} else {
    echo "Error: " . $sql . "<br>" . $db_connect->error;
}
}
?>

