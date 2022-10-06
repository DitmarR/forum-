<?php
function getusername($conn) {
     $sql = "SELECT * FROM user";
     $result = $con->query($sql);
     while ($row = $result->fetch_assoc()) {   
          echo $row['username'];
     }
}