<?php

include_once 'inc.php';

//order
try{
   $orderClient = new Order();
   $order = $orderClient->get($order_id = 10);
   $status_id = $orderClient->getStatus($order_id = 10);
   
   $list = $orderClient->getList();
   
   $result = $orderClient->add($shipment_id = 1, $payment_id = 1, $address_id = 10, $address = array(), $is_dropshipping = true, $dropshipping_price = 1234.3, $products = array(
         array(
            'product_id'   => 20183,
            'qty'          => 12,
            'size'         => '44-46',
            'color'        => 'grafit'
         ),
         array(
            'product_id'   => 10649,
            'qty'          => 13,
            'color'        => 'czarny',
            'size'         => 'L'
         ),
         array(
            'product_id'   => 10649,
            'qty'          => 21,
            'color'        => 'biały',
            'size'         => 'XL'
         )
      ), $is_order_when_not_available = true);   
   
   var_dump($order, $status_id, $list, $result);
} catch(SoapFault $ex){
   echo nl2br($ex);
}
