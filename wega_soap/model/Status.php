<?php

/**
 * Description of Status
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Status extends AbstractClient{
   
   const WSDL = '/app_api/status?wsdl';
   
   protected $options = array(
     'classmap'   => array(                
        'Data_Status'          => 'Cms_Model_App_Api_Services_Data_Status',        
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return Data_Status[]
    * @throws SoapFault
    */
   public function getList(){
      $result = $this->client->getList(self::API_KEY);      
      
      return $result;
   }

}
