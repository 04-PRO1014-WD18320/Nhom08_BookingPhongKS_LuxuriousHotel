<div class="row">
    <div class="row_header">
<<<<<<< HEAD
        <h1>THÔNG TIN KHÁCH HÀNG CẦN HỖ TRỢ</h1>
    </div>
    <div class="row">
        <form action="#" method="POST">
            <div class="row_nb10 fomdsloai">
=======
        <p>THÔNG TIN KHÁCH HÀNG CẦN HỖ TRỢ</p>
    </div>
    <div class="row ">
        <form action="#" method="POST">
            <div class="row_mb20">
>>>>>>> 8267adff89719c526182e316461c40f600d5a185
                <table>
                    <tr>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>HỌ TÊN</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>NỘI DUNG</th>
                        <th>THAO TÁC</th>
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
            <div class="row_mb21 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="XÓA MỤC ĐÃ CHỌN">
            </div>
        </form>
    </div>
</div>