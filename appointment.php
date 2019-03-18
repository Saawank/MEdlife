<?php
require ('dbconnect.php');
$sql="CREATE TABLE IF NOT EXISTS appointment(
      fullname VARCHAR(60) PRIMARY key,
      aemail VARCHAR(50) NOT NULL,
      adate int(10) NOT NULL,
      atime    int(10) NOT NULL,
      message VARCHAR(100) NOT NULL
)";
if (!mysqli_query($conn, $sql)) {
	    echo "Error creating app_table: " . mysqli_error($conn)."<br>";
	}
?>
.