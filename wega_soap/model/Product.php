<?php

/**
 * Description of Product
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */

class Product extends AbstractClient{
   
   const WSDL = '/app_api/product?wsdl';
      
   public function __construct() {
      parent::__construct(self::WSDL);
   }
   
   /**
    *
    * @return SimpleXMLElement 
    * @throws SoapFault
    */
   public function getList(){
      $result = $this->client->getList(self::API_KEY);      
      
      //zdebejzowac
      $decoded = base64_decode($result);
      
      //rozpakowac            
      $path = __DIR__ . md5(rand(1, 666) . time());
      file_put_contents($path, $decoded);
      
      $zip = new ZipArchive;      
      $zip->open($path);
                 
      $zip->extractTo(__DIR__);
      $zip->close();
      
      $xml = simplexml_load_file(__DIR__ . '/list.xml');
      
      unlink($path);      
      unlink(__DIR__ . '/list.xml');      
      
      return $xml;
   }

}
