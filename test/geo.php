<?php
require_once 'HTTP/Request2.php';

function wget($url) {
$request = new HTTP_Request2($url, HTTP_Request2::METHOD_GET);
try {
    $response = $request->send();
    if (200 == $response->getStatus()) {
        return $response->getBody();
    } else {
        echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
             $response->getReasonPhrase();
    }
} catch (HTTP_Request2_Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
}

$res = wget('http://maps.googleapis.com/maps/api/geocode/json?address=11217&sensor=false');
$geo = json_decode($res);

foreach ( $geo->results as $loc ) {
echo $loc->formatted_address . "\n <BR />";
}
?>