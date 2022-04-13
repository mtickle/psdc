<?php

//--- Grab the VIN from the form
$in_vin =  $_POST["vin"]; 

//--- Set up some stuff for the API
$format = "json";
$url = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/' . $in_vin . '?format=' . $format;

//--- Get the JSON and do PHP stuff to it.
$json = file_get_contents($url);
$decode = json_decode($json, true);
$results = array();

//--- Get the values from the JSON.
foreach($decode['Results'] as $chunk) {
    $BodyClass = $chunk['BodyClass'];
    $VehicleType = $chunk['VehicleType'];
    $FuelTypePrimary = $chunk['FuelTypePrimary'];
    $Make = $chunk['Make'];
    $Model = $chunk['Model'];
    $ModelYear = $chunk['ModelYear'];
    $VIN = $chunk['VIN'];
}

?>

<?php include 'includes/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    VIN Decode Results
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item"><?php echo $VIN ?></li>
                        <li class="list-group-item"><?php echo $Make ?></li>
                        <li class="list-group-item"><?php echo $Model ?></li>
                        <li class="list-group-item"><?php echo $ModelYear ?></li>
                        <li class="list-group-item"><?php echo $VehicleType ?></li>
                        <li class="list-group-item"><?php echo $FuelTypePrimary ?></li>
                    </ul>

                    <br />

                    <a class="btn btn-primary btn-sm" href="vin.php">Run Another</a>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
      include("includes/footer.php")
?>