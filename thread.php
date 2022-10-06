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
     <link rel="stylesheet" type="text/css" href="thread.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title>MyForum</title>
</head>
<body>
	<div class="top-bar">
		<h1>
               𝕄𝕪𝔽𝕠𝕣𝕦𝕞
          </h1>
</div>
<div class="main">
     <p6>ㅤ</p6>
     <h4 class="add">
     add comment as <?php echo $user_data['username']; ?>
     </h4>
<div class="header">     

</div>

<textarea></textarea>


<button><p1 class="comment">Comment</p1></button>
</div>

</body>
</html>