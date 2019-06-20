<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Admin-Đăng nhập</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link href="css-js/bootstrap/css/login.css" rel="stylesheet" type="text/css"/>
        
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                                            <a href="index.php"><img src="http://www.flowrider.com/wp-content/uploads/2018/01/PH-LOGO-feature-image.jpg" class="brand_logo" alt="Logo" title="Về trang chủ"></a>                                       
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                                    <form method="post" action="dang_nhap.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                                                    <input type="text" name="txtTenDangNhap" autofocus="" class="form-control input_user" value="" placeholder="Nhập tên tài khoản"/>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="txtMatKhau" class="form-control input_pass" value="" placeholder="Nhập mật khẩu"/>
						</div>
                                                <div class="input-group mb-2 actions">						
                                                    <input type="submit" tabindex="1"  class="btn login_btn" name="btnDangNhap" class="form-control input_pass" value="Đăng nhập Admin"/>
						</div>                                      
					</form>
				</div>				
			</div>
		</div>
	</div>
    <?php
   if (isset($_POST['btnDangNhap'])) {
      
        $user = $_POST['txtTenDangNhap'];                     
        $pass = $_POST['txtMatKhau'];                  
        if ($pass == "admin" && $user == "admin" ) {
            $_SESSION['Admin'] = "admin";          
            echo '<script>window.location = "index.php"; </script>';
        } else {
            echo '<script>alert ("Sai thông tin đăng nhập, vui lòng kiểm tra lại."); </script>';
        }
    }
    ?>
</body>
</html>





