<?php

$client = new SoapClient("https://api.radioreference.com/soap2/?wsdl&v=latest");

$countries = $client->getCountryList();

var_dump($countries);
?>