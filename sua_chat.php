<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sửa thông tin chất</title>
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
                    <p>Sửa chất hóa học</p>                                    
                </div>
                <div class="col-md-9 register-right">                       
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">SỬA THÔNG TIN CHẤT</h3>
                            <?php
                            require_once 'DBConnect.php';

                            if (isset($_GET['IdChat'])) {
                                $idmonan = $_GET['IdChat'];
                            } else {
                                echo '<script> alert("Không có mã chất.");<script>';
                            }
                            $conn = new DbConnect();
                            $name = $conn->query("set names 'utf8'");
                            $ctv = $conn->query("SELECT * from chathoahoc where IdChat='$idmonan'");
                            $row = mysqli_fetch_array($ctv);
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập tên hóa học" name="txtTenHoaHoc" value="<?php echo $row['TenHoaHoc']; ?>" required autofocus/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập tên chất" name="txtTenChat" value="<?php echo $row['TenChat']; ?>" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <textarea  class="form-control"  placeholder="Nhập mô tả" name="txtMoTa" value="" required=""><?php echo $row['MoTa']; ?></textarea>
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
                                                $chat = $conn->query("SELECT * from loaichathoahoc order by TenLoai asc");
                                                while ($kv = mysqli_fetch_array($chat)) {
                                                    if ($kv['IdLoai'] == $row['LoaiChat']) {
                                                        echo '<option value="' . $kv['IdLoai'] . '" selected>' . $kv['TenLoai'] . '</option>';
                                                    } else {
                                                        echo '<option value="' . $kv['IdLoai'] . '">' . $kv['TenLoai'] . '</option>';
                                                    }
                                                }
                                                ?>                                 
                                            </select>
                                        </div>      

                                        <div class="form-group">
                                            <input type="file" class="form-control"  name="txtAnh" />
                                            <?php echo ' <img src="images/ChatHoaHoc/' . $row['HinhAnh'] . '" style="width:100px" />'; ?>
                                            <span>(Ảnh hiện tại)</span>
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
        if (isset($_GET['IdChat'])) {
            $idmonan = $_GET['IdChat'];
        } else {
            echo '<script> alert("Không có mã chất.");<script>';
        }
        if (isset($_POST['btnDangKy'])) {

            $tenhh = $_POST['txtTenHoaHoc'];
            $tenchat = $_POST['txtTenChat'];
            $loaichat = $_POST['LoaiChat'];
            $mota = $_POST['txtMoTa'];
            $anhcu = $row['HinhAnh'];

            if ($_FILES['txtAnh']['name']) {
                $anhmoi = $_FILES['txtAnh']['name'];
                $file_path = $_FILES['txtAnh']['name'];
                $new_path = "images/ChatHoaHoc/" . $anhmoi;
                $anhcu = $anhmoi;
                move_uploaded_file($file_path, $new_path);
            } else {
                $anhcu = $anhcu;
            }

            $conn = new DbConnect();
            $name = $conn->query("set names 'utf8'");
            $conn->query("UPDATE `chathoahoc` SET `TenHoaHoc`='$tenhh',`TenChat`='$tenchat',`LoaiChat`='$loaichat',`MoTa`='$mota', `HinhAnh`='$anhcu' WHERE chathoahoc.IdChat = $idmonan");
            echo '<script>alert("Update thành công."); </script>';
            echo '<script>window.location = "chat_hoa_hoc.php"; </script>';
        }
        ?>
    </body>
</html>











