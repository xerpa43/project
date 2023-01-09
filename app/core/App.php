<?php

class Router{
    public $controller= 'products';
    public $method = 'index';
    private function split()
       {
        $url = $_GET['url'] ?? 'products';
        $url = explode("/",$url);
    
        return $url;
        }
        
         public function FindController()
        {
            $url=$this->split();
            
            $filename= "../app/controller/".ucfirst($url[0]).".php";
            if(file_exists($filename)){
               
                require $filename;
                $this->controller= ucfirst($url[0]);
                
                unset($url[0]);
            }
            else{
            $filename= "../app/controller/_404.php";
            require $filename;
            $this->controller='_404';
            } 

           
 
            $controller = new $this->controller;
          
            if(!empty($url[1])){
                  
                if(method_exists($this->controller, $url[1])){
                    $this->method =$url[1];
                    unset($url[1]);
                }
            }
           call_user_func_array([$controller, $this->method], $url);

           
   
        }

        
}