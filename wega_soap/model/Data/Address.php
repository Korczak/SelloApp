<?php

/**
 * Description of Address
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Address {
   
   /**
    * Address id
    * @var string 
    */
   public $id;
   
   /**
    * Company name / name and lastname
    * @var string
    */
   public $name;
   
   /**
    * Street name
    * @var string
    */   
   public $street;
   
   /**
    * Building number
    * @var string
    */   
   public $building_number;
   
   /**
    * House number
    * @var string
    */   
   public $house_number;
   
   /**
    * Postcode
    * @var string
    */   
   public $postcode;
   
   /**
    * City
    * @var string
    */   
   public $city;
   
   /**
    * Valid country code. 
    * @var string
    */   
   public $country;
   
   /**
    * Phone number
    * @var string
    */   
   public $phone;
      
}
