<!DOCTYPE html>
<html>
	<head>
		<title>MedLife</title>
		<link rel="stylesheet" type="text/css" href="user_table.css">
	</head>
	<body class="user_table">
		
		<table class="data-table">
			<h1>Patient DATA</h1>
			<thead>
				<tr>
					<th>Full Name </th>
					<th>Email</th>
					<th>Date</th>
					<th>Time</th>
					<th>Message</th>
					<
				</tr>
			</thead>
			<tbody>
				<?php
				$servername="localhost";
                $username="root";
                $password="";
                $dbname="feedback";

                $conn=mysqli_connect($servername,$username,$password,$dbname);
   

   if(mysqli_connect_error()){
   	echo"Connection failed";
   }

  $sql='SELECT * FROM user';
   $query=mysqli_query($conn,$sql);

   if(!$query){
    die ('SQL Error: ' . mysqli_error($conn));
					while($row=mysqli_fetch_array($query))
					{
						echo '<tr>
							<td>'.$row['fullname'].'</td>
							<td>'.$row['aemail'].'</td>
							<td>'.$row['adate'].'</td>
							<td>'.$row['atime'].'</td>
							<td>'.$row['message'].'</td>
							</tr>';
					}
				?>
			</tbody>
		</table>
		<br>
		<br>
		<center>
			<form action="user_display.php" method="POST">
				<button type="submit" name='signout_btn'>Log out</button>
			</form>
		</center>
	</body>
</html>