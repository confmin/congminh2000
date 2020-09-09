
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/nv_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    
        <h1>Đăng Nhập Quản Lý</h1>
   
    <div class="login">
    <div class="container"> 
    <form method="POST" class="was-validated">
    <div class="form-group">
      <label for="uname">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="uname" placeholder="Nhập tài khoản" name="user" required>
     
      <div class="invalid-feedback">Vui lòng nhập trường hợp này</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pass" required>
     
      <div class="invalid-feedback">Vui lòng nhập trường hợp này</div>
    </div>
      </label>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Đăng Nhập</button>
  </form>
</div>
</div>
</body>
</html>