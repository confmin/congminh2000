<?php
  
  class Database {
    
    private $hostname = 'localhost';
    private $name = 'root';
    private $pass = '';
    private $dbname = 'mvc_banhang';
    private $conn = NULL ;
    public $result = NULL ;

    public function connect()
    {
         $this->conn = new mysqli($this->hostname , $this->name,$this->pass,$this->dbname);
         if(!$this->conn)
         {
             die('lỗi');
             exit();
        
         }
         else  
         {
             mysqli_set_charset($this->conn,'utf8');
         }
         return $this->conn;
    }
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result ;
    }
    public function num_rows()
    {
      if($this->result)
      {
        $num_rows= mysqli_num_rows($this->result);
      }
      else
      {
      $num_rows = 0 ;
      }
      return $num_rows;
  }
  public function getdata()
  {
   if($this->result)
   {
     $data = mysqli_fetch_array($this->result);
   }
   else{
     $data = 0 ;
   }
   return $data ;
  }
  
}
?>