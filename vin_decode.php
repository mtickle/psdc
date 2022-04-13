<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$in_vin =  $_POST["vin"]; 
$format = "json";
$url = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/' . $in_vin . '?format=' . $format;
$json = file_get_contents($url);

$decode = json_decode($json, true);

$results = array();

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
                    </ul>

                    <br />

                    <a  class="btn btn-primary btn-sm" href="vin.php">Run Another</a>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
      include("includes/footer.php")
?>