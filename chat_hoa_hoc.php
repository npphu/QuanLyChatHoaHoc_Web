
<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['Admin'])) {
    echo '<script>window.location = "dang_nhap.php"; </script>';
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quản lý chất hóa học</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">

        <link href="css-js/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css-js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="css-js/themes/css/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="css-js/themes/css/flexslider.css" rel="stylesheet"/>
        <link href="css-js/themes/css/main.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="css-js/themes/js/jquery-1.7.2.min.js"></script>
        <script src="css-js/bootstrap/js/bootstrap.min.js"></script>				
        <script src="css-js/themes/js/superfish.js"></script>	
        <script src="css-js/themes/js/jquery.scrolltotop.js"></script>
               
    </head>
    <body>
        <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">
                    <a href="monan.php"><img src="../images/LogoBanner/logo-sfood.png" style="height:55px; width:193px" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>                                           
                        </ul>

                    </nav>
                </div>
            </section>
            <br />
            <br />
            <section class="main-content">
                <div class="row">
                    <div class="span12">
                        <div class="row">
                            <div class="span12">
                                <h4 class="title">
                                    <span class="pull-left"><span class="text"><span class="line">QUẢN <strong>LÝ</strong></span></span></span>
                                </h4> 
                                <h4 class="center">DANH SÁCH CHẤT HÓA HỌC</h4>
                                <p class="container left">
                                    <a href="them_chat.php">  <img src="images/icon-add_1.png" style="width: 60px; height: 60px" title="Thêm mới" alt=""/> </a>                             
                                </p>
                                <table class="table table-bordered table-hover table-striped" style="font-size:14px">
                                    <thead style="background-color:#6699FF">
                                        <tr>
                                            <th class="center">
                                                Tên hóa học
                                            </th>
                                            <th class="center">
                                                Tên chất
                                            </th>
                                            <th class="center">
                                                Loại chất
                                            </th>
                                            <th class="center">
                                                Mô tả
                                            </th>
                                            <th class="center" >
                                                Hình ảnh
                                            </th>
                                            <th class="center">Tùy chọn</th>
                                        </tr>
                                    </thead>
                                                <?php
                                                    require_once 'DBConnect.php';
                                                    $conn = new DbConnect();
                                                    $name=$conn->query("set names 'utf8'");  
                                                  
                                                    $chat = $conn->query("SELECT * from chathoahoc order by TenHoaHoc ");                                            
                                                    while($row= mysqli_fetch_array($chat))
                                                    {
                                                ?>          <tr>
                                                                <td class="center" style="vertical-align: middle">
                                                                        <?php echo $row['TenHoaHoc']; ?>
                                                                    </td>
                                                                   
                                                                    <td class="center" style="vertical-align: middle">
                                                                        <?php echo $row['TenChat']; ?>
                                                                    </td>
                                                                    
                                                                    <td class="center" style="vertical-align: middle">
                                                                        <?php echo $row['LoaiChat']; ?>
                                                                    </td>
                                                                    
                                                                    <td class="center" style="vertical-align: middle">
                                                                        <?php echo $row['MoTa']; ?>
                                                                    </td>
                                                                    
                                                                     <td class="center" style="vertical-align: middle">
                                                                         <img src="images/ChatHoaHoc/<?php echo $row['HinhAnh']; ?>" style="width:30px" />
                                                                    </td>
                                                                    
                                                                    <td class="center" style="vertical-align: middle">
                                                                        <a href="sua_chat.php?IdMonAn='.$row['IdMonAn'].'">  <img src="images/icon-update.png" style="width: 40px; height: 40px" title="Sửa món ăn" alt=""/> </a>                          
                                                                        <a href="xoa_chat.php?IdMonAn='.$row['IdMonAn'].'" title="BCDONLINE CONFIRM YES/ NO" onclick="return confirmAction()">  <img src="images/icon-delete.png" style="width: 40px; height: 40px" title="Xóa món ăn" alt=""/> </a>                                           
                                                                    </td>
                                                                </tr>
                                                <?php
                                                    }                                                     
                                                ?>                                                  
                                </table> 
                                 <p class="container right">
                                    <a href="index.php">  <img src="images/icon-home.png" style="width: 60px; height: 60px" title="Trang chủ" alt=""/> </a>                             
                                </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</section>
        <SCRIPT LANGUAGE="JavaScript">
              function confirmAction() {
                return confirm("Bạn có chắc muốn xóa món ăn này không ?")
              }
        </SCRIPT>
         <script src="./css-js/themes/js/common.js"></script>
        <script src="./css-js/themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function () {
                $(document).ready(function () {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 3500,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
</body>
</html>



