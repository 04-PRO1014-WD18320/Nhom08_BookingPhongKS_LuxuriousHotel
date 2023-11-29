<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dangkytk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/chitietphong.css">
    <link rel="stylesheet" href="css/chinhsach.css">
    <link rel="stylesheet" href="css/thanhtoan.css">


    
</head>
<body>
    <div class="container">

        <!-- ---------------------------------------------container_header ------------------------------------------------------ -->

        <div class="container_header">
            <div class="container_header_box1">
                <div class="header_box1_img">
                    <!-- <img src="image/logofb2.png" alt=""> -->
                    <img src="image/logotw.png" alt="">
                    <img src="image/logogg.png" alt="">
                </div>
                <div class="header_box1_sdt">
                    <div class="header_box1_sdt1">
                        <i class="fa-solid fa-envelope"></i>
                        <p>thaidoanphong@gmail.com</p>
                    </div>
                    <div class="header_box1_sdt1">
                        <i class="fa-solid fa-phone"></i>
                        <p>0353113243</p>
                    </div>
                    
                </div>
            </div>
            <div class="container_header_box2">
                <div class="header_box2_logo">
                    <a href="index.php"><img src="image/logochinh.jpg" alt=""></a>
                </div>
                <div class="header_box2_menu">
                    <ul>
                        <li><a href="index.php">Trang Chủ</a></li>
                        <li><a href="index.php?act=chinhsach">Chính Sách</a></li>
                        <li><a href="">Tin Tức</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="header_box2_tk">
                    <?php
                    if (isset($_SESSION['user'])) {
                        # code...
                        extract($_SESSION['user']);
                    ?>
                        <a href=""><i class="fa-solid fa-heart"></i></a>
                        <a href="index.php?act=chitiettk"><i class="fa-solid fa-user"></i></a>
                    <?php
                    }else{

                    ?>
                        <a href="index.php?act=dangky"><input type="button" value="Đăng Ký" ></a>
                        <a href="index.php?act=dangnhap"><input type="button" value="Đăng Nhập"></a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>