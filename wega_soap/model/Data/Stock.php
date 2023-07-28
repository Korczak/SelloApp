<?php

/**
 * Description of Stock
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Stock {
   
   /**
    * Product id
    * @var string
    */
   public $product_id;
   
   /**
    * Array of variants of product color/size with quantity
    * @var Cms_Model_App_Api_Services_Data_Stock_Variant[]
    */
   public $variants;
   
   public function setProductId($product_id){
      $this->product_id = $product_id;
   }
   
   public function getProductId(){
      return $this->product_id;
   }
   
   
   public function setVariants($variants){
      $this->variants = $variants;
   }
   
   public function getVariants(){
      return $this->variants;
   }
   
}
