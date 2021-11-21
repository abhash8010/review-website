<?php

$conn = mysqli_connect('localhost','root', '','commentsectionkelly');

if (!$conn) {
  die("Connectino failed: ".mysqli_connect_error());
}
