<?php 



function getPosts($con) {
     $sql = "SELECT * FROM posts";
     $result = $con->query($sql);
     while ($row = $result->fetch_assoc()) {   
     echo "<div class='threads-box'>";
          echo "<a class='hij' href='test2.php' ';'>". $row['message']. "<br><br>";
          echo "<p1 class='threads2';'>". $row['uid']."<p5>ㅤ</p5>" ;
          echo "<p1 class='zei''>". $row['date']."<p5>ㅤ0 comments</p5>" ;
     echo "</div>";
     echo "<br>";
     }
}