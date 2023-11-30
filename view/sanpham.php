<div class="container_banner_search">
                <form action="index.php?act=sanpham" method="POST">
                    <div class="search_box1">
                        <input type="text" name="kyw"  class="input1" placeholder="Bạn muốn tìm gì nào......">
                        <input type="submit" value="Tìm Kiếm" class="input2" name="timkiem">
                    </div>
                    <div class="search_box2">
                        <select name="locgia" id="locgia">
                            <option value="0">Lọc Theo Giá</option>
                            <option value="1">Dưới 100</option>
                            <option value="2">100 - 300</option>
                            <option value="3">Trên 500</option>
                            <option value="4">Trên 1000</option>
                        </select>
                        <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($dsdm as $danhmuc) {
                                extract($danhmuc);
                                if ($iddm == $id) {
                                    $s = "selected";
                                } else {
                                    $s = "";
                                }
                                echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </form>
            </div>
<div class="container_title_box1">
    <h1>Kết quả tìm kiếm</h1>
                <div class="title_box2_hotel2">
                    <?php
                    foreach ($tensp as $sp){
                        extract($sp);
                        $hinh=$img_path.$img;
                        echo '
                        <a href="index.php?act=sanphamct&idsp='.$id.'">
                        <div class="hotel_sp">
                        <div class="content_sp_img">
                            <img src="'.$hinh.'" alt="" >
                        </div>
                        <div class="hotel_sp_price">
                            <div class="hotel_sp_text">
                                <h3><a href="index.php?act=sanphamct&idsp='.$id.'">'.$name.'</a></h3>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h4>Giá: '.$price.'$</h4>
                            </div>
                            <div class="hotel_sp_icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div> </a>' ;
                    }
                    ?>
                </div>
            </div>