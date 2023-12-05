<div class="container_title_baiviet">
    <h1>Thanh Toán</h1>
         <?php

            if (isset($_SESSION['user'])) {
               
               extract($_SESSION['user']);
               
               $name_user = $_SESSION['user']['user'];
               $email_user = $_SESSION['user']['email'];
               $address_user = $_SESSION['user']['address'];
               $tel_user = $_SESSION['user']['tel'];

            }else{

               $name_user = 'Không có';
               $email_user = 'Không có';
               $address_user = 'Không có';
               $tel_user = 'Không có';
               
            }
         ?>

<div class="thongtin">
        <h2>Thông Khách đặt hàng</h2>
        
            <div class="ox1">
                <p>Tên: <?= $name_user ?></p>
                

                
            
            
                <p>Email: <?= $email_user ?></p>
                

            </div> 

    <div class="table-container">
        <div class="column-names">
            <span>ID Bill</span>
            <span>Ngày Nhận</span>
            <span>Ngày Trả</span>
            <span>Mã Phòng</span>
            <span>Mã Khách Hàng</span>
            <span>Tổng Tiền</span>
        </div>
        <div class="data">
            <span><?=$one_bill['id']?></span>
            <span><?=$one_bill['ngayNhan']?></span>
            <span><?=$one_bill['ngayTra']?></span>
            <span><?=$one_bill['maPhong']?></span>
            <span><?=$one_bill['maKhachHang']?></span>
            <span><?=$one_bill['tongTien']?></span>
        </div>
    </div>
    <!-- Add an ID to the button for easier selection -->

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <style>
        .qr-code {
            display: none;
        }
    </style>
</head>
<body>

<div class="thanh-toan-options">
    <label>
        <input type="radio" name="payment_option" value="tai_khoan" checked>
        Thanh toán bằng tài khoản
    </label>
    <label>
        <input type="radio" name="payment_option" value="tien_mat">
        Thanh toán bằng tiền mặt
    </label>
    <button id="thanh-toan-btn">Thanh toán</button>
</div>

<div id="qr-code" class="qr-code">
    <!-- Đây là nơi hiển thị mã QR -->
    <img src="image/qr.jng" alt="QR Code">
    <p>Thanh toán thành công!</p>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var thanhToanBtn = document.getElementById('thanh-toan-btn');
        var qrCodeContainer = document.getElementById('qr-code');

        thanhToanBtn.addEventListener('click', function () {
            var selectedOption = document.querySelector('input[name="payment_option"]:checked').value;

            if (selectedOption === 'tai_khoan') {
                // Xử lý thanh toán bằng tài khoản
                alert('Thanh toán bằng tài khoản thành công!');
            } else if (selectedOption === 'tien_mat') {
                // Xử lý thanh toán bằng tiền mặt
                // Hiển thị mã QR sau 10 giây
                setTimeout(function () {
                    qrCodeContainer.style.display = 'block';
                }, 10000);
            }
        });
    });
</script>

</body>
</html>

<style>
    .thanh-toan-options {
    font-family: Arial, sans-serif;
    margin: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="radio"] {
    margin-right: 5px;
}

#thanh-toan-btn {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#thanh-toan-btn:hover {
    background-color: #45a049;
}

</style>

<script>
    // Add an event listener to the button
    document.getElementById('thanh-toan-btn').addEventListener('click', function() {
        // Perform payment confirmation here
        // You can use AJAX to send a request to the server for processing the payment

        // Assuming a successful payment, display a confirmation message
        alert('Thanh toán thành công!');
    });
</script>

</div>