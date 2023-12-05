<div class="row">
    <div class="row_header">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row">
        <form action="index.php?act=listtk" method="POST">
            <div class="row_nb10 fomdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td><a href="'. $suatk .'"><input type="button" value="Phân Quyền"></a><a href="'. $xoatk .'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row_mb21">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="XÓA MỤC ĐÃ CHỌN">
            </div>
        </form>
    </div>
</div>