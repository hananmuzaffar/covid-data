<!DOCTYPE HTML>
<html>
<head>
<title>Patient Details | J&amp;K COVID-19 DATA BANK</title>
<?php include 'includes/header.php' ?>

<div class="container">
    <div class="progress">
<div class="indeterminate"></div>
    </div>
    <p class="center-aligned">Working on it. Will be added soon.</p>
    </div>

<?php
$hostname = "localhost";
$username = "biblicho_bc";
$password = "hanan786@#$";
$db = "biblicho_covid19";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
?>
    <div class="row">
        <div class="row"> <h4 class="center-align" style="font-weight:bold; color:#fa6161">Patient Details</h4></div>
        <table class="centered highlight">
<thead>
<tr>
<th>ID</th>
<th>Date Announced</th>
<th>District Reported</th>
<th>Age</th>
<th>Gender</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
$query = mysqli_query($dbconnect, "SELECT id, date, district, age, gender, status FROM details ORDER BY id DESC")
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
   
<td>{$row['id']}</td>
<td>{$row['date']}</td>
<td>{$row['district']}</td>
<td>{$row['age']}</td>
<td>{$row['gender']}</td>
<td>{$row['status']}</td>
</tr>";
}
?>
</tbody>
</table>
	</div>

<?php include 'includes/footer.php' ?>