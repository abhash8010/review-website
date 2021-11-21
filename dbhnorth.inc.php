<?php

$conn = mysqli_connect('localhost','root', '','northside');

if (!$conn) {
  die("Connectino failed: ".mysqli_connect_error());
}
