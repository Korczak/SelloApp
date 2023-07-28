<?php

include_once 'inc.php';

//address
try{
   $addressClient = new Address();
   $address = $addressClient->get(10);
   
   $list = $addressClient->getList();
   
   $address_id = $addressClient->add($name = 'Jan kowalski', $street = 'Wyszynskiego', $building_number = '12', $house_number = '2', $postcode  = '58-3094', $city   = 'Wroclaw', $country = 'pl', $phone = '74242342');
   
   var_dump($address, $list, $address_id);
} catch(SoapFault $ex){
   echo nl2br($ex);
}
