<?php
if(isset($_POST['submit']))
{
  mysqli_query($dbconnect, 'TRUNCATE TABLE cases');
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}
?>