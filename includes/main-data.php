    <div class="row deep-purple lighten-5" style="border-radius:2px" id="jk">
        <h5 class="deep-purple lighten-1 white-text jk-heading" style="padding:10px 0 10px 10px; border-radius:2px;">Jammu &amp; Kashmir</h5>
      <?php include 'updation.php' ?>
        <div style="text-transform:uppercase;">
        <?php
  			include './config/fetch-data.php';
                echo
            "<div class='col s12 m6 l3 card-panel hoverable red lighten-4 collection-item red-text text-darken-3'><i class='fas fa-users'></i> <span style='font-size:1.25rem'>Positive</span><span class='new badge red white-text' data-badge-caption='new'>" . $NEW_POSITIVE . "</span><p style='font-size: 2rem;'><strong>" . $TOTAL_POSITIVE . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable blue lighten-4 collection-item blue-text text-darken-3'><i class='fas fa-procedures'></i>  <span style='font-size:1.25rem'>Active</span><span class='new badge blue white-text' data-badge-caption='new'>" . $NEW_ACTIVE . "</span><p style='font-size: 2rem;'><strong>" . $TOTAL_ACTIVE . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable green lighten-4 collection-item green-text text-darken-3'><i class='fas fa-heart'></i>  <span style='font-size:1.25rem'>Recovered</span><span class='new badge green white-text' data-badge-caption='new'>" . $NEW_RECOVERED . "</span><p style='font-size: 2rem;'><strong>" . $TOTAL_RECOVERED . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3'><i class='fas fa-ambulance'></i>   <span style='font-size:1.25rem'>Deaths</span><span class='new badge grey white-text' data-badge-caption='new'>" . $NEW_DEATHS . "</span><p style='font-size: 2rem;'><strong>" . $TOTAL_DEATHS . "</strong></p></div>";
            ?>
            </div>
    </div>
