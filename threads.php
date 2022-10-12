<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

session_start();
	$_SESSION;

     date_default_timezone_set("America/Chicago");
	include("connect.php");
	include("functions.php");
     include ("posts.php");
     include("connect2.php");

	$user_data = check_login($conn)
    

?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0">
     <link rel="stylesheet" type="text/css" href="./CSS/index.css" />
	<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
	<title>MyForum</title>
</head>
<body>
<div class="top-bar">
		<h1>𝕄𝕪𝔽𝕠𝕣𝕦𝕞</h1>
	</div>
<div class="main">
     <p3 class="yes">ㅤ</p3>
     <p1 class="username">Post as <?php echo $user_data['username'];?></p1>

<form method='post' action='./SADJIO2.PHP'>
     <input type='hidden' name='uid' value='<?php echo $user_data['username']; ?>'>
     <textarea class="area" name='message'></textarea><br>
     <button type='submit' name='commentSubmit'><p1>post</p1></button>
</form>
</div>

     
<ol>
     <h4 id="inv">ㅤ</h4>
     <h4 id="inv2">ㅤ</h4>
<li class="row">
          <div>
           <h4 class="test10">
                    <a href="test2.php"><p2 class="yes">Can we add threads?</p2></a>
               </h4>
             <div class="bottom">
                <p class="timestamp">
                     Ditmar&nbsp;23/09/2022 - 12:01 PM
                </p>
                <p class="comments">
                      6 comments
                 </p>
           </div>
          </div>
</li>
<span>
     <li class="row2">
               <div>
                <h4 class="test10">
                         <a href="test2.php"><p2 class="yes">cool thread!</p2></a>
                 </h4>
                <div class="bottom">
                 <p class="timestamp">
                      Martin&nbsp;5/10/2022 - 1:12 PM
                 </p>
                 <p class="comments">
                           0 comments
                      </p>
                </div>
            </div>
     </li>
                 <?php
                 getPosts($con);

                 ?>
</span>

<span id="contacts">
     <section class="test">
          <div class="blob-1uHjdp" style="width: 2.5625rem; opacity: 0.86;"> 
            <lo id="first">
               <a class="post2" href="mailto:de.riksten@student.alfa-college.nl">
                    <h2 id="contact">contact</h2>
               </a>
            </lo>
      </div>
     </section>
</span>

</ol>
<a class="back" href="index.php">ㅤㅤㅤㅤㅤㅤ</a>

<?php

//getPosts($con);
?>  


</body>
</html>