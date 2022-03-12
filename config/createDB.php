<?php
$hostname = /*"hostname"*/;
$username = /*"username"*/;
$password = /*"password"*/;

$dbconnect = mysqli_connect($hostnamename, $username, $password);
if (!$dbconnect) {
  die("Connection failed: " . mysqli_connect_error());
}

$db = "CREATE DATABASE myDB";
if (mysqli_query($dbconnect, $db)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?>
