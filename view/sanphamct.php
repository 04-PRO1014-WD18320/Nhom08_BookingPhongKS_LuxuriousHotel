<div class="banner">
            <input type="text" name="kyw"><input type="submit" name="timkiem" value="Tìm Kiếm">
        </div>
        <hr>
        <div class="container_titlect">
            <div class="title_box1">    
                <div class="title_img">
                    <div class="title_text">
                        <h1><?= $onesp['name']?>  </h1>
                    </div>
                    <div class="img_chinh">
                        <?php
                                extract($onesp);
                                $img = $img_path.$img;
                                echo '<img src="'.$img.'" alt="">';
                            ?>
                    </div>
                    <div class="title_img_box">
                        <img src="image/bc2.jpg" alt="">
                        <img src="image/bc2.jpg" alt="">
                        <img src="image/bc2.jpg" alt="">
                    </div>
                </div>
                <div class="title_form">
                    <form action="" method="post">
                        <div class="form_input">
                            <p>Ngày Nhận Phòng</p>
                            <input type="date" name="recieve" id="" required>
                        </div>
                        <div class="form_input">
                            <p>Ngày Trả Phòng</p>
                            <input type="date" name="return" id="" required>
                        <input type="number" name="maPhong" value="<?php echo $_GET['idsp'] ?>" hidden>
                        <input type="number" name="donGia" value="<?php echo $onesp['price'] ?>" hidden>
                        <input type="submit" name="order-btn" value="Đặt Phòng">
                        <h3>Giá: <?= $onesp['price']?>$/Day</h3><br>
                        <p>Lưu ý: Giá phòng sẽ thay đổi theo từng ngày từng thời điểm(ngày lễ, tết, cuối tuần)</p><br><br>
                        <h4>Diện Tích: <?= $onesp['dientich']?>m</h4>
                    </form>
                </div>
            </div>
        </div>
        <div class="title_box2">
                <div class="mota">
                    <h1>Mô tả</h1>
                    <p><?= $onesp['mota']?></p>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?=$id?>});
                    });
                </script>
                <h1>Bình Luận</h1>
                <div class="binhluanclass" id="binhluan">
                    
                </div>

                <!--  ------------------------------------------------------title_box2_hotel ------------------------------->
                <h1>Các Phòng Tương Tự</h1>
                <div class="title_box2_hotel">
                <?php
                    foreach ($sp_cung_loai as $cungloai){
                        extract($cungloai);
                        $hinh=$img_path.$img;
                        echo '
                        <a href="index.php?act=sanphamct&idsp='.$id.'">
                        <div class="hotel_sp">
                        <div class="content_sp_img">
                            <img src="'.$hinh.'" alt="" >
                        </div>
                        <div class="hotel_sp_price">
                            <div class="hotel_sp_text">
                                <h3><a href="index.php?act=sanphamct&idsp='.$id.'">'.$name.'</a></h3>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h4>Giá: '.$price.'$</h4>
                            </div>
                            <div class="hotel_sp_icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div> </a>' ;
                    }
                    ?>
                </div>
                </div>
            </div>