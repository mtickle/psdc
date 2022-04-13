

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$in_vin =  $_POST["vin"]; 

$response = file_get_contents('https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/' . $in_vin . '?format=xml');

echo $response;


$xml = new SimpleXMLElement($response);

$xml = "<<<XML " . $xml . " XML";


libxml_use_internal_errors(true);
$sxe = simplexml_load_string($xml);
if ($sxe === false) {
    echo "Failed loading XML\n";
    foreach(libxml_get_errors() as $error) {
        echo "\t", $error->message;
    }
}




//echo $xml->asXML();

//$Response = new SimpleXMLElement($xml);


// $details = new SimpleXMLElement($response);

// echo $details;//->DecodedVINValues[0]->BodyClass;

?>

