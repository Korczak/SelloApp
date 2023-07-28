<?php

/**
 * Description of Address
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Address extends AbstractClient{
   
   const WSDL = '/app_api/address?wsdl';
   
   protected $options = array(
     'classmap'   => array(        
        'Data_Address'          => 'Cms_Model_App_Api_Services_Data_Address',
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return Data_Address[]
    * @throws SoapFault
    */
   public function getList(){
      $result = $this->client->getList(self::API_KEY);      
      
      return $result;
   }
   
   /**
    * 
    * @param int address_id
    * @return Data_Address
    * @throws InvalidArgumentException, SoapFault
    */
   public function get($address_id){
      if(!$address_id){
         throw new InvalidArgumentException();
      }
      
      $result = $this->client->get(self::API_KEY, $address_id);
      
      return $result;
   }
   
   /**
    * 
    * @param string $name
    * @param string $street
    * @param string $building_number
    * @param string $house_number
    * @param string $postcode
    * @param string $city
    * @param string $country
    * @param string $phone
    * @return int
    */
   public function add($name, $street, $building_number, $house_number, $postcode, $city, $country, $phone){
      if(!$name){
         throw new InvalidArgumentException();
      }
      
      if(!$street){
         throw new InvalidArgumentException();
      }
      
      if(!$building_number){
         throw new InvalidArgumentException();
      }
      
      if(!$postcode){
         throw new InvalidArgumentException();
      }
      
      if(!$city){
         throw new InvalidArgumentException();
      }
      
      if(!$country){
         throw new InvalidArgumentException();
      }
      
      
      $result = $this->client->add($name, $street, $building_number, $house_number, $postcode, $city, $country, $phone);
      
      return $result;
   }
}
