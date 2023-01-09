<?php
class Book extends Products{
  
    function validateValue(){
       if(!empty($this->raw['weight']) && preg_match("/^[0-9]+$/",$this->raw['weight'])){
      $this->value= "Weight: ". $this->raw['weight'] ."KG";
         return;    
       }
       $this->product_errors[]="Invalid weight";
       return;

    }
    
}