<button class="thanh_toan">
    Thanh toan
</button>

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
                
                    <div class="contain_logo_MBbank">
                          <div class="logo_MBbank">
                            <!-- <img width="120px" src="./image/qr.jpg" alt=""> -->
                          </div>
                          <div class="logo_MBbank">
                          <!-- <img width="120px"  src="./image/qr.jpg" alt=""> -->
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