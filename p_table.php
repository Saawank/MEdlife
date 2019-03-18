<?php
require ('dbconnect.php');
$sql="CREATE TABLE IF NOT EXISTS p_table(
      fname VARCHAR(50) NOT NULL,
      lname VARCHAR(50) NOT NULL,
      email VARCHAR(50) NOT NULL,
      password VARCHAR(50) NOT NULL,
       mobile_number int(11) PRIMARY KEY
)";
if (!mysqli_query($conn, $sql)) {
	    echo "Error creating doc_table: " . mysqli_error($conn)."<br>";
	}
?>