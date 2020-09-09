<?php
include('model/session.php');
include_once('model/model_nv.php');
if(isset($_GET['controller']))
{
    $controller = $_GET['controller'];
}
else
{
    $controller = null ;
}

switch($controller)
{
    case'nhanvien':
        {
            require_once('controller/nhanvien/index.php');
        }
    case'admin':
        {
            require_once('controller/admin/admincontroller.php');
        }
} 
?>