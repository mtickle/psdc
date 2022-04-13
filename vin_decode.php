

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$in_vin =  $_POST["vin"]; 
$format = "json"
$url = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/' . $in_vin . '?format=' . $format;
//$response = file_get_contents();
echo $url;

//$json = '{"foo-bar": 12345}';
//$obj = json_decode($json);
//print $obj->{'foo-bar'}; // 12345



?>

