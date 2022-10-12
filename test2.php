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
<html lang="en-GB">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
     <link rel="stylesheet" type="text/css" href="./CSS/test2.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title id="title">MyForum</title>
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


<form method='post' action='./SADJIO.PHP'>
<textarea name='message' class="area" rows="2" cols="20" id="area" style="display:none"></textarea>
<class class="area2"><button style="display:none" id="area" type='submit' name='commentSubmit'><p1>Comment</p1></button></class>
<input type='hidden' name='uid' value='<?php echo $user_data['username']; ?>'>
<input class="popup" type="button" id="popup" value="reply">



<a class="back" href="index.php">ㅤㅤㅤㅤㅤㅤ</a>

<?php

getComments($con);
?>   

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript"> 

var textarea = $('#area');
$("#popup").click(function(){

   // To show it
   textarea.show();
   button.show();

});

// To get the value
var value = button.val();
</script>

</body>
