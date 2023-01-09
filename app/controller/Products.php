<?php
class Products extends Controller
{

    
    public function index(){
         $new = new Model();
     if($_POST){
        $id = $_POST['delete'];
        $new->delete($id);
     }
   
       $data=$new->all();
       
      $this->view('products',$data);
   
    }
}

