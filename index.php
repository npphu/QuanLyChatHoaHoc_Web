<!DOCTYPE html>

<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>PH</title>
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
                    <a href="/admin/index.php"><img src="../images/LogoBanner/logo-sfood.png" style="height:55px; width:193px" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>
                            <?php
                                if(isset($_SESSION['Admin']))
                                {
                                    echo '<li><a href="/admin/index.php">Trang chủ</a></li> <li><a href="/admin/index.php">Chào '.$_SESSION['Admin'].'</a></li>';
                                }
                            ?>                           
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
                                    <span class="pull-left"><span class="text"><span class="line">QUẢN LÝ<strong> ỨNG DỤNG HỌC HÓA HỌC</strong></span></span></span>
                                </h4>
                                <div id="myCarousel" class="myCarousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <ul class="thumbnails">
                                                <br>
                                                <br>
                                                  <br>
                                                <br>
                                                
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="chat_hoa_hoc.php"><img src="images/chathoahoc.png" alt="" /></a></p>
                                                        <p style="font-size:16px; font-weight:bold"> <a href="chat_hoa_hoc.php" class="price">CHẤT HÓA HỌC </a></p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="loai_chat_hoa_hoc.php"><img src="images/loaichat.png" alt="" /></a></p>
                                                        <p style="font-size:16px; font-weight:bold"> <a href="loai_chat_hoa_hoc.php" class="price">LOẠI CHẤT</a></p>

                                                    </div>
                                                </li>

                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="phan_ung_hoa_hoc.php"><img src="images/phanunghoahoc.png" alt="" /></a></p>
                                                        <p style="font-size:16px; font-weight:bold"> <a href="phan_ung_hoa_hoc.php" class="price">PHẢN ỨNG HÓA HỌC</a></p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="loai_phan_ung.php"><img src="images/loaiphanung.png" alt="" /></a></p>
                                                        <p style="font-size:16px; font-weight:bold"> <a href="loai_phan_ung.php" class="price">LOẠI PHẢN ỨNG</a></p>

                                                    </div>
                                                </li>  
                                                <br>
                                                <br>
                                                  <br>
                                                <br>
                                                <br>
                                                <br>
                                                  <br>
                                                <br>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
            <section id="footer-bar">
                <div class="row">

                </div>
            </section>
            <section id="copyright">
                <span> <p>Nguyễn Phước Phú</p></span>
            </section>
        </div>
        <script src="~/Scripts/common.js"></script>
        <script src="~/Scripts/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function () {
                $(document).ready(function () {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000000,
                        animationSpeed: 60000,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
    </body>
</html>
