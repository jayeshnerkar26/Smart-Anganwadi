<html>
<body>
<?php
	include("connect.php");
    if (isset($_POST['submit']))  
    {
        $name=$_POST['UserName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobileno=$_POST['phonenumber'];
        $city = $_POST['city'];
        
        $sql1 = "SELECT * FROM user_registration WHERE email='$email'";
        $result1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1) > 0) 
        {
        	header("location:registration.php?email");
        }
        else 
        {
        	$sql = "INSERT INTO users (user_name,email,password,phoneno,city) VALUES ('$name','$email','$password',
            '$mobileno','$city')";
        	$result = mysqli_query($conn, $sql);
    	}
	}
?>
</body>
</html>