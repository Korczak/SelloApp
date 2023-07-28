<?php

/**
 * Description of OrderAddResult
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_OrderAddResult {
   
   /**
    * Order id
    * @var int 
    */
   public $order_id;
   
   /**
    * Error code. not_realized - order not done, realized_partialy - order done but with not all products or not all variants, realized - compleatly done
    * @var string 
    */
   public $error_code;
   
   /**
    * Additional error message
    * @var string 
    */
   public $message;

   /**
    * List of all products for witch were attempt of order. With additional info about ordered quantity. qty = 0 means that variant was not added.
    * @var Cms_Model_App_Api_Services_Data_OrderAddResult_Product[]
    */
   public $products;   
      
}
