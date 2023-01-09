<?php
class DVD extends Products{
  
    function validateValue(){

  if(!empty($this->raw['size']) && preg_match("/^[0-9]+$/",$this->raw['size'])){
        $this->value="Size: " .$this->raw['size'] ."MB";

           return;    
             }
             $this->product_errors[]="Size is not given";
             return;
     
       
        
    }
} 

