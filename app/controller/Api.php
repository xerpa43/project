<?php
class Api extends controller{

    function index($value=''){
       
        header('Content-Type: application/json');
        $a =new Model();
      
    
        $data=$a->getSku(['sku' => $value]);
        if($data){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
        
    }
}