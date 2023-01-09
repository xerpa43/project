<?php
class Furniture  extends Products{
  $this->type =$this->raw['option'];
  function validateValue()
    {
   if($this->raw['height'] && $this->raw['width'] && $this->raw['length']){
   $this->value = "Dimension: " .$this->raw['height'] ."x". $this->raw['width']."x".$this->raw['length'];
      return;   
   }

   $this->product_errors['furniture']="Furniture Dimensions were not provided";
    return;
        
    }
}
