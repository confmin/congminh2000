<?php

class DANGNHAP
{
   public function start(){
       return session_start();
   }
   public function destroy(){
       return session_destroy();
   }
   public function check(){
       $check=isset($_SESSION['user']);
       if(!$check)
       {
           header('location:index.php?controller=nhanvien&action=login');
       }
       else
       {
        
         
       }
       return $check; 
   }
  public function admin()
  {
     $admin = $_SESSION['user'];
     if($admin =='admin')
     {
         header('location:index.php?controller=nhanvien&action=add');
     }
     else
     {
        header('location:index.php?controller=nhanvien&action=list');
     }
     return $admin ;
  }
}
$ss = new DANGNHAP ;
$ss->start();

?>