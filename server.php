<?php
require('dbconnect.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$ID=mysqli_real_escape_string($conn,$_POST['ID']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    $sql="SELECT ID,password FROM doc_table WHERE ID='$ID'AND password=$_password";
    


	
}