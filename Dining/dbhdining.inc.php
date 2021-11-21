<?php

$conn = mysqli_connect('localhost','root', '','diningcomment');

if (!$conn) {
  die("Connectino failed: ".mysqli_connect_error());
}
