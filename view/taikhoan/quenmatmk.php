<h1>Quên mật khẩu</h1>
                <div class="container_content_chitiet danhmuc_box">
                       <form action="index.php?act=quenmk" method="post">
                            <div class="row">
                                Email <br>
                                <input type="email" name="email" >
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