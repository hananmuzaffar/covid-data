<?php
$hostname = /* "hostname" */;
$username = /* "username" */;
$password = /* "password" */;
$db = /* "db-name" */;

$dbconnect = mysqli_connect($hostnamename, $username, $password, $db);

if (!$dbconnect) {
  die("Connection failed: " . mysqli_connect_error());
}

$table = "CREATE TABLE cases (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
district_name VARCHAR(30) NOT NULL,
total_positive_cases INT(255) NOT NULL,
old_positive_cases INT(255) NOT NULL,
new_positive_cases INT(255),
total_active_cases INT(255) NOT NULL,
old_active_cases INT(255) NOT NULL,
new_active_cases INT(255),
total_recovered INT(255) NOT NULL,
old_recovered INT(255) NOT NULL,
new_recovered INT(255),
total_deaths INT(255) NOT NULL,
old_deaths INT(255) NOT NULL,
ne_deaths INT(255),
headline_updation VARCHAR(255) NOT NULL,
cases_updation_date VARCHAR(255) NOT NULL,
cases_updation_time VARCHAR(255) NOT NULL
)";

if (mysqli_query($dbconnect,$table) {
  echo "Table cases created successfully";
} else {
  echo "Error creating table: " . mysqli_error($dbconnect);
}

mysqli_close($dbconnect);
?>
