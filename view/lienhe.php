
        <div class="container_footer_box1">
            <div class="footer_box1_text">
                <h1>Liên hệ nhanh</h1>
                <p>Luxurious Hotel cam kết nỗ lực hết mình nhằm cung cấp dịch vụ đúng với những giá trị mà khách hàng mong đợi.</p>
            </div>
            <div class="footer_box1_input">
                <form action="index.php?act=lienhe" method="post" onsubmit="return validateForm()">
                    <div class="box1_input_a">
                    <input type="text" name="name" placeholder="Điền tên của bạn" required id="name">
                    <input type="text" name="sdt" placeholder="Số điện thoại" required id="sdt">
                    <input type="email" name="email" placeholder="Email liên hệ" required id="email">
                    </div>
                    <div class="box1_input_b">
                        <input type="text" name="noidung" placeholder="Nội Dung" class="text" required>
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

<script>
    function validateForm() {
        let sdt = document.getElementById('sdt');
        let regexsdt = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        let checksdt = regexsdt.test(sdt.value);
        
        if (sdt.value === "" || sdt.value === null) {
            alert("Vui lòng nhập số điện thoại");
            return false; // Prevent form submission
        } else if (!checksdt) {
            alert("Số điện thoại không hợp lệ");
            return false; // Prevent form submission
        }
        
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
        let nameInput = document.getElementById('name');
        if (nameInput.value === "" || nameInput.value === null) {
            alert("Vui lòng nhập tên tài khoản");
            return false; // Prevent form submission
        } else if (nameInput.value.length < 6) {
            alert("Tên tài khoản phải có ít nhất 6 ký tự");
            return false; // Prevent form submission
        }
        
        return true; // Allow form submission
    }
</script>

