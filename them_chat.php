<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thêm chất hóa học</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css-js/bootstrap/css/singup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <a href="chat_hoa_hoc.php"><img src="http://www.flowrider.com/wp-content/uploads/2018/01/PH-LOGO-feature-image.jpg"" title="Về trang chủ" alt=""/></a>                       
                    <h3>PH</h3>
                    <p>Thêm chất hóa học</p>                                      
                </div>

                <div class="col-md-9 register-right">                       
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">NHẬP THÔNG TIN CHẤT</h3>
                            <form action="them_chat.php" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập tên hóa học" name="txtTenHoaHoc" value="" required autofocus/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập tên chất" name="txtTenChat" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <textarea  class="form-control"  placeholder="Nhập mô tả" name="txtMoTa" value="" required=""></textarea>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">                                     
                                        <div class="form-group">
                                            <select class="form-control" name="LoaiChat">
                                                <option class="hidden"  selected disabled>Chọn loại chất</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from LoaiChatHoaHoc');
                                                 while ($row = $ds -> fetch_assoc())            
                                                {
                                                    echo '<option value="'.$row['IdLoai'].'">'.$row['TenLoai'].'</option>';                                                                                                   
                                                } 
                                            ?>         
                                            </select>
                                        </div>      
                                                                                          
                                          <div class="form-group">
						<p>Chọn hình ảnh</p>
                                             <input type="file" class="form-control"  name="txtAnh" value="" required=""/>
                                        </div>
                                        <input type="submit" tabindex="1" class="btnRegister"  value="Save" name="btnDangKy"/>
                                    </div>
                                </div>
                            </form>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once 'DBConnect.php';
        if (isset($_POST['btnDangKy'])) {
            
            $tenhh = $_POST['txtTenHoaHoc'];
            $tenchat = $_POST['txtTenChat'];
            $loaichat = $_POST['LoaiChat'];
            $mota = $_POST['txtMoTa'];
            $file = $_FILES['txtAnh'];
            if(!isset($_FILES['txtAnh']))
            {
                echo '<script>alert("Lỗi."); </script>';  
            }
            move_uploaded_file($file['tmp_name'], 'images/ChatHoaHoc/'.$file['name']);
            
            
            
                $conn = new DbConnect();
                $name = $conn->query("set names 'utf8'");
                $conn->ThemChat($tenhh, $tenchat, $loaichat,$mota, $file['name']);
                echo '<script>alert("Thêm thành công."); </script>';
                echo '<script>window.location = "them_chat.php"; </script>';
            }       
        ?>
    </body>
</html>









