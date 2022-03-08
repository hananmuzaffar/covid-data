    <div class="row deep-purple lighten-5" id="jk">
        <h5 class="deep-purple lighten-1 white-text jk-heading" style="padding:10px 0 10px 10px; border-radius:2px;">Jammu &amp; Kashmir</h5>
      <?php include 'updation.php' ?>
        <div style="text-transform:uppercase;">
        <?php
  			include 'fetch-data.php';
                echo
            "<div class='col s12 m6 l3 card-panel hoverable red lighten-4 collection-item red-text text-darken-3'><i class='fas fa-users'></i> <span style='font-size:1.25rem'>Positive</span><span class='new badge red white-text' data-badge-caption='new'>" . $positive_new . "</span><p style='font-size: 2rem;'><strong>" . $positive_total . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable blue lighten-4 collection-item blue-text text-darken-3'><i class='fas fa-procedures'></i>  <span style='font-size:1.25rem'>Active</span><span class='new badge blue white-text' data-badge-caption='new'>" . $active_new . "</span><p style='font-size: 2rem;'><strong>" . $active_total . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable green lighten-4 collection-item green-text text-darken-3'><i class='fas fa-heart'></i>  <span style='font-size:1.25rem'>Recovered</span><span class='new badge green white-text' data-badge-caption='new'>" . $recovered_new . "</span><p style='font-size: 2rem;'><strong>" . $recovered_total . "</strong></p></div>
            <div class='col s12 m6 l3 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3'><i class='fas fa-ambulance'></i>   <span style='font-size:1.25rem'>Deaths</span><span class='new badge grey white-text' data-badge-caption='new'>" . $deaths_new . "</span><p style='font-size: 2rem;'><strong>" . $deaths_total . "</strong></p></div>";
            ?>
            </div>
    </div>
    <!-- <div class="row yellow lighten-4" id="india">
            <h5>India</h5>
            <div style="text-transform:uppercase;">
                <div class="col s12 m6 l3 card-panel hoverable red lighten-4 collection-item red-text text-darken-3"><i class="fas fa-users"></i> Positive<span class="new badge red white-text" data-badge-caption="new">--</span><p style="font-size: 2rem;"><strong>1,32,68,537</strong></p></div>
                <div class="col s12 m6 l3 card-panel hoverable blue lighten-4 collection-item blue-text text-darken-3"><i class="fas fa-procedures"></i> Active <p style="font-size: 2rem;"><strong>10,83,303</strong></p></div>
                <div class="col s12 m6 l3 card-panel hoverable green lighten-4 collection-item green-text text-darken-3"><i class="fas fa-heart"></i> Recovered<span class="new badge green white-text" data-badge-caption="new">--</span><p style="font-size: 2rem;"><strong>1,20,11,124</strong></p></div>
                <div class="col s12 m6 l3 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3"><i class="fas fa-ambulance"></i>  Total Deaths<span class="new badge grey white-text" data-badge-caption="new">--</span><p style="font-size: 2rem;"><strong>1,68,719</strong></p></div>
        </div>
    </div> -->