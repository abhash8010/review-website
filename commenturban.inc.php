<?php
 function setComments($conn) {
     if(!empty('commentSubmit')){

      if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        if($_POST['rating']== 0){     //Enables user to post comment without rating
          $rating = 0;
        }else{
          $rating = $_POST['rating'];
        }





        $sql = "INSERT INTO urbancomments(uid, date, message, rating)
        VALUES('$uid','$date','$message', '$rating')";    //CHANGE FOR OTHERS!!!!!!!
        $result = $conn->query($sql);
        header('Location: urban.php');      //CHANGE FOR OTHERS!!!!!!!, Prevents browser resubmition
        exit();
}
}
}

function getComments($conn){
  $sql ="SELECT * FROM  urbancomments";     //CHANGE FOR OTHERS!!!!!!
  $result = $conn->query($sql);
  $incrementrating = 0;
  $iterations = 0;
  while (  $row = $result->fetch_assoc()) {
  $incrementrating = $incrementrating + (int)$row['rating'];
  $iterations = $iterations + 1;
  echo "<div class='commentBox'>";
  echo  $row['uid'].'<br><br>';
  echo  $row['date'].'<br>';

  if($row['rating'] == 0) {
    $iterations = $iterations -1;     //Doesn't affect the average
    echo "
    <div class='wrapper'>
    <div class='staron'></div>
    <div class='staroff'>&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>";

  }elseif($row['rating'] == 1) {
    echo "
    <div class='wrapper'>
    <div class='staron'>&#9733;</div>
    <div class='staroff'>&#9733;&#9733;&#9733;&#9733;</div></div>";
  }elseif($row['rating'] == 2) {
    echo "
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;</div>
    <div class='staroff'>&#9733;&#9733;&#9733;</div></div>";
  }elseif($row['rating'] == 3) {
    echo "
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;</div>
    <div class='staroff'>&#9733;&#9733;</div></div>";
  }elseif($row['rating'] == 4) {
    echo "
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;&#9733;</div>
    <div class='staroff'>&#9733;</div></div>";
  }elseif($row['rating'] == 5) {
    echo "
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <div class='staroff'></div></div>";
  }

  echo "<br>";
  echo  $row['message'];


  echo "</div><br><br>________________________________________________________________________";
}
  echo "<br>Average rating is: ";     //All calculations below are for average and displaying stars
  if($iterations == 0) {
  echo "<br>
  <div class='wrapper'>
  <div class='staron'></div>
  <div class='staroff'>&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>";
  echo "(0)";
}elseif($incrementrating/$iterations <.5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'></div>
    <div class='staroff'>&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }elseif($incrementrating/$iterations>=.5 && $incrementrating/$iterations <1.5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'>&#9733;</div>
    <div class='staroff'>&#9733;&#9733;&#9733;&#9733;</div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }elseif($incrementrating/$iterations>=1.5 && $incrementrating/$iterations <2.5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;</div>
    <div class='staroff'>&#9733;&#9733;&#9733;</div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }elseif($incrementrating/$iterations>=2.5 && $incrementrating/$iterations <3.5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;</div>
    <div class='staroff'>&#9733;&#9733;</div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }elseif($incrementrating/$iterations>=3.5 && $incrementrating/$iterations <4.5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;&#9733;</div>
    <div class='staroff'>&#9733;</div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }elseif($incrementrating/$iterations>=4.5 && $incrementrating/$iterations <=5){
    echo "<br>
    <div class='wrapper'>
    <div class='staron'>&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <div class='staroff'></div></div>";
    echo "(";
    echo round($incrementrating/$iterations,2);
    echo ")";
  }
}
