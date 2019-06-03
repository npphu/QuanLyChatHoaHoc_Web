<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thêm phản ứng hóa học</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css-js/bootstrap/css/singup.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <a href="phan_ung_hoa_hoc.php"><img src="http://www.flowrider.com/wp-content/uploads/2018/01/PH-LOGO-feature-image.jpg"" title="Về trang chủ" alt=""/></a>                       
                    <h3>PH</h3>
                    <p>Thêm PƯ hóa học</p>                                      
                </div>

                <div class="col-md-9 register-right">                       
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">NHẬP THÔNG TIN PHẢN ỨNG</h3>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="Chat1">
                                                <option class="hidden"  selected disabled>Chọn chất 1</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from ChatHoaHoc');
                                                while ($row = $ds->fetch_assoc()) {
                                                    echo '<option value="' . $row['TenHoaHoc'] . '">' . $row['TenHoaHoc'] . '</option>';
                                                }
                                                ?>         
                                            </select>
                                        </div>     
                                        <div class="form-group">
                                            <select class="form-control" name="Chat2">
                                                <option class="hidden"  selected disabled>Chọn chất 2</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from ChatHoaHoc');
                                                while ($row = $ds->fetch_assoc()) {
                                                    echo '<option value="' . $row['TenHoaHoc'] . '">' . $row['TenHoaHoc'] . '</option>';
                                                }
                                                ?>         
                                            </select>
                                        </div>     
                                        <div class="form-group">
                                            <select class="form-control" name="SP1">
                                                <option class="hidden"  selected disabled>Chọn chất SP1</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from ChatHoaHoc');
                                                while ($row = $ds->fetch_assoc()) {
                                                    echo '<option value="' . $row['TenHoaHoc'] . '">' . $row['TenHoaHoc'] . '</option>';
                                                }
                                                ?>         
                                            </select>
                                        </div>     

                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <select class="form-control" name="SP2">
                                                <option class="hidden"  selected disabled>Chọn chất SP2</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from ChatHoaHoc');
                                                while ($row = $ds->fetch_assoc()) {
                                                    echo '<option value="' . $row['TenHoaHoc'] . '">' . $row['TenHoaHoc'] . '</option>';
                                                }
                                                ?>         
                                            </select>
                                        </div>     
                                        
                                        <div class="form-group">
                                            <select class="form-control" name="LoaiPU">
                                                <option class="hidden"  selected disabled>Chọn loại PƯ</option>
                                                <?php
                                                require_once 'DBConnect.php';
                                                $conn = new DbConnect();
                                                $name = $conn->query("set names 'utf8'");
                                                $ds = $conn->query('Select * from LoaiPhanUng');
                                                while ($row = $ds->fetch_assoc()) {
                                                    echo '<option value="' . $row['IdLoaiPhanUng'] . '">' . $row['TenLoaiPhanUng'] . '</option>';
                                                }
                                                ?>         
                                            </select>
                                        </div>      

                                        <div class="form-group">
					<p>Chọn hình ảnh PƯ</p>
                                            <input type="file" class="form-control"  name="txtAnh" value="" required=""/>
                                        </div>
                                        <div class="form-group">
					<p>Chọn âm thanh PƯ</p>
                                            <input type="file" class="form-control"  name="txtAudio" accept=""  value="" required=""/>
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

            $chat1 = $_POST['Chat1'];
            $chat2 = $_POST['Chat2'];
            $sp1 = $_POST['SP1'];
            $sp2 = $_POST['SP2'];
            $loaipu = $_POST['LoaiPU'];
            $file = $_FILES['txtAnh'];
            $fileau = $_FILES['txtAudio'];
            
            if (!isset($_FILES['txtAnh'])) {
                echo '<script>alert("Lỗi."); </script>';
            }
            move_uploaded_file($file['tmp_name'], 'images/PhanUng/' . $file['name']);
            
            move_uploaded_file($fileau['tmp_name'], 'audios/'.$fileau['name']);
            
            $conn = new DbConnect();
            $name = $conn->query("set names 'utf8'");
            $conn->ThemPhanUng($chat1, $chat2, $sp1, $sp2, $loaipu, $file['name'], $fileau['name']);
            
            echo '<script>alert("Thêm thành công."); </script>';
            echo '<script>window.location = "phan_ung_hoa_hoc.php"; </script>';
        }
        ?>
    </body>
</html>











