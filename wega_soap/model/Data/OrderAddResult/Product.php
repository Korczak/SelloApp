<?php

/**
 * Description of Product
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_OrderAddResult_Product {
   
   /**
    * Product id
    * @var int 
    */
   public $product_id;
   
   /**
    * Ordered quantity. Could be less then requested.
    * @var int 
    */
   public $ordered_qty;
   
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
