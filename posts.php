<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );


function getPosts($con) {
     $sql = "SELECT * FROM posts";
     $result = $con->query($sql);
     while ($row = $result->fetch_assoc()) {

         $message = $row['message'];
         $uid = $row['uid'];
         $date = $row['date'];
         echo
         "
<li>
         <div class='threads-box'>
                <a class='hij' href='test2.php'>$message</a>
                <p1 class='threads2'>$uid&nbsp;$date&nbsp;0 comments</p1>

        </div>
        <br>     

</li>
         ";


//     echo "<div class='threads-box'>";
//          echo "<a class='hij' href='test2.php' ';'>". $row['message']. "<br><br>";
//          echo "<p1 class='threads2';'>". $row['uid']."<p5>ㅤ</p5>" ;
//          echo "<p1 class='zei''>". $row['date']."<p5>&nbsp;0 comments</p5>" ;
//     echo "</div>";
//     echo "<br>";
     }
}