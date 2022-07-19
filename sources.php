<!DOCTYPE HTML>
<html lang="en-US">
    <head>
      <?php
      $page_name = "Sources";
      echo"<title>$page_name | J&amp;K COVID-19 DATA BANK</title>";
      include './includes/meta-tags.php' ?>
    </head>
    <body>
        <?php include './includes/header.php';
                require './config/connection.php' ?>
        <div class="container">
            <?php include './includes/headline.php' ?> 
            <div class="row">
                <div class="card-panel">
                    <div class="row">
                        <h4 class="center-align" style="font-weight:bold; color:#fa6161">Our Sources</h4>
                    </div>
			<div class="collection">
				<div><a href="//twitter.com/diprjk" target="_blank" class="collection-item">Twitter handle of Information &amp; PR, J&amp;K</a></div>
				<div><a href="//covid19bharat.org" target="_blank" class="collection-item">Coronavirus Outbreak in India - covid19bharat.org</a></div>
			</div>
		    </div>
		</div>
	    </div>
	    <?php include './includes/footer.php' ?>
	</body>
</html>
