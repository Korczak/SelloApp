<?php

include_once 'inc.php';

//product
try{
   $productClient = new Product();
   $products_xml = $productClient->getList();
   
   echo $products_xml;
} catch(SoapFault $ex){
   echo nl2br($ex);
}