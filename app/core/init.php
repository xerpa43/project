<?php
require 'config.php';
require 'App.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
spl_autoload_register(function ($class){ 
      
    $filename= __DIR__.'/../model/'.ucfirst($class).'.php';
    
    if(file_exists($filename)){
        
       include $filename;
       
       
    }
    else{
      echo "ERROR LOADING PRODUCT CLASS";
    }
    
    
   
});
