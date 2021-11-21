<?php

$conn = mysqli_connect('localhost','root', '','urban');

if (!$conn) {
  die("Connectino failed: ".mysqli_connect_error());
}
