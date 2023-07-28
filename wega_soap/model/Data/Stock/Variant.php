<?php

/**
 * Description of Variant
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Stock_Variant {
      
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
   
   /**
    * Quantity
    * @var string
    */
   public $qty;
      
   
   public function setColor($color){
      $this->color = $color;
   }
   
   public function getColor(){
      return $this->color;
   }


   public function setSize($size){
      $this->size = $size;
   }
   
   public function getSize(){
      return $this->size;
   }
   

   public function setQty($qty){
      $this->qty = $qty;
   }
   
   public function getQty(){
      return $this->qty;
   }
   
}
