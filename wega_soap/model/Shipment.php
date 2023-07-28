<?php

/**
 * Description of Shipment
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Shipment extends AbstractClient{
   
   const WSDL = '/app_api/shipment?wsdl';
   
   protected $options = array(
     'classmap'   => array(        
        'Data_Shipment'          => 'Cms_Model_App_Api_Services_Data_Shipment',        
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return Data_Shipment[]
    * @throws SoapFault
    */
   public function getList(){
      $result = $this->client->getList(self::API_KEY);      
      
      return $result;
   }

}
