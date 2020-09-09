<?php
   require_once('model/config.php');
  class ModelNV extends Database {
    
    public function insert_nv($fullname,$date,$from,$phone,$user,$pass)
    {
      $sql = " INSERT INTO mvc_nv(`fullname`,`date`,`from`,`phone`,`user`,`pass`) VALUE ('$fullname','$date','$from','$phone','$user','$pass')"; 
      return $this->execute($sql);
    }
    public function check_nv($user)
    {
      $sql = "SELECT * FROM mvc_nv where user='$user'";
       $this->execute($sql);
       return $this->num_rows();
    }
   
    public function getlist_nv()
    {
      $sql = "SELECT * FROM mvc_nv";
      $this->execute($sql);
      if($this->num_rows()== 0)
      {
        $data = 0 ;
      }
      else
      {
        while($datas = $this->getdata()){
          $data[]=$datas ;
        }
      }
      return $data ;
    }
    public function delete($id)
    {
      $sql ="DELETE FROM mvc_nv WHERE id ='$id' "; 
      return $this->execute($sql);
    }
     public function update($id,$fullname,$date,$from,$phone,$user)
    {
      $sql = "UPDATE mvc_nv SET fullname = '$fullname', `date` ='$date' , `from` ='$from',phone ='$phone',user='$user' WHERE id='$id' ";
      return $this->execute($sql);
    }
    public function getID($id)
  {
    $sql = "SELECT * FROM mvc_nv WHERE id ='$id' ";
    $this->execute($sql);
    if($this->num_rows() != 0)
   {
    $data = mysqli_fetch_array($this->result);
   }
   else{
    $data = 0;
   }
   return $data ;
  }
  public function login($user,$pass)
  {
    $sql = "SELECT * FROM mvc_nv WHERE user = '$user' and pass='$pass' ";
    return $this->execute($sql);
  }
    
}
$db = new ModelNV ;
$db->connect();


?>