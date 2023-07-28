<?php

/**
 * Description of Product
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Order_Product {
   
   /**
    * Product id
    * @var int 
    */
   public $product_id;
   
   /**
    * Ordered quantity
    * @var int 
    */
   public $ordered_qty;
   
   /**
    * Realized quantity. Could be less than ordered quantity
    * @var int 
    */
   public $realized_qty;
   
   /**
    * Color
    * @var string
    */
   public $color;
   
   /**
    * Size
    * @var string
    */
   public $size;
      
}
