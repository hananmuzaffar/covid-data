<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>J&amp;K COVID-19 DATA</title>
        <?php include './includes/meta-tags.php' ?>
    </head>
    <body>
        <?php include './includes/header.php';
        require './config/connection.php'?>
        <!-- container start -->
        <div class="container" id="#home">
            <?php include './includes/headline.php' ?>
            <div class="row">
                <?php include './includes/main-data.php' ?>
            </div>
            <div class="row" id="districts">
              <h5 class="center">J&amp;K district wise list</h5>
              <?php include './includes/updation.php' ?>
              <table class="responsive-table centered highlight">
                <?php include './includes/district-details.php' ?>
              </table>
            </div>
            <div class="center"><a class="waves-effect btn" href="district-data.php">See full</a></div>
        </div>
        <!-- container end -->
        <?php include './includes/footer.php' ?>
</body>
</html>
