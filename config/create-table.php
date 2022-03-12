<?php
$hostname = "localhost";
$username = "biblicho_hanan";
$password = "hanan786@#$";
$db = "biblicho_covid";

$dbconnect = new mysqli($hostnamename, $username, $password, $db);

if ($dbconnect->connect_error) {
  die("Connection failed: " . $dbconnect->connect_error);
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

if ($dbconnect->query($table) === TRUE) {
  echo "Table cases created successfully";
} else {
  echo "Error creating table: " . $dbconnect->error;
}

$dbconnect->close();
?>
