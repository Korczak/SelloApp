<?php

/**
 * Description of AbstractClient
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
abstract class AbstractClient {

   const BASE_URL = 'https://www.wega.wroc.pl';
   const API_KEY = 'My api key, witch i can get from wega.wroc.pl after log in';   
   
   /**
    *
    * @var SoapClient 
    */
   protected $client;
   
   /**
    *
    * @var Array 
    */
   protected $options = array();
   
   protected function __construct($wsdl) {      
      $this->client = new SoapClient(self::BASE_URL . $wsdl, array_merge($this->options, array(
         'trace'        => true,
         'exceptions'   => true         
      )));
   }
}
