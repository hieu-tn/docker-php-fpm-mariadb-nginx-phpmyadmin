<?php

$mysqli = new mysqli("mariadb","root","root", "data");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "connected";
