


    <?php

    if (isset($_SESSION['user'])) {
        
        extract($_SESSION['user']);
        
        $name_user = $_SESSION['user']['user'];
        $email_user = $_SESSION['user']['email'];
        $address_user = $_SESSION['user']['address'];
        $tel_user = $_SESSION['user']['tel'];

        // Kiểm tra vai trò
        $role = $_SESSION['user']['role'];

    }else{

        $name_user = 'Không có';
        $email_user = 'Không có';
        $address_user = 'Không có';
        $tel_user = 'Không có';
        $role=0;

    }
    if($role==1){
        $chucvu = "admin";
    }else{
        $chucvu = "Thành Viên";
    }
    ?>


    <div class="container_header">
        
        </div>
        


        <div class="container_titletk">
        <div class="titletk_box1">
            
                <div class="box1_img">
                    <img src="./image/logo.png" alt="">
                    <p>Tên tài khoản: <?= $name_user ?></p>
                </div>
                <div class="box2_text">
                    <ul>
                        <?php if($role==1) {?>
                            <li><a href="admin/index.php">Đăng nhập vào trang quản trị</a></li>
                        <?php }?>

                        <li><a href="index.php?act=lichsudathang">Danh Sách Đặt Lịch</a></li>
                        <li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
                        <li><a href="index.php?act=edit_taikhoan">Sửa Tài Khoản</a></li>
                        <li><a href="index.php?act=thoat">Đăng Xuất</a></li>

                    </ul>
                </div>
        </div>
        <div class="titletk_box2">
            <h1>Thông Tin Cá Nhân</h1>
            <div class="box2">
                <div class="box2_tt">
                    <p>Tên: <?= $name_user ?></p>
                    <p>Số Điện Thoại: <?= $tel_user ? $tel_user :'Không có' ?></p>
                </div>
                <div class="box2_tt">
                    <p>Email: <?= $email_user ?></p>
                    <p>Địa Chỉ: <?= $address_user ? $address_user : 'Không có' ?></p>
                    <p>Chức Vụ: <?= $chucvu ?></p>
                </div>   
                <!-- <div class="box2_input">
                    <a href="index.php?act=quenmk"><input type="submit" value="Đổi Mật Khẩu"></a>
                    <a href="index.php?act=edit_taikhoan"><input type="submit" value="Chỉnh Sửa Thông Tin"></a>
            </div> -->
            </div>

        </div>
            
        </div>