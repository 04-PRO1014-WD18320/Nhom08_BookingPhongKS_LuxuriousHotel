<div class="sidebar_danhmuc">
                    <div class="danhmuc_title">Tài Khoản</div>
                    <div class="danhmuc_box">
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                        ?> 
                            <div class="row">
                                Xin chào  <br>
                                <?=$user?>
                            </div>
                            <div class="row">
                                <li><a href="index.php?act=quenmk">Quên Mật Khẩu</a></li>
                                
                                <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                                <li>       <a href="idmin/index.php"> Đăng Nhập Admin</a></li>

             
                                    
                                
                                <li><a href="index.php?act=thoat">Thoát</a></li>
                            </div>

                        <?php       
                            }else {
                                
                            
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row">
                                Tên đăng nhập <br>
                                <input type="text" name="user">
                            </div>
                            <div class="row">
                                Mật Khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row">
                                <input type="checkbox">Ghi nhớ tài khoản 
                            </div>
                            <div class="row">
                                <input type="submit" value="Đăng Nhập" name = "dangnhap"><br>
                            </div>
                            
                            <ul>
                                <li><a href="">Quên Mật Khẩu</a></li>
                                <li><a href="index.php?act=dangky">Đăng Ký Thành Viên</a></li>
                            </ul>

                        </form>
                        <?php } ?>
                    </div>
                </div>
                <div class="sidebar_danhmuc">
                    <div class="danhmuc_title">Danh Mục</div>
                    <div class="danhmuc_box2">
                        
                        <ul>
                            <?php
                                foreach ($dsdm as $dm) {
                                    extract ($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                                } 
                             ?>
                        </ul>
                    </div>
                    <div>
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" value="Tìm Kiếm" name="timkiem">
                        </form>
                    </div>
                </div>
                <div class="sidebar_danhmuc">
                    <div class="danhmuc_title">Top 10 Yêu Thích</div>
                    <div class="danhmuc_box2">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "imdex.php?act=samphamct&idsp=".$id;
                                $img = $img_path.$img;
                                echo '<div class="topsp">
                                    <img src="'.$img.'" alt="">
                                    <a href="index.php?act=sanphamct&idsp='.$id.'">'.$name.'</a>
                                </div>';
                            }
                        ?>
                    </div>
                </div> 
                </div>       