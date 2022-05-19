
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$calls = $objIncident->getRecentCalls();
?>

<style>
#map { 
    height: 380px; 
    width: 100%;
  }

</style>

<div id="map"></div>

<script>

 var mymap = L.map('map').setView([35.7796, -78.6382], 10);

 L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   maxZoom: 20,
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
     'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   id: 'mapbox/streets-v11',
   tileSize: 512,
   zoomOffset: -1
 }).addTo(mymap);


 <?php foreach($calls as $key => $call) :?>
    L.marker([<?php echo $call['latitude'] ?>, <?php echo $call['longitude'] ?>]).addTo(mymap).bindPopup("<?php echo $call['agency'] ?><br /><?php echo $call['incident'] ?>").openPopup();
  <?php endforeach;?>

</script>
