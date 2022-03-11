<div class="row">
  <?php
  require './config/fetch-data.php';
  echo"<marquee class='col s12 m12 l12 teal lighten-1 white-text card-panel hoverable' scrollamount='9' onmouseover='this.stop();' onmouseout='this.start();'><h6><strong>" . $positive_new . " new positive cases"; if ($deaths_new > 0) { echo ", ";} else { echo " &amp; ";} echo $recovered_new . " new recoveries"; if ($deaths_new > 0) { echo " &amp; " . $deaths_new . " new death(s)";} /*if ($deaths_new > 1) { echo "s "; }*/ else { echo " ";} echo "have been reported in Jammu &amp; Kashmir on " . $headline_update . ".</strong></h6></marquee>";
  ?>
</div>
