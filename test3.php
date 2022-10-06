<?php
session_start();
	$_SESSION;

	include("connect.php");
	include("functions.php");

	$user_data = check_login($conn)
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="acc.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title>MyForum</title>
</head>
<body>
          </div>
     </div>
     <div class="navbar">
          <nav>
          <a class="logout" href="logout.php">Logout</a>
          </nav>
     </div>
	<div class="top-bar">
		<h1>𝕄𝕪𝔽𝕠𝕣𝕦𝕞</h1>
	</div>
<?php
function getusername($conn) {
     $sql = "SELECT * FROM user";
     $result = $con->query($sql); {   
          echo $row['username'];
     }
}
?>
</body>
</html>