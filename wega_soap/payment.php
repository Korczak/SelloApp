<?php

include_once 'inc.php';

//payment
try{
   $paymentClient = new Payment();
   $payments = $paymentClient->getList();
   
   var_dump($payments);
} catch(SoapFault $ex){
   echo nl2br($ex);
} 
