<style>
    .tongtien{
      padding: 20px;
      border: 1px solid gray;
      font-size: 25px;
      background-color: gray;
      color: white;
    }
</style>
<div class="row">
      <div class="row_header">
        <p>Thống Kê Sản Phẩm Theo Loại</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
          <form action="index.php?act=thong" method="post">
          <table>
            <tr>
              <th>NGÀY NHẬN</th>
              <th>NGÀY TRẢ</th>
              <th>TÊN PHÒNG</th>
              <th>TÊN KHÁCH HÀNG</th>
              <th>TIỀN PHÒNG</th>
              <th>TRẠNG THÁI</th>
              <th></th>
            </tr>
            <?php
            $tt = 0;
              foreach ($listthongke as $thongke) {
                extract($thongke);

                $tt += $tongTien;
                $tenPhong = getTenPhongByMaPhong($maPhong);
                $tenKhachHang = getTenKhachHangByMaKhachHang($maKhachHang);

                echo'<tr>
                <td>'.$ngayNhan.'</td>
                <td>'.$ngayTra.'</td>
                <td>'.$tenPhong.' </td>
                <td>'.$tenKhachHang.'</td>
                <td>'.$tongTien.'</td>
                <td>'.$trangthai.'</td>
                <td></td>
              </tr>';
              
              }
              echo'<div class="tongtien">Tổng tiền : '.$tt.'</div>';
            ?>
          </table>
          </form>
        </div>
        
        <div class="row_mb21">
          <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
          
        </div>
      </div>
    </div>