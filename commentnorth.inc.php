<?php
 function setComments($conn) {
     if(!empty('commentSubmit')){

      if (isset($_POST['commentSubmit'])) {
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql = "INSERT INTO northcomments(uid, date, message)
      VALUES('$uid','$date','$message')";
      $result = $conn->query($sql);
}
}
}

function getComments($conn){
  $sql ="SELECT * FROM  northcomments";
  $result = $conn->query($sql);
  while (  $row = $result->fetch_assoc()) {
  echo "<div class='commentBox'>";
  echo  $row['uid'].'<br><br>';
  echo  $row['date'].'<br><br>';
  echo  $row['message'];
  echo "</div>";
}
}
