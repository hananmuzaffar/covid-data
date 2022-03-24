<div class="row">
  <?php
  require './config/fetch-data.php';
  echo"<marquee class='col s12 m12 l12 teal lighten-1 white-text card-panel hoverable' scrollamount='7' onmouseover='this.stop();' onmouseout='this.start();'><h6><strong>" . $NEW_POSITIVE . " new positive cases";
  if ($NEW_DEATHS > 0)
  { echo ", "; }
  else
  { echo " &amp; "; }
  echo $NEW_RECOVERED . " new recoveries";
  if ($NEW_DEATHS > 0)
  { echo " &amp; " . $NEW_DEATHS . " new death(s) "; }
  /*if ($NEW_DEATHS > 1) { echo "s "; }*/
  else { echo " "; }
  echo "have been reported in Jammu &amp; Kashmir on " . $HEADLINE_UPDATION . ".</strong></h6></marquee>";
  ?>
</div>
