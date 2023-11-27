<div class="row2">
    <div class="row2 font_title">
        <h1>THÔNG TIN KHÁCH HÀNG CẦN HỖ TRỢ</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>HỌ TÊN</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>NỘI DUNG</th>
                    </tr>
                    <?php
                    foreach ($listlienhe as $lienhe) {
                        extract($lienhe);
                        $xoalienhe="index.php?act=xoalienhe&id=".$id;
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$email.'</td>
                            <td>'.$noidung.'</td>
                            <td><a href="'. $xoalienhe .'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="XÓA MỤC ĐÃ CHỌN">
            </div>
        </form>
    </div>
</div>