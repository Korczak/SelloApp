<?php

include_once 'inc.php';

//Stock
try{
   $stockClient = new Stock();
   $stock = $stockClient->get($product_id = 10649);

   $stockList = $stockClient->getList($product_ids = array(
      10649, 20183
   ));
   
   var_dump($stock, $stockList);
} catch(SoapFault $ex){
   echo nl2br($ex);
}
