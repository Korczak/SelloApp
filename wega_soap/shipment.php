<?php

include_once 'inc.php';

//shipment
try{
   $shipmentClient = new Shipment();
   $shipments = $shipmentClient->getList();
   
   var_dump($shipments);
} catch(SoapFault $ex){
   echo nl2br($ex);
} 
