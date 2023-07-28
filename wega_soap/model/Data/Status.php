<?php

/**
 * Description of Status
 *
 * @author Maciej Łosiński <maciek@w2b.pl>
 */
class Data_Status {
   
   /**
    * Status id
    * @var int 
    */
   public $id;
   
   /**
    * Status name
    * @var string
    */
   public $name;
   
   
   public function setId($id){
      $this->id = $id;
   }
   
   public function getId(){
      return $this->id;
   }
   
   
   public function setName($name){
      $this->name = $name;
   }
   
   public function getName(){
      return $this->name;
   }
   
}
