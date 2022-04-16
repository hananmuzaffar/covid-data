<?php
$hostname = /* "hostname" */;
$username = /* "username" */;
$password = /* "password" */;
$db = /* "db_name" */;
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if (!$dbconnect) {
  die("Database connection failed.");
}
?>
