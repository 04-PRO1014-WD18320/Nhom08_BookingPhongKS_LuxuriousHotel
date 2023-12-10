<div class="container_titlect">
        <div class="background_image">
            <img src="image/banner2.png" alt="">
        </div>
        <div class="form">
            <form action="index.php?act=dangnhap" method="post" onsubmit="return validateForm()">
                <h1>Đăng Nhập </h1>
                <p>Hãy đăng nhập tài khoản để trải nghiệm những dịch vụ của chúng tôi!</p>
                <div class="from_input">
                    <input type="text" placeholder="Tên Tài Khoản" name="user" required id="name">
                    <input type="password" placeholder="Mật Khẩu" name="pass" required id="pass">
                </div>
                <input type="submit" value="Đăng nhập" name="dangnhap">
                <div class="form_text">
                    <p>Bạn chưa có tài khoản ư? <a href="index.php?act=dangky">Đăng ký</a></p>
                </div>
                <h3 class="thongbao">
                <?php        
                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }                       
                ?>
            </h3> 
            </form> 
        </div>
        
    </div>
<script>
    function validateForm() {
        let nameInput = document.getElementById('name');
        if (nameInput.value === "" || nameInput.value === null) {
            alert("Vui lòng nhập tên tài khoản");
            return false; // Prevent form submission
        } else if (nameInput.value.length < 6) {
            alert("Tên tài khoản phải có nhiều hơn 6 ký tự");
            return false; // Prevent form submission
        } 
        let passInput = document.getElementById('pass');
        if (passInput.value === "" || passInput.value === null) {
            alert("Vui lòng nhập mật khẩu");
            return false; // Prevent form submission
        } else if (passInput.value.length < 6) {
            alert("Mật khẩu khoản phải có nhiều hơn 6 ký tự");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
</script>