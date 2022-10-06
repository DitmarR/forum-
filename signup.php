<?php 
session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		$username = $_POST['username'];
		$password = $_POST['password'];
          $email = $_POST['email'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			
			$user_id = random_num(20);
			$query = "insert into user (user_id,username,password,email) values ('$user_id','$username','$password','$email')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="signup.css" />
     <title>Sign-up</title>
</head>
<body>
     <center>
          <div id="main">
               <h1>Sign up</h1>
               <form method="POST">
                <input type="text" name="username" class="text" autocomplete="off" required
                placeholder="username"><br><br>
                <input type="email" name="email" class="text" required placeholder="email"><br><br>
                <input type="password" name="password" class="text" required placeholder="password"><br><br>
                <input type="password" name="password" class="text" required placeholder="repeat password"><br><br>
                <br>
               <input type="submit" name="submit" value="sign-up" id="sub"><br><br>
               <br>
               <a class="login" href="login.php">Login instead</a><br><br>
          </form>
     </div>
     </center>
  
     
</body>
</html>