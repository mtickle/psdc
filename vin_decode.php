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
    $Manufacturer = $chunk['Manufacturer'];
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

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">VIN</th>
                                <td><?php echo $VIN ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Manufacturer</th>
                                <td><?php echo $Manufacturer ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Make</th>
                                <td><?php echo $Make ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Model</th>
                                <td><?php echo $Model ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Model Year</th>
                                <td><?php echo $ModelYear ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Vehicle Type</th>
                                <td><?php echo $VehicleType ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Fuel Type</th>
                                <td><?php echo $FuelTypePrimary ?></td>
                            </tr>
                        </tbody>
                    </table>
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