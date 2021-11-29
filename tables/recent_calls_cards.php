    <?php
include_once("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>

<style>
.tile-map { 
    height: 280px; 
    width: 100%;
  }

</style>

<?php foreach($calls as $key => $call) :?>
    <div class="card">
        <div class="card-header">
        <?php echo $call['incident'] ?>
        </div>
        <div class="card-body">
        
        <div class="tile-map" id="map-<?php echo $call['id'] ?>"></div>
        <h5 class="card-title"><?php echo $call['incident'] ?>: <?php echo $call['location'] ?></h5>
        <?php echo $call['agency'] ?> - <?php echo $call['call_time'] ?> on  <?php echo $call['call_date'] ?>
        </div>
    </div>
<br />

<script>

 var mymap = L.map('map-<?php echo $call['id'] ?>').setView([35.7796, -78.6382], 10);

 L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   maxZoom: 20,
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
     'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   id: 'mapbox/streets-v11',
   tileSize: 512,
   zoomOffset: -1
 }).addTo(mymap);
L.marker([<?php echo $call['latitude'] ?>, <?php echo $call['longitude'] ?>]).addTo(mymap).bindPopup("<?php echo $call['incident'] ?>").openPopup();
</script>

<?php endforeach;?>

