<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>

	<div class="container">
		<h2 align="center">Registration Form</h2>
		<form class="form-horizontal" action="insert_data.php"  name="id" id="form" method="post">
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Name">UserName*:</label>
				<div class="col-sm-10">
					<input type="text" method="post" class="form-control" onkeypress="return AvoidSpace(event)" id="username" name="UserName" placeholder="UserName" onblur="my_user()">
					<span id="user" class=" text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<lable class="control-lable col-sm-2" for="email"><b>Email*:</b></lable>
				<div class="col-sm-10">
					<input type="email" name="email" id="mail" class="form-control" placeholder="Email" onblur="my_email()">
					<span id="email" class="text-danger"></span>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="passw">Password*:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" placeholder="Password" id="psw"name="password" onblur="my_password()">
					<span id="password" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Mobile No">Mobile Number*:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" onkeyup="return phone(event,this)" placeholder="Mobile number" 
					id="mno1" name="phonenumber" onblur="mobileNumber()">
					<span id="mno" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">City*:</label>
				<div class="col-sm-10">	
		    <?php
            	include("connect.php");
            	$sql="SELECT * FROM select_city";
            	$result = mysqli_query($conn,$sql);
            	$option='';

            	while($row = mysqli_fetch_array($result))
            	{
                	$option .= '<option value = "'.$row['id'].'">'.$row['city'].'</option>';
            	}
        	?>
        	<select name="city" class="btn btn-default"> 
            	<?php echo $option; ?>
        	</select>
				<span id="select" class="text-danger"></span>
			</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
			</div>
				<div class="col-sm-6">
					<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
					<a href="user_login.php" class="btn btn-primary">Login</a>
				</div>
			</div>
		</form>
	</div>
	<?php 
		if(isset($_GET['email'])) 
		{
			echo "<h1>This email is already being used<h1>";
		}
	?>
</body>
</html>