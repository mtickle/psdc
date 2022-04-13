
<html>
<body>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$in_vin =  $_POST["vin"]; 

$response = file_get_contents('https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/' . $in_vin . '?format=xml');

$xml = new SimpleXMLElement($response);

echo $xml->asXML();


// $details = new SimpleXMLElement($response);

// echo $details;//->DecodedVINValues[0]->BodyClass;

?><br>


</body>
</html>