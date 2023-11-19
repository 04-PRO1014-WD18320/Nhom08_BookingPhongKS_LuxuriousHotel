<h1>Cập nhật tài khoản</h1>
                <div class="container_content_chitiet danhmuc_box">
                    <?php
                        if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                            extract($_SESSION['user']);
                        }
                    ?>
                       <form action="index.php?act=edit_taikhoan" method="post">
                            <div class="row">
                                Email <br>
                                <input type="email" name="email" value="<?=$email?>">
                            </div>
                            <div class="row">
                                Tên Đăng Nhập <br>
                                <input type="text" name="user" value="<?=$user?>">
                            </div>  
                            <div class="row">
                                Mật Khẩu <br>
                                <input type="password" name="pass" value="<?=$pass?>">
                            </div>
                            <div class="row">
                                Địa chỉ<br>
                                <input type="text" name="address" value="<?=$address?>">
                            </div>
                            <div class="row">
                                Điện Thoại <br>
                                <input type="text" name="tel" value="<?=$tel?>">
                            </div>
                            <div class="row">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="submit" value="Cập nhật" name="capnhat">
                                <input type="reset" value="Nhập lại">
                            </div>                            
                        </form> 
                        <h2 class="thongbao">
                            <?php 
                            
                                if (isset($thongbao)&&($thongbao!="")) {
                                    # code...
                                    echo $thongbao;
                                }                       
                            ?>
                        </h2>
                </div>