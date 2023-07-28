<?php

/**
 * Description of OrderAddResult
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Order {
   
   /**
    * Order id
    * @var int 
    */
   public $id;
   
   /**
    * Data dodania
    * @var string 
    */
   public $date_added;
   
   /**
    * Status id
    * @var int
    */
   public $status_id;
   
   /**
    * Address id
    * @var int
    */
   public $address_id;
   
   /**
    * Shipment id
    * @var int 
    */
   public $shipment_id;
   
   /**
    * Payment id
    * @var int
    */
   public $payment_id;
   
   /**
    * Order number
    * @var string
    */
   public $number;
   
   /**
    * Is dropshipping
    * @var bool
    */
   public $is_dropshipping;
   
   /**
    * Dropshipping price
    * @var float
    */
   public $dropshipping_price;
   
   /**
    * List of product for this order. It contains requested amount and realized amount.
    * @var Cms_Model_App_Api_Services_Data_Order_Product[]
    */
   public $products;   
   
}
