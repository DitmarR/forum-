<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="login.css" />
     <title>Login</title>
</head>
<body>
     <center>
          <div id="main">
               <h1>Login</h1>
               <form method="post">
                <input type="text" name="username" class="text" autocomplete="off" required
                placeholder="username"><br><br>
                <input type="password" name="password" class="text" required placeholder="password"><br><br>
                <br>
               <input type="submit" name="submit" value="login" id="sub"><br><br>
               <br>
               <a href="signup.php">Sign-up</a><br><br>
          </form>
     </div>
     </center>
  
     
</body>
</html>

<?php 

session_start();

	include("connect.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			$query = "select * from user where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

