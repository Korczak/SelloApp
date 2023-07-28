<?php

/**
 * Description of Order
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Order extends AbstractClient{
   
   const WSDL = '/app_api/order?wsdl';
   
   protected $options = array(
     'classmap'   => array(        
        'Data_Order'          => 'Cms_Model_App_Api_Services_Data_Order',
        'Data_Order_Product'          => 'Cms_Model_App_Api_Services_Data_Order_Product',        
        
        'Data_OrderAddResult'          => 'Cms_Model_App_Api_Services_OrderAddResult_Order',
        'Data_OrderAddResult_Product'          => 'Cms_Model_App_Api_Services_Data_OrderAddResult_Product',        
     ) 
   );
   
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return Data_Order[]
    * @throws SoapFault
    */
   public function getList($api_key, $status_id, $date_added_from, $date_added_to){
      $result = $this->client->getList(self::API_KEY, $api_key, $status_id, $date_added_from, $date_added_to);      
      
      return $result;
   }
   
   /**
    * 
    * @param int $order_id
    * @return Data_Order
    * @throws InvalidArgumentException, SoapFault
    */
   public function get($order_id){
      if(!$order_id){
         throw new InvalidArgumentException();
      }
      
      $result = $this->client->get(self::API_KEY, $order_id);
      
      return $result;
   }
   
   /**
    * 
    * @param int $order_id
    * @return int
    * @throws InvalidArgumentException, SoapFault
    */
   public function getStatus($order_id){
      if(!$order_id){
         throw new InvalidArgumentException();
      }
      
      $result = $this->client->getStatus(self::API_KEY, $order_id);
      
      return $result;
   }
   
   /**
    * 
    * @param int $shipment_id
    * @param int $payment_id
    * @param int $address_id
    * @param array $address
    * @param bool $is_dropshipping
    * @param float $dropshipping_price
    * @param array $products
    * @param bool $is_order_when_not_available
    * @return Data_OrderAddResult
    * @throws InvalidArgumentException, SoapFault
    */
   public function add($shipment_id, $payment_id, $address_id, $address, $is_dropshipping, $dropshipping_price, $products, $is_order_when_not_available){
      if(!$shipment_id){
         throw new InvalidArgumentException();
      }
      
      if(!$payment_id){
         throw new InvalidArgumentException();
      }
      
      if(!$address_id && $address){
         throw new InvalidArgumentException();
      }
      
      if(!$products){
         throw new InvalidArgumentException();
      }

      $result = $this->client->add($shipment_id, $payment_id, $address_id, $address, $is_dropshipping, $dropshipping_price, $products, $is_order_when_not_available);
      
      return $result;
   }
}
