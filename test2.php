<?php

session_start();
	$_SESSION;

     date_default_timezone_set("America/Chicago");
	include("connect.php");
	include("functions.php");
     include ("comments.php");
     include("connect2.php");

	$user_data = check_login($conn)
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="test2.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title>MyForum</title>
</head>
<body>
     <div class="top-bar">
		<h1>𝕄𝕪𝔽𝕠𝕣𝕦𝕞</h1>
	</div>
<div class="main">
     <p3 class="yes">ㅤ</p3>
     <p1 class="username">add comment as <?php echo $user_data['username'];?></p1>

<form method='post' action='./SADJIO.PHP'>
     <input type='hidden' name='uid' value='<?php echo $user_data['username']; ?>'>
     <textarea name='message'></textarea><br>
     <button type='submit' name='commentSubmit'><p1>Comment</p1></button>
</form>
</div>

<a class="back" href="index.php">ㅤㅤㅤㅤㅤㅤ</a>

<?php

getComments($con);
?>   

</body>
