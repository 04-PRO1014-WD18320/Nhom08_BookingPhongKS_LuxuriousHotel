<div class="row">
      <div class="row_header">
        <p>Danh Sách Tài Khoản</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
          <table>
            <tr>
              <th></th>
              <th>ID</th>
              <th>Nội Dung </th>
              <th>ID User</th>
              <th>ID PRO</th>
              <th>NGÀY BÌNH LUẬN</th>
              <th></th>
            </tr>
            <?php
              foreach ($listbinhluan as $binhluan) {
                extract ($binhluan);
                $suabl = "index.php?act=suabl&id= ".$id;
                $xoabl = "index.php?act=xoabl&id= ".$id;
                # code...
                echo'

                <tr>
                  <td><input type="checkbox"></td>
                  <td>'.$id.'</td>
                  <td>'.$noidung.'</td>
                  <td>'.$iduser.'</td>
                  <td>'.$idpro.'</td>
                  <td>'.$ngaybinhluan.'</td>
                  <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a><a href="'.$xoabl.'"><input type="button" value="Xóa"></a> </td>
                </tr>
                ';
              };
            ?>
          </table>
        </div>
        <div class="row_mb21">
          <input type="button" value="Chọn tất cả">
          <input type="button" value="Bỏ chọn tất cả">
          <input type="button" name="" id="" value="xóa các mục đã chọn">
          <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
          
        </div>
      </div>
    </div>