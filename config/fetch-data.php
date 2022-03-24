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
$TOTAL_POSITIVE = $total_positive ?? "XXX";
$TOTAL_ACTIVE = $total_active ?? "XXX";
$TOTAL_RECOVERED = $total_recovered ?? "XXX";
$TOTAL_DEATHS = $total_deaths ?? "XXX";
$NEW_POSITIVE = $new_positive ?? "XX";
$NEW_ACTIVE = $new_active ?? "XX";
$NEW_RECOVERED = $new_recovered ?? "XX";
$NEW_DEATHS = $new_deaths ?? "XX";
$HEADLINE_UPDATION = $headline_updation ?? "XX-XXX-XXXX";
$DATA_UPDATION_DATE = $data_updation_date ?? "XX/XX/XXXX";
$DATA_UPDATION_TIME = $data_updation_time ?? "XX:XX XX";
?>  
