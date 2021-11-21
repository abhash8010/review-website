<!DOCTYPE html>
<?php
include 'dbh.inc.php';
include 'comment.inc.php';
?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Comment section</title>
  </head>
  <body>
    <?php echo "abhash"; ?>
<?php
echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message' rows='8' cols='80'></textarea>
    <button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn);
?>
  </body>
</html>
