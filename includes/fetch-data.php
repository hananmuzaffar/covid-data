<?php
$query = mysqli_query($dbconnect, "SELECT * FROM cases where id=21")
or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query))
{
  $total_positive = $row['total_positive_cases'];
  $total_active = $row['total_active_cases'];
  $total_recovered = $row['total_recovered'];
  $total_deaths = $row['total_deaths'];
  $new_positive = $row['new_positive_cases'];
  $new_active = $row['new_active_cases'];
  $new_recovered = $row['new_recovered'];
  $new_deaths = $row['new_deaths'];
  $headline_updation = "05-March-2022";
  $data_updation_date = "05&sol;03&sol;2022";
  $data_updation_time ="06:23 pm";
}
?>