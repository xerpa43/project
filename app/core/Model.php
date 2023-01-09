<?php
class Model extends Database{
   protected $table = 'scandiweb2';
  protected static $instance;

   protected static function  initiate(){
    if(empty(self::$instance)){
       self::$instance = new self();
       return self::$instance;
    }
  }
   public function all(){
     $this->mode="get";
       $query = "select * from $this->table ORDER BY 'sku'";
       return $this->query($query);
   }
    
    public function getSku($data){
        $this->mode='get';
        $keys= array_keys($data);
        $query= "select * from $this->table where ";
        foreach($keys as $key){
         $query .= $key." =:".$key;
        } 
         $result=$this->query($query,$data);
        if($result){
            return $result[0];
        }
        else {
            return false;
        }
     }


     public function insert($data){
        $this->mode= 'insert';
        $keys = array_keys($data);
         $th = implode(",",$keys);
         $dh = implode(",:", $keys);
        $query = "insert into $this->table ($th) values(:$dh)";
        $this->query($query,$data);

     }
   
    public function delete($data){
        $this->mode= 'delete';
        $query = "delete from $this->table where ";
         $keys = array_values($data);
       
         $dh = implode("','", $keys);
         $query.= "sku IN ('".$dh."')";
         return $this->query($query);
        
        
    }


}
