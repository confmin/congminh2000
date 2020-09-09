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
</head>
<body>
    
<div class="container" style="border: 1px solid #343a40;margin-top:20px;border-radius: 5px;background:#ddf1f2">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="text-center" style="margin-top:15px">Sửa đổi</h3>
                  </div>
                  <div class="panel-body">
                    <form method="POST" >
                      <div class="form-group">
                        <label >Tên Khách Hàng</label>
                        <input type="number" name="ID" style="display: none;">
                        <input required="true" type="text" class="form-control" value="<?php echo $dataID['fullname']; ?>" name="fullname">
                      </div>
                      <div class="form-group">
                        <label >Sinh Ngày</label>
                        <input required="true" type="text" id="SinhNgay" class="form-control" value="<?php echo $dataID['date'];?>" name="date">
                      </div>
                      <div class="form-group">
                        <label >Địa Chỉ</label>
                        <input required="true" type="text" id="DiaChi" class="form-control" value="<?php echo $dataID['from'];?>" name="from">
                      </div>
                      <div class="form-group">
                        <label> Số Điện Thoại</label>
                        <input required="true" type="text" id="SDT" class="form-control" value="<?php echo $dataID['phone']; ?>  "name="phone">
                      </div>
                      <div class="form-group">
                        <label>Tài Khoản</label>
                        <input required="true" type="text" id="TaiKhoan" class="form-control"  value="<?php echo $dataID['user'];?>"name="user">
                      </div>
                      <div class="form-group">
                      <button  name="update" class="btn btn-success"  style="margin-left: 500px" >Cập Nhập</button>
                    </form>
                  </div>
              </div>
</body>
</html>