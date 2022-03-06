<?php
$hostname = "localhost";
$username = "biblicho_hanan";
$password = "hanan786@#$";
$db = "biblicho_covid";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
?>