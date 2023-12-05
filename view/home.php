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
                            <option value="1">Dưới 100</option>
                            <option value="2">100 - 300</option>
                            <option value="3">Trên 500</option>
                            <option value="4">Trên 1000</option>
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
                    <div class="search_box3">
                        <div class="form_input1">
                            <p>Ngày Nhận Phòng</p>
                            <input type="date" name="ngaynhan" >
                        </div>
                        <div class="form_input1">
                            <p>Ngày Trả Phòng</p>
                            <input type="date" name="ngaytra" >
                        </div>
                    </div>
                    <hr>
                    
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
            <div class="banner2">
                <img src="image/banner4.png" alt="">
            </div>

            <!-- ---------------------------------------Yêu Thích--------------------------------------------------------- -->
            <div class="container_title_box1">
                <div class="title_box1_text">
                    <h1>Phòng được nhiều người yêu thích nhất</h1>
                    <p>Luxurious Hotel đảm bảo các tiêu chí về chất lượng phòng, thiết bị nội thất và dịch vụ cơ bản, đáp ứng linh hoạt nhu cầu thuê phòng cùng mức giá hợp lý.</p>
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

            <hr>

            <!-- ---------------------------------------Khám Phá Thêm--------------------------------------------------------- -->
            <div class="container_title_box1">
                <div class="title_box1_text">
                    <h1>Khám Phá Thêm</h1>
                    <p>Poly's Hotel đảm bảo các tiêu chí về chất lượng phòng, thiết bị nội thất và dịch vụ cơ bản, đáp ứng linh hoạt nhu cầu thuê phòng cùng mức giá hợp lý.</p>
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

            <hr>

            <!-- ----------------------------------------------------------container_title_tienich---------------------------------------------- -->

            <div class="container_title_tienich">
                <div class="title_box1_text">
                    <h1>Dịch vụ tiện ích</h1>
                    <p>Poly's Hotel còn có các dịch vụ tiện ích khác với mong muốn làm hài lòng du khách</p>
                </div>
                <div class="title_tienich_box">
                    <div class="box">
                        <img src="image/hamburger.webp" alt="">
                        <a href="">Ăn Uống</a>
                    </div>
                    <div class="box">
                        <img src="image/bar.png" alt="">
                        <a href="">Bar</a>
                    </div>
                    <div class="box">
                        <img src="image/gym.png" alt="">
                        <a href="">Gym</a>
                    </div>
                    <div class="box">
                        <img src="image/giat.png" alt="">
                        <a href="">Giặt Ủi</a>
                    </div>
                    <div class="box">
                        <img src="image/massage.png" alt="">
                        <a href="">Masage</a>
                    </div>
                    <div class="box">
                        <img src="image/clean.png" alt="">
                        <a href="">Quét Dọn</a>
                    </div>
                </div>
            </div>

            <hr>
            <!-- ------------------------------------------------------------container_title_baiviet-------------------------------------------------------- -->
            <div class="container_title_baiviet">
                <h1>Bài viết nổi bật</h1>
                <div class="title_baiviet">
                   <div class="title_baiviet_box">
                        <img src="image/sp1.jpg" alt="">
                        <h3>Để Tôi Chỉ Bạn Cách Làm Giàu</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi, laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                        <a href="">Xem Thêm</a>
                    </div> 
                    <div class="title_baiviet_box">
                        <img src="image/sp1.jpg" alt="">
                        <h3>Để Tôi Chỉ Bạn Cách Làm Giàu</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi, laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                        <a href="">Xem Thêm</a>
                    </div>
                    <div class="title_baiviet_box">
                        <img src="image/sp1.jpg" alt="">
                        <h3>Để Tôi Chỉ Bạn Cách Làm Giàu</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem nihil fugit, omnis animi eius voluptatibus sed dolores? Debitis, sequi, laboriosam dolor tempore omnis suscipit qui nihil doloribus voluptas amet quam!</p>
                        <a href="">Xem Thêm</a>
                    </div>
                </div>
                
            </div>

            <hr>
            <!-- ----------------------------------------------------------------container_footer------------------------------------------------------ -->
            
        </div>

        <!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault(); // Ngăn chặn form submit mặc định

            // Kiểm tra điều kiện tìm kiếm
            var check_in_date = document.querySelector("input[name='ngaynhan']").value;
            var check_out_date = document.querySelector("input[name='ngaytra']").value;

            var today = new Date();
            today.setHours(0, 0, 0, 0); // Đặt giờ, phút, giây thành 0 để so sánh ngày

            var condition = true;
            var errorMessage = "";

            if (new Date(check_in_date) < today) {
                condition = false;
                errorMessage = "Ngày đặt phải lớn hơn hoặc bằng ngày hôm nay!";
            } else if (new Date(check_in_date) >= new Date(check_out_date)) {
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