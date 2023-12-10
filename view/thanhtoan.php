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
      <button id="thanh-toan-btn" class="thanh_toan">Thanh toán</button>
  </div>
  
  

<!-- ----------------------------------------------------------------- -->


<div class="contain-overlay-product-detail">
            <div class="contain-product-detail">

            <!-- ------------------------------ -->
                  <div class="sideBar_pay">
                    <div class="timePay blockPayment" >
                      <span>Đơn hàng hết hạn sau</span>
                      <span class="timeRestPay">10:00</span>
                    </div>
                    <div class="timePay blockPayment">
                      <span><i class="fa-solid fa-shop"></i> Nhà cung cấp</span>
                      <span>Shop</span>
                    </div>
                    <div class="timePay blockPayment">
                      <span><i class="fa-solid fa-money-bill"></i> Số tiền</span>
                      <span>100 đ</span>
                    </div>
                    <div class="timePay blockPayment">
                      <span><i class="fa-solid fa-circle-info"></i> Thông tin</span>
                      <span>Thanh toán bằng MBbank</span>
                      <span>STK : 123456789</span>
                    </div>
                    <div class="timePay blockPayment">
                      <span><i class="fa-solid fa-id-card-clip"></i> Mã đơn hàng</span>
                      <span > <?= $id ?></span>
                    </div>
                    <div class="timePay blockPayment">
                      <button class="button-back-pay">
                      <i class="fa-solid fa-arrow-left"></i> Quay lại
                      </button>
                    </div>
                  </div>
            <!-- ------------------------------ -->
                  <div class="contain_QR_code">
                    <div class="w-100 d-f jf-e">
                        <div class="close_show">
                          <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                
        
                    <div class="line_pay"></div>
                    <div class="qr_code w-100 d-f al-c f-d">
                      <h4 class="m-t-b10">Quét mã để thanh toán</h4>
                      <div class="img_QR_code">
                        <img src="./image/qr.jpg" width="230px" alt="">
                      </div>
                      <p>
                         Sử dụng app MBBank để quét mã
                      </p>
                      <div>
                        <span class="loading-pay "><i class="fa-solid fa-spinner loading-pay-icon loading-pay-icon-ani"></i></span>
                        <span class="processing-pay">
                        Đang chờ quét mã
                        </span>
                      </div>
                    </div>
                    <div class="notePay">
                      * Sau khi chuyển khoản hãy chờ để ngân hàng xác nhận
                    </div>

                  </div>
              </div>
            </div>

            <script type="module" src="./js/thanhtoan.js"></script>
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




</div>