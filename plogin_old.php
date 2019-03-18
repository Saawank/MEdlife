<?php
require('create.php');
require('dbconnect.php');
require('doc_table.php');
require('p_table.php');
?>
<head>
		<title>Login Form Design</title>
		<link rel="stylesheet" type="text/css" href="dplogin.css">
  		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="header">
			<div id="particles-js"></div>
		</div>
		<script src="js1/particles.js"></script>
		<script src="js1/app.js"></script>
		<div class="loginbox">
			<img src="person.png" class="avatar">
			<h1>Login Here</h1>
			<form action="" method="POST">
				
				<label for="mobile_number">MOBILE NUMBER</label>
				<input type="text" name="mobile_number" required><br>

				<label for="password">Password</label>
				<input type="password" name="password" required><br>
				<p>
				<span style="font-family: 'Montserrat', sans-serif;">Not yet a member?</span> <a href="p_signup.php"><span style="font-family: 'Montserrat', sans-serif; color: #00cccc;"><u>Sign up</u></span></a>
			</p>


				<input type="submit" name="submit" value="Submit"><br>
			</form>    
		</div>
		
		</body>
</html>
		