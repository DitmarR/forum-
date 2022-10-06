<?php
     require "./connect2.php";

          $uid = $_POST['uid'];
          $date = date('Y-m-d h:i:s');
          $message = $_POST['message'];

          $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
          $result = $con->query($sql);
     

          header( "location: ./test2.php");  