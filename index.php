<?php
session_start();
	$_SESSION;

	include("connect.php");
	include("functions.php");

	$user_data = check_login($conn);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="index.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title>MyForum</title>
</head>
<body>
<div class="popup">
          <div class="contentBox">
               <div class="content">
                    <h1>Hello, <?php echo $user_data['username']; ?>!</h1>
               </div>
               <div class="extra">
                    <h3>Succesfully Logged in!</h3>
               </div>
               <button class="close"><big>OK</big></button>
          </div>
     </div>
     <div class="navbar">
          <nav>
          <a class="post" href="post.php">Post</a>
          <a class="logout" href="acc.php">Account</a>
          </nav>
     </div>
	<div class="top-bar">
		<h1>𝕄𝕪𝔽𝕠𝕣𝕦𝕞</h1>
	</div>
<ol>
     <h4>ㅤ</h4>
     <h4>ㅤ</h4>
<li class="row">
          <div>
           <h4 class="test10">
                    <a href="test2.php"><p2 class="yes">Can we add threads?</p2></a>
               </h4>
             <div class="bottom">
                <p class="timestamp">
                     Ditmarㅤ23/09/2022 - 12:01 PM 
                </p>
                <p class="comments">
                      2 comments
                 </p>
           </div>
          </div>
</li>

<li class="row2">
          <div>
           <h4 class="test10">
                    <a href="test2.php"><p2 class="yes">cool thread!</p2></a>
               </h4>
             <div class="bottom">
                <p class="timestamp">
                     Martinㅤ5/10/2022 - 1:12 PM 
                </p>
                <p class="comments">
                      0 comments
                 </p>
           </div>
          </div>
</li>

</ol>

	<br>

     <script src="index.js"></script>
	<script>
          window.addEventListener("load", function(){
          setTimeout(
               function open(event){
                    document.querySelector(".popup").style.display = "block";

               }
          )
     })

     document.querySelector(".close").addEventListener
     ("click", function(){
          document.querySelector(".popup").style.display = "none";
     })

     function poppinlogin() { 

     }
     </script>


</body>
</html>