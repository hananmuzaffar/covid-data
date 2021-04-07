<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>J&amp;K COVID-19 DATA BANK</title>
<?php include 'includes/header.php' ?>

<div class="container" id="#home">
<div class="row">
<marquee class="col s12 m12 l12 teal lighten-1 white-text card-panel" scrollamount="9" onmouseover="this.stop();" onmouseout="this.start();"><h6><b>561 new positive cases &amp; 2 new deaths (2 from Srinagar district) reported in Jammu &amp; Kashmir on 06-April.</b></h6></marquee>
</div>
<div class="row">
<div class="row">
<p class="col s12 m6 l4 card-panel yellow darken-1 collection-item black-text z-depth-0" ><i class="fas fa-info-circle"></i> <b>Last updated on:</b> <span>06&sol;04&sol;2021</span> <span>06:13 pm</span></p>
</div>
<div class="row yellow lighten-4" id="jk">
<h5>Jammu & Kashmir</h5>
<div style="text-transform:uppercase;">
<div class="col s12 m6 l3 card-panel hoverable red lighten-4 collection-item red-text text-darken-3"><i class="fas fa-users"></i> Positive<span class="new badge red white-text" data-badge-caption="new">561</span><h4>1,34,015</h4></div>
<div class="col s12 m6 l3 card-panel hoverable blue lighten-4 collection-item blue-text text-darken-3"><i class="fas fa-procedures"></i> Active<span class="new badge blue white-text" data-badge-caption="new">329</span><h4>4,483</h4></div>
<div class="col s12 m6 l3 card-panel hoverable green lighten-4 collection-item green-text text-darken-3"><i class="fas fa-heart"></i> Recovered<span class="new badge green white-text" data-badge-caption="new">230</span><h4>1,27,520</h4></div>
<div class="col s12 m6 l3 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3"><i class="fas fa-ambulance"></i>  Deaths<span class="new badge grey white-text" data-badge-caption="new">2</span><h4>2,012</h4></div>
</div>
</div>
<div class="row grey lighten-4" id="india">
<h5>India</h5>
<div style="text-transform:uppercase;">
<div class="col s12 m6 l3 card-panel hoverable red lighten-4 collection-item red-text text-darken-3"><i class="fas fa-users"></i> Positive<span class="new badge red white-text" data-badge-caption="new">--</span><h4>1,26,86,830</h4></div>
<div class="col s12 m6 l3 card-panel hoverable blue lighten-4 collection-item blue-text text-darken-3"><i class="fas fa-procedures"></i> Active<h4>7,85,787</h4></div>
<div class="col s12 m6 l3 card-panel hoverable green lighten-4 collection-item green-text text-darken-3"><i class="fas fa-heart"></i> Recovered<span class="new badge green white-text" data-badge-caption="new">--</span><h4>1,17,30,449</h4></div>
<div class="col s12 m6 l3 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3"><i class="fas fa-ambulance"></i>  Total Deaths<span class="new badge grey white-text" data-badge-caption="new">--</span><h4>1,65,585</h4></div>
</div>
</div>
<div class="row blue lighten-4" id="world">
<h5>World</h5>
<div style="text-transform:uppercase;">
<div class="col s12 m6 l4 card-panel hoverable red lighten-4 collection-item red-text text-darken-3"><i class="fas fa-users"></i> Positive<h4>13,25,42,667</h4></div>
<div class="col s12 m6 l4 card-panel hoverable green lighten-4 collection-item green-text text-darken-3"><i class="fas fa-heart"></i> Recovered<h4>10,68,46,929</h4></div>
<div class="col s12 m6 l4 card-panel hoverable grey lighten-2 collection-item grey-text text-darken-3"><i class="fas fa-ambulance"></i>  Total Deaths<h4>28,76,199</h4></div>
</div>
</div>
</div>
<div class="row" id="districts">
<h5 class="center">J&amp;K district wise list</h5>
<div class="row">
<?php include 'includes/table-update.php'?>
</div>
<table class="responsive-table centered highlight">
<?php include 'includes/district-table.php' ?>
</table>
</div>
</div>

<div class="center hide-on-large-only"><a class="waves-effect btn" href="district-data.php">See full</a></div>
<?php include 'includes/footer.php' ?>