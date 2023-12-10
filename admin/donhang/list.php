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
              <th>Tên Phòng</th>
              <th>Tên Khách Hàng</th>
              <th>Tổng Tiền</th>
              <th>Trạng Thái</th>
              <th>Ngày Check In</th>
              <th>Ngày Check Out</th>
              <th>Thao Tác</th>
              <button></button>
            </tr>
            <?php
              foreach ($listdonhang as $donhang) {
                extract ($donhang);

                $tenPhong = getTenPhongByMaPhong($maPhong);
                $tenKhachHang = getTenKhachHangByMaKhachHang($maKhachHang);
                // $suadm = "index.php?act=suadm&id= ".$id;
                $xoadh = "index.php?act=xoadh&id= ".$id;
                $checkin = "index.php?act=checkin&id= ".$id;
                $checkout = "index.php?act=checkout&id= ".$id;
                # code...
                echo'

                <tr>
                  <td><input type="checkbox"></td>
                  <td>'.$id.'</td>
                  <td>'.$ngayNhan.'</td>
                    <td>'.$ngayTra.'</td>
                    <td>'.$tenPhong.'</td>
                    <td>'.$tenKhachHang.'</td>
                    <td>'.$tongTien.'</td>
                    <td>'.$trangthai.'</td>
                    <td>'.$ngayCheckIn.'</td>
                    <td>'.$ngayCheckOut.'</td>
                  <td><a href="'.$xoadh.'"><button><i class="fa-solid fa-trash"></i></button></a> <a href="'.$checkin.'"><input type="button" value="Check In"></a> <a href="'.$checkout.'"><input type="button" value="Check Out"></a></td>
                </tr>
                ';
              };
            ?>
          </table>
        </div>
      </div>
    </div>