
        <div class="container_footer_box1">
            <div class="footer_box1_text">
                <h1>Liên hệ nhanh</h1>
                <p>Luxurious Hotel cam kết nỗ lực hết mình nhằm cung cấp dịch vụ đúng với những giá trị mà khách hàng mong đợi.</p>
            </div>
            <div class="footer_box1_input">
                <form action="index.php?act=lienhe" method="post">
                    <div class="box1_input_a">
                    <input type="text" name="name" placeholder="Điền tên của bạn">
                    <input type="text" name="sdt" placeholder="Số điện thoại">
                    <input type="email" name="email" placeholder="Email liên hệ">
                    </div>
                    <div class="box1_input_b">
                        <input type="text" name="noidung" placeholder="Nội Dung" class="text">
                        <input type="submit" name="submit" value="Gửi">
                    </div>
                    <h2 class="thongbao">
                            <?php 
                            
                                if (isset($thongbao)&&($thongbao!="")) {
                                    # code...
                                    echo $thongbao;
                                }                       
                            ?>
                        </h2>
                </form>
                
            </div>
        </div>
        <br>
        <br>

