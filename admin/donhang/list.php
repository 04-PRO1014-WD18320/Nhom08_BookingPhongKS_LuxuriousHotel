<div class="row">
      <div class="row_header">
        <p>Danh Sách Đơn Hàng</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
          <table>
            <tr>
              <th></th>
              <th>ID</th>
              <th>Ngày Nhận</th>
              <th>Ngày Trả</th>
              <th>Mã Phòng</th>
              <th>Mã Khách Hàng</th>
              <th>Tổng Tiền</th>
              <th>Trạng Thái</th>
              <th></th>
            </tr>
            <?php
              foreach ($listdonhang as $donhang) {
                extract ($donhang);
                // $suadm = "index.php?act=suadm&id= ".$id;
                $xoadh = "index.php?act=xoadh&id= ".$id;
                # code...
                echo'

                <tr>
                  <td><input type="checkbox"></td>
                  <td>'.$id.'</td>
                  <td>'.$ngayNhan.'</td>
                    <td>'.$ngayTra.'</td>
                    <td>'.$maPhong.'</td>
                    <td>'.$maKhachHang.'</td>
                    <td>'.$tongTien.'</td>
                    <td>'.$trangthai.'</td>
                  <td><a href="'.$xoadh.'"><input type="button" value="Xóa"></a> </td>
                </tr>
                ';
              };
            ?>
          </table>
        </div>
      </div>
    </div>