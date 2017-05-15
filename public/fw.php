<?php

$options = array(
                 'trace' => true,
                 'exceptions' => 0,
                 'login' => 'rudrn20000',
                 'password' => '4145d8d47c2a207aa2eb75300b55dced955e5851',
                 );
$client = new SoapClient('http://flightxml.flightaware.com/soap/FlightXML2/wsdl', $options);

// get the weather.
$params = array("airport" => "JFK");
$result = $client->Metar($params);
print_r($result);

?>
    