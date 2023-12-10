        <!-- ---------------------------------------------container_banner-------------------------------------------------------- -->

        <div class="container_banner">
            <div class="content_banner" onload="aotoSlide()">
                <div class="mySlide"><img src="image/banner1.png" alt=""></div>
                <div class="mySlide"><img src="image/banner2.png" alt=""></div>
                <div class="mySlide"><img src="image/banner3.png" alt=""></div>
            </div>
            <div class="container_banner_search">
                <form action="index.php?act=sanpham" method="post">

                    <div class="search_box1">
                        <input type="text" name="kyw"  class="input1" placeholder="Bạn muốn tìm gì nào......">
                        <input type="submit" value="Tìm Kiếm" class="input2" name="timkiem">
                    </div>
                    <div class="search_box2">
                    <select name="locgia" id="locgia">
                            <option value="0">Lọc Theo Giá</option>
                            <option value="1">--Dưới 100.000VND--</option>
                            <option value="2">--100.000 - 300.000VND--</option>
                            <option value="3">--Trên 500.000VND--</option>
                            <option value="4">--Trên 1.000.000VND--</option>
                        </select>
                        <select name="iddm" id="">
                        <option value="0" selected> loại phòng</option>
                            <?php
                                foreach ($dsdm as $danhmuc) {
                                extract($danhmuc);
                                if ($iddm == $id) {
                                    $s = "selected";
                                } else {
                                    $s = "";
                                }
                                echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="search_box3">
                        <div class="form_input1">
                            <p>Ngày Nhận Phòng</p>
                            <input type="date" name="ngaynhan" required>
                        </div>
                        <div class="form_input1">
                            <p>Ngày Trả Phòng</p>
                            <input type="date" name="ngaytra" required>
                        </div>
                        <!-- <div class="form_inputngay">
                            <input type="submit" value="Tìm Kiếm theo Ngày"  name="timkiemngay">
                        </div> -->
                    </div>
                </form>
                
            </div>
            <!-- <div class="container_banner_search">
               <form action="index.php?act=timkiem" method="post">
                    <div class="search_box3">
                        <div class="form_input1">
                            <p>Ngày Nhận Phòng</p>
                            <input type="date" name="ngaynhan" >
                        </div>
                        <div class="form_input1">
                            <p>Ngày Trả Phòng</p>
                            <input type="date" name="ngaytra" >
                        </div>
                        <div class="form_inputngay">
                            <input type="submit" value="Tìm Kiếm theo Ngày"  name="timkiemngay">
                        </div>
                    </div>
                </form> 
            </div> -->
            
        </div>
        <hr>

        <!-- ---------------------------------------------container_title----------------------------------------------------------- -->
        <div class="container_title">
            <!-- ---------------------------------------Khám Phá--------------------------------------------------------- -->
            <div class="container_title_box1">
                <div class="title_box1_text">
                    <h1>Hãy khám phá  Luxurious Hotel</h1>
                    <p>Luxurious Hotel đảm bảo các tiêu chí về chất lượng phòng, thiết bị nội thất và dịch vụ cơ bản, đáp ứng linh hoạt nhu cầu thuê phòng cùng mức giá hợp lý.</p>
                </div>
                <div class="title_box2_hotel">
                    <?php
                    foreach ($spnew as $sp){
                        extract($sp);
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
                                <h4>Giá: '.$price.'VND</h4>
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
            <!-- <div class="banner2">
                <img src="image/banner4.png" alt="">
            </div> -->

            <!-- ---------------------------------------Yêu Thích--------------------------------------------------------- -->
            <div class="container_title_box1">
                <div class="title_box1_text"><br>
                    <h1>Phòng được nhiều người yêu thích nhất</h1>
                </div>
                <div class="title_box2_hotel">
                    <?php
                        foreach ($top10 as $top10) {
                            # code...
                            extract($top10);
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
                                <h4>Giá: '.$price.'VND</h4>
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

            <hr>

            <!-- ---------------------------------------Khám Phá Thêm--------------------------------------------------------- -->
            <div class="container_title_box1">
                <div class="title_box1_text">
                    <h1>Khám Phá Thêm</h1>
                    <p>Poly's Hotel đảm bảo các tiêu chí về chất lượng phòng, thiết bị nội thất và dịch vụ cơ bản, đáp ứng linh hoạt nhu cầu thuê phòng cùng mức giá hợp lý.</p>
                </div>
                <div class="title_box2_hotel">
                <?php
                    shuffle($sphome);
                    $sp4 = 0;

                    foreach ($sphome as $sp) {
                        if ($sp4 >= 4) {
                            break;
                        }
                    
                        extract($sp);
                        $hinh = $img_path . $img;
                        echo '
                            <a href="index.php?act=sanphamct&idsp=' . $id . '">
                                <div class="hotel_sp">
                                    <div class="content_sp_img">
                                        <img src="' . $hinh . '" alt="">
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
                                            <h4>Giá: ' . $price . 'VND</h4>
                                        </div>
                                        <div class="hotel_sp_icon">
                                            <i class="fa-solid fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>';
                    
                        $sp4++; // Tăng biến đếm sau khi đã hiển thị một sản phẩm
                    }
                ?>
                </div>
            </div>

            <hr style="border: none;">

            <!-- ----------------------------------------------------------------container_footer------------------------------------------------------ -->
            
        </div>