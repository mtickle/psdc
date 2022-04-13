

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

echo $BodyClass .'<br/>';
echo $VehicleType .'<br/>';
echo $FuelTypePrimary . '<br />';
echo $Make . '<br />';
echo $Model . '<br />';
echo $ModelYear . '<br />';
echo $VIN . '<br />';

?>

