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
  $headline_updation = $row['headline_updation'];
  $data_updation_date = $row['cases_updation_date'];
  $data_updation_time = $row['cases_updation_time'];
}
?>

<?php
$positive_total = $total_positive ?? "XXX";
$active_total = $total_active ?? "XXX";
$recovered_total = $total_recovered ?? "XXX";
$deaths_total = $total_deaths ?? "XXX";
$positive_new = $new_positive ?? "XX";
$active_new = $new_active ?? "XX";
$recovered_new = $new_recovered ?? "XX";
$deaths_new = $new_deaths ?? "XX";
$headline_update = $headline_updation ?? "XX-XXX-XXXX";
$data_update_date = $data_updation_date ?? "XX/XX/XXXX";
$data_update_time = $data_updation_time ?? "XX:XX XX";
?>  