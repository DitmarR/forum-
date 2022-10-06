<?php 



function getComments($con) {
     $sql = "SELECT * FROM comments";
     $result = $con->query($sql);
     while ($row = $result->fetch_assoc()) {   
     echo "<div class='comment-box'>";
          echo "<p1 style='color:white;'>". $row['uid']."<p5>ㅤ</p5>";
          echo $row['date']. "<br><br>";
          echo $row['message'];
     echo "</div>";
     echo "<br>";
     }
}