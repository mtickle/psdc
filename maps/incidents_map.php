
<?php
include_once("classes/incident.php");
$objIncident = new Incident();
$items = $objIncident->getRecentIncidents();
?>

<style>
#map { 
    height: 380px; 
    width: 100%;
  }

</style>

<div id="map"></div>

<script>

 var mymap = L.map('map').setView([35.7796, -78.6382], 12);

 L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   maxZoom: 20,
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
     'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   id: 'mapbox/streets-v11',
   tileSize: 512,
   zoomOffset: -1
 }).addTo(mymap);


 <?php foreach($items as $key => $item) :?>
    L.marker([<?php echo $item['latitude'] ?>, <?php echo $item['longitude'] ?>]).addTo(mymap).bindPopup("<?php echo $item['crime_description'] ?><br /><?php echo $item['reported_block_address'] ?>").openPopup();
  <?php endforeach;?>

</script>
