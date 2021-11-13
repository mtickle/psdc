
<style>
#map { 
    height: 380px; 
    width: 900px;
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


 L.marker([35.748218, -78.875430]).addTo(mymap)
   .bindPopup("Road Hazard").openPopup();

   L.marker([35.816789, -78.594963]).addTo(mymap)
   .bindPopup("MVC Injuries 29B1").openPopup();  

 //var popup = L.popup();

 

</script>