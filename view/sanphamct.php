<!-- <div class="banner">
</div> -->
<hr>
<div class="container_titlect">
    <div class="title_box1">
        <div class="title_img">
            <div class="title_text">
                <h1><?= $onesp['name'] ?> </h1>
            </div>
            <div class="img_chinh">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<img src="' . $img . '" alt="">';
                ?>
            </div>
        </div>
        
            <div class="title_form">
            <?php
        // Kiểm tra trạng thái đăng nhập
        if (isset($_SESSION['user'])) {
            ?>
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
                        <h3>Giá: <?= $onesp['price'] ?>$/Day</h3>
                        <p>Lưu ý: Giá phòng sẽ thay đổi theo từng ngày từng thời điểm(ngày lễ, tết, cuối tuần)</p>
                        <h4>Diện Tích: <?= $onesp['dientich'] ?>m</h4>
                    </div>
                </form>
                <?php } else {
            echo '<p class="ktradangnhap">Bạn cần đăng nhập để đặt phòng.</p>';
        }
        ?>
            </div>
        
    </div>
    <div class="title_box2">
    <div class="mota">
        <h1>Mô tả</h1>
        <p><?= $onesp['mota'] ?></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro:<?= $id ?>});
        });
    </script>
    <h1>Bình Luận</h1>
    <div class="binhluanclass" id="binhluan">
    </div>
    <h1>Các Phòng Tương Tự</h1>
    <div class="title_box2_hotel2">
        <?php
        foreach ($sp_cung_loai as $cungloai) {
            extract($cungloai);
            $hinh = $img_path . $img;
            echo '
            <a href="index.php?act=sanphamct&idsp=' . $id . '">
                <div class="hotel_sp">
                    <div class="content_sp_img">
                        <img src="' . $hinh . '" alt="" >
                    </div>
<div class="hotel_sp_price">
                        <div class="hotel_sp_text">
                            <h3><a href="index.php?act=sanphamct&idsp=' . $id . '">' . $name . '</a></h3>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h4>Giá: ' . $price . '$</h4>
                        </div>
                        <div class="hotel_sp_icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
</div>
</div>
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault(); // Ngăn chặn form submit mặc định

            // Kiểm tra điều kiện đặt phòng
            var recieveDate = document.querySelector("input[name='recieve']").value;
            var returnDate = document.querySelector("input[name='return']").value;

            var today = new Date();
            today.setHours(0, 0, 0, 0); // Đặt giờ, phút, giây thành 0 để so sánh ngày

            var condition = true;
            var errorMessage = "";

            if (new Date(recieveDate) < today) {
                condition = false;
                errorMessage = "Ngày đặt phải lớn hơn hoặc bằng ngày hôm nay!";
            } else if (new Date(recieveDate) >= new Date(returnDate)) {
                condition = false;
                errorMessage = "Ngày đặt phải nhỏ hơn ngày trả!";
            }

            if (!condition) {
                alert(errorMessage);
            } else {
                // Submit form
                this.submit();
            }
        });
    });
</script> -->
