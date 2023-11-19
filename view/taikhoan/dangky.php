<div class="container_titlect">
        <div class="background_image">
            <img src="image/banner2.png" alt="">
        </div>
        <div class="form"> 
            <form action="index.php?act=dangky" method="post"> 
                <h1>Đăng Ký Tài Khoản</h1>
                <p>Hãy đăng ký tài khoản để trải nghiệm những dịch vụ của chúng tôi!</p>
                <div class="from_input">
                    <input type="text" placeholder="Tên Tài Khoản" name="user">
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Mật Khẩu" name="pass">
                </div>
                <input type="submit" value="Đăng Ký" name="dangky">
                <h3 class="thongbao">
            <?php        
                if (isset($thongbao)&&($thongbao!="")) {
                # code...
                echo $thongbao;
                }                       
            ?>
        </h3> 
                <div class="form_text">
                    <p>Bạn đã có tài khoản ư? <a href="index.php?act=dangnhap">Đăng Nhập</a></p>
                </div>
            </form> 
        </div>  
</div>