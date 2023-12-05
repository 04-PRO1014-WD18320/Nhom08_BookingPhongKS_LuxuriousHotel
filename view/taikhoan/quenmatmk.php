<h1>Quên mật khẩu</h1>
                <div class="container_content_chitiet danhmuc_box">
                       <form action="index.php?act=quenmk" method="post">
                            <div class="row">
                                Email <br>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="row">
                                <input type="submit" value="Gửi" name="guiemail">
                                <input type="reset" value="Nhập lại">
                            </div>                            
                        </form> <br>
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
        return true; // Allow form submission
    }
</script>