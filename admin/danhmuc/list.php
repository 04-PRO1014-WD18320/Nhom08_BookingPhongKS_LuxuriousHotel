<div class="row">
      <div class="row_header">
        <p>Danh Sách loại hàng</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
          <table>
            <tr>
              <th></th>
              <th>Mã Loại</th>
              <th>Tên Loại</th>
              <th></th>
            </tr>
            <?php
              foreach ($listdanhmuc as $danhmuc) {
                extract ($danhmuc);
                $suadm = "index.php?act=suadm&id= ".$id;
                $xoadm = "index.php?act=xoadm&id= ".$id;
                # code...
                echo'

                <tr>
                  <td><input type="checkbox"></td>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a><a href="'.$xoadm.'"><input type="button" value="Xóa"></a> </td>
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