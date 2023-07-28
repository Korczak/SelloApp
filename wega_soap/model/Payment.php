<?php

/**
 * Description of Payment
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Payment extends AbstractClient{
   
   const WSDL = '/app_api/payment?wsdl';
   
   protected $options = array(
     'classmap'   => array(        
        'Data_Payment'          => 'Cms_Model_App_Api_Services_Data_Payment',        
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return Data_Payment[]
    * @throws SoapFault
    */
   public function getList(){
      $result = $this->client->getList(self::API_KEY);      
      
      return $result;
   }

}
