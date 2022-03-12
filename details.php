<!DOCTYPE HTML>
<html>
   <head>
      <title>Patient Details | J&amp;K COCID-19 DATA BANK</title>
      <?php
         require './config/connection.php';
         include './includes/meta-tags.php'
      ?>
   </head>
   <body>
     <?php include './includes/header.php' ?>
     <div class="container">
       <?php  include './includes/headline.php' ?>
       <div class="row">
         <div class="row">
           <h4 class="center-align" style="font-weight:bold">Patient Details</h4>
         </div>
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
           $query = mysqli_query($dbconnect, "SELECT * FROM details ORDER BY id DESC")
           or die (mysqli_error($dbconnect));
     while ($row = mysqli_fetch_array($query)) {
       echo
         "<tr>
         	<td>{$row['id']}</td>
            <td>{$row['date_announced']}</td>
            <td>{$row['district_reported']}</td>
            <td>{$row['age']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['status']}</td>
          </tr>";
     }
             ?>
           
           </tbody>
         </table>
         <div id="progress"> </div>
       </div>
     </div>
     <?php include './includes/footer.php' ?>
  </body>
</html>
