<div class="container_titlect">
    <div class="background_image">
        <img src="image/banner2.png" alt="">
    </div>
    <div class="form"> 
        <form action="index.php?act=dangky" method="post" onsubmit="return validateForm()"> 
            <h1>Đăng Ký Tài Khoản</h1>
            <p>Hãy đăng ký tài khoản để trải nghiệm những dịch vụ của chúng tôi!</p>
            <div class="from_input">
                <input type="text" id="name" placeholder="Tên Tài Khoản" name="user" >
                <input type="text" id="email" placeholder="Email" name="email" >
                <input type="password" id="pass" placeholder="Mật Khẩu" name="pass" >
            </div>
            <input type="submit" value="Đăng Ký" name="dangky">
            <h3 class="thongbao">
                <?php        
                if (isset($thongbao) && $thongbao != "") {
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