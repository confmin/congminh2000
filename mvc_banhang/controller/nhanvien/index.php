<?php
use DoctrineExtensions\Query\Mysql\Md5;

if(isset($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = null ;
}

switch ($action) {
    case 'add':
        {
          require_once('view/nhanvien/add_nv.php');
          if(isset($_POST['submit']))
          {
              $fullname =$_POST['fullname'] ;
              $date =$_POST['date'] ;
              $from = $_POST['from'];
              $phone = $_POST['phone'];
              $user = $_POST['user'];
              $pass= $_POST['pass'];
              $pass = Md5($pass);
              if(strlen($user) <= 4 ){
                echo '<div class="alert alert-warning" style="margin-left:20px" >
                <strong>Lỗi!</strong> Tài khoản quá ngắn 
                </div>';
              }
              else
              {
                  if($db->check_nv($user)==0)
                  {
                    $db->insert_nv($fullname,$date,$from,$phone,$user,$pass);
                    echo'<div class="alert alert-success">
                <strong>Thành công!</strong> Bạn đã tạo tài khoản thành công.
                  </div>';
                  }
                  else{
                    echo '<div class="alert alert-warning">
                    <strong>Lỗi!</strong> Tài khoản này đã tồn tại trên hệ thống. Vui lòng thử lại !
                  </div>';
                  }
                
              }            
          }
        break;
        }
        
        
    case 'list':{
        require_once('view/nhanvien/list_nv.php');
    break;
    }
    case'edit':{
      if(isset($_GET['id']))
      {
        $id = $_GET['id'];
       $dataID= $db->getID($id);
       if(isset($_POST['update']))
       {
        $fullname =$_POST['fullname'] ;
        $date =$_POST['date'] ;
        $from = $_POST['from'];
        $phone = $_POST['phone'];
        $user = $_POST['user'];
        if($db->update($id,$fullname,$date,$from,$phone,$user))
        {
          header('location: index.php?controller=nhanvien&action=list');
        }
       }
      }
     require_once('view/nhanvien/edit.php');
    break;
  }
case'delete':{
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    if($db->delete($id))
    {
      header('location: index.php?controller=nhanvien&action=list');
    }
  }
break;
}
case'login':{
  if(isset($_POST['login']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $db->login($user,$pass);
   
    if($db->num_rows()==1)
    {
      $_SESSION['user'] =$_POST['user']; 
      $ss->check();
      $ss->admin();
    }
    else
    {
      echo'sai';
    }
  }
  require_once('view/nhanvien/login.php');
}
break;
}

?>