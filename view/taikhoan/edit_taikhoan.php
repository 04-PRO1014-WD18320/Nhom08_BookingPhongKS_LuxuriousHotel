<h1>Cập nhật tài khoản</h1>
                <div class="container_content_chitiet danhmuc_box">
                    <?php
                        if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                            extract($_SESSION['user']);
                        }
                    ?>
                       <form action="index.php?act=edit_taikhoan" method="post" onsubmit="return validateForm()">
                            <div class="row">
                                Email <br>
                                <input type="email" name="email" value="<?=$email?>" id="email">
                            </div>
                            <div class="row">
                                Tên Đăng Nhập <br>
                                <input type="text" name="user" value="<?=$user?>" id="name">
                            </div>  
                            <div class="row">
                                Mật Khẩu <br>
                                <input type="password" name="pass" value="<?=$pass?>" id="pass">
                            </div>
                            <div class="row">
                                Địa chỉ<br>
                                <input type="text" name="address" value="<?=$address?>">
                            </div>
                            <div class="row">
                                Điện Thoại <br>
                                <input type="text" name="tel" value="<?=$tel?>" id="sdt">
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

                <script>
    function validateForm() {
        let emailInput = document.getElementById('email');
        let regexEmail = /^\b[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b$/;
        let isValidEmail = regexEmail.test(emailInput.value);
        
        if (emailInput.value === "" || emailInput.value === null) {
            alert("Vui lòng nhập Email");
            return false; // Prevent form submission
        } else if (!isValidEmail) {
            alert('Email không hợp lệ');
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
        let nameInput = document.getElementById('name');
        if (nameInput.value === "" || nameInput.value === null) {
            alert("Vui lòng nhập tên tài khoản");
            return false; // Prevent form submission
        } else if (nameInput.value.length < 6) {
            alert("Tên tài khoản phải có nhiều hơn 6 ký tự");
            return false; // Prevent form submission
        } 
        return true; // Allow form submission
    }
</script>