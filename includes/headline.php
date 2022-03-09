<div class="row">
  <?php
  require './config/fetch-data.php';
  echo"<marquee class='col s12 m12 l12 teal lighten-1 white-text card-panel hoverable' scrollamount='9' onmouseover='this.stop();' onmouseout='this.start();'><h6><strong>" . $positive_new . " new positive cases, " . $recovered_new . " new recoveries &amp; " . $deaths_new . " new death(s) have been reported in Jammu &amp; Kashmir on " . $headline_update . ".</strong></h6></marquee>";
  ?>
</div>
