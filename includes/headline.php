<div class="row">
  <?php
  include 'fetch-data.php';
  echo"<marquee class='col s12 m12 l12 teal lighten-1 white-text card-panel hoverable' scrollamount='9' onmouseover='this.stop();' onmouseout='this.start();'><h6><strong>" . $new_positive . " new positive cases, " . $new_recovered . " new recoveries &amp; " . $new_deaths . " new death(s) have been reported in Jammu &amp; Kashmir on " . $headline_updation . ".</strong></h6></marquee>";
  ?>
</div>
