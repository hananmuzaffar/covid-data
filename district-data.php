<!DOCTYPE HTML>
<html lang="en-US">
    <head>
      <?php
      $page_name = "Tabular Data";
      echo "<title>$page_name | J&amp;K COVID-19 DATA BANK</title>";
      include './includes/meta-tags.php';
      ?>
    </head>
    <body>
        <?php include './includes/header.php';
                require './config/connection.php' ?>
        <!-- container start -->
        <div class="container">
            <?php include './includes/headline.php'; ?>
            <div class="row" id="districts">
                <h5 class="center red-text lighten-3">J&amp;K district wise list</h5>
                <?php include './includes/updation.php' ?>
              	<table class="centered highlight">
                  <?php include './includes/district-details.php' ?>
              	</table>
            </div>
        </div>
        <!-- container end -->
        <?php include './includes/footer.php' ?>
    </body>
</html>
