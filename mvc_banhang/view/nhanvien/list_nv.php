
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân Viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 30px;margin-left:5px;">                  
              <table class="table table-hover" style="margin-top: 30px;border: 1px solid #343a40;width:1200px">
                <thead>
                  <tr class="bg-dark text-white">
                    <th>STT</th>
                    <th>Tên Nhân Viên</th>
                    <th>Ngày Sinh</th>
                    <th>Địa Chỉ</th> 
                    <th>Số Điện Thoại</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Sửa</th>
                    <th>Xoá Bỏ</th>
                  </tr>
                </thead>
                <tbody >
                <?php 
                     $data = $db->getlist_nv();
                     $i = 1 ;
                     foreach($data as $row){
                      echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$row['fullname'].'</td>
                        <td>'.$row['date'].'</td>
                        <td>'.$row['from'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['user'].'</td>
                        <td>'.$row['pass'].'</td>
                        <td><a onclick="confirm()" class="btn btn-warning" href="index.php?controller=nhanvien&action=edit&id='.$row['id'].' ">Edit</a></td>
                        <td><a class="btn btn-warning" href="index.php?controller=nhanvien&action=delete&id='.$row['id'].'">Delete</a></td>
                       </tr>'; 
                   $i++;
                }   
                ?>
                </tbody>
              </table>
   </div>

   <script language="javascript">
 function confirm(){
   return confirm("Bạn có muốn sửa không ?");
 }
</script>

</body>
</html>