<div class="row">
      <div class="row_header">
        <p>Danh Sách Phòng</p>
      </div>
      <div class="row">
        <div class="row_nb10 fomdsloai">
            <form action="index.php?act=listsp" method="post">
          <table>
            <tr>
              <th></th>
              <th>Mã </th>
              <th>Tên</th>
              <th>Giá</th>
              <th>Ảnh</th>
              <th>Mô Tả</th>
              <th>Diện tích</th>
              <th></th>
            </tr>
            <?php
              foreach ($listsanpham as $sanpham) {
                extract ($sanpham);
                $suasp = "index.php?act=suasp&id= ".$id;
                $xoasp = "index.php?act=xoasp&id= ".$id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
                } else {
                    $hinh = "Không có hình upload";
                }
                
                echo'

                <tr>
                  <td><input type="checkbox"></td>
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>'.$price.'</td>
                  <td>'.$hinh.'</td>
                  <td>'.$mota.'</td>
                  <td>'.$dien_tich.'</td>
                  <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a><a href="'.$xoasp.'"><input type="button" value="Xóa"></a> </td>
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
          <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
          
        </div>
      </div>
      </form>
    </div>