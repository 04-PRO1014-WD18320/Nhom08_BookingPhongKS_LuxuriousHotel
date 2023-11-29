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
        <h1>Thông Khách đặt hàng</h1>
        
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
<button id="thanh-toan-btn">Thanh toán</button>

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