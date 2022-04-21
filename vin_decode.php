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

<?php include 'includes/header2.php'; ?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">VIN Decode</h1>
    </div>

    <div class="table-responsive">
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
</makes>
<?php
      include("includes/footer2.php")
?>