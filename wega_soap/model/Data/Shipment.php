<?php

/**
 * Description of Shipment
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Shipment {
   
   /**
    * Shipment id
    * @var int 
    */
   public $id;
   
   /**
    * Is dropshipping
    * @var bool
    */
   public $is_dropshipping;   
   
   /**
    * Shipment name
    * @var string
    */
   public $name;
   
   /**
    * Array of allowed payments for this shipment
    * @var Array
    */
   public $allowed_payment_ids;   
      
}
