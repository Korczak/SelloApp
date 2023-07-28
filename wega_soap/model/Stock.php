<?php

/**
 * Description of Stock
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Stock extends AbstractClient{
   
   const WSDL = '/app_api/stock?wsdl';
   
   protected $options = array(
     'classmap'   => array(        
        'Data_Stock'          => 'Cms_Model_App_Api_Services_Data_Stock',
        'Data_Stock_Variant'  => 'Cms_Model_App_Api_Services_Data_Stock_Variant',
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    * 
    * @param array $product_ids
    * @return Data_Stock[]
    * @throws InvalidArgumentException, SoapFault
    */
   public function getList(Array $product_ids){
      if(!$product_ids){
         throw new InvalidArgumentException();
      }
            
      $result = $this->client->getList(self::API_KEY, $product_ids);      
      
      return $result;
   }
   
   /**
    * 
    * @param int $product_id
    * @return Data_Stock
    * @throws InvalidArgumentException, SoapFault
    */
   public function get($product_id){
      if(!$product_id){
         throw new InvalidArgumentException();
      }
      
      $result = $this->client->get(self::API_KEY, $product_id);
      
      return $result;
   }
}
