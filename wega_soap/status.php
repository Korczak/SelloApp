<?php

include_once 'inc.php';

//status
try{
   $statusClient = new Status();
   $statuses = $statusClient->getList();
   
   var_dump($statuses);
} catch(SoapFault $ex){
   echo nl2br($ex);
}