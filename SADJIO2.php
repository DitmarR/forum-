<?php
     require "./connect2.php";

          $uid = $_POST['uid'];
          $date = date('Y-m-d h:i:s');
          $message = $_POST['message'];

          $sql = "INSERT INTO posts (message, uid, date) VALUES ('$message', '$uid', '$date')";
          $result = $con->query($sql);
     

          header( "location: ./threads.php");  