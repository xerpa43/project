<?php
 
class Add extends Controller{
   
   protected $result;
   public function index()
   { 
     
      
    if(!empty($_POST) && $_POST['option']!== 'none')
    { 
     
       
       if(class_exists($_POST['option']))
       {
          
          $product = new $_POST['option']($_POST);
          $this->result=$product->product_errors;
       
          if(empty($this->result)){
            $product->setData();
            header("Location:" ."/Final/public" );
            die;
          }
         
          
      }
     else{
         $this->result[]="SORRY NOT VALID PRODUCT";
     }
    }

   
    $this->view('add',$this->result);
   
     
    }
 

  
     
  }
       
        
         
       
      
      
      
     

   

       


 
   
  
   

   

