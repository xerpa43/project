<?php
class Database{
  public $mode;
   function connect(){

  $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
   $con = new PDO($string ,DBUSER,DBPASS);
   
    return $con;
   }


  public function query($query, $data = []){
   $con = $this->connect();
    $stm = $con->prepare($query);
    $check = $stm->execute($data);
    if($this->mode === 'get'){

    
     if($check)
      {
        $result = $stm->fetchALl(PDO::FETCH_OBJ);
        if(is_array($result) && count($result))
        {
            return $result;
        }
   
        }
    
        return false;

  }
}



}