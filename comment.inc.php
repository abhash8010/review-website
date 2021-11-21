<?php
 function setComments($conn) {
     
      if (isset($_POST['commentSubmit'])) {
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql = "INSERT INTO diningcomments(uid, date, message)
      VALUES('$uid','$date','$message')";
      $result = $conn->query($sql);


}
}

function getComments($conn){
  $sql ="SELECT * FROM  diningcomments";
  $result = $conn->query($sql);
  while (  $row = $result->fetch_assoc()) {
  echo "<div class='commentBox'>";
  echo  $row['uid'].'<br><br>';
  echo  $row['date'].'<br><br>';
  echo  $row['message'];
  echo "</div>";
}
}
