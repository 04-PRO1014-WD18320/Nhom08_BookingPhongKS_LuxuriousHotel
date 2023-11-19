<div class="row">
      <div class="row_header">
        <p>Thêm Mới Phòng</p>
      </div>
      <div class="row">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="row_mb20">

          <div class="row_mb20">
            <label>Tên Phòng</label><br>
            <input type="text" name="tensp" placeholder="nhập vào phòng">
          </div><br>
          <!-- hiển thị các loại phòng -->
          <div class="row_mb20">
            <label>Các loại phòng</label>
            <select name="iddm">
              <?php
                foreach ($listdanhmuc as $danhmuc) {
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
              ?>
            </select>
          </div><br>
          <!-- mô tả phòng -->
          <div class="row_mb21">
              <label>Mô tả phòng</label> <br>
              <textarea name="mota" cols="30" rows="10"></textarea>
          </div><br>
          <!-- giá sản phẩm -->
          <div class="row_mb21">
              <label>Giá Phòng :</label>
              <input type="text" name="giasp" placeholder="nhập vào giá">
          </div><br>
          <!-- Trạng Thái -->
          <div class="row_mb21">
              <label>Trạng Thái :</label>
              <select name="trangthai" id="trangthai">
                <option value="1">Trống</option>
                <option value="2">Đã đặt</option>
              </select>
          </div><br>
          <!-- tải ảnh -->
          <div class="row_mb21">
              <label>Ảnh Chính: </label> <br>
              <input type="file" name="hinh">
          </div><br>
          <!-- diện tích -->
          <div class="row_mb21">
              <label>Diện tích </label> <br>
              <input type="text" name="dientich">
          </div><br>
          <!-- tải ảnh chi tiết -->
          <!-- <div class="row_mb21">
              <label>Ảnh Phụ(có thể tải nhiều ảnh):  </label> <br>
              <input type="file" name="hinh[]" multiple>
          </div><br> -->
          <!--  -->
          
          <div class="row_mb21">
            <input type="submit" name="themmoi" value="Thêm mới ">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                
            ?>
          </div>
        </form>
      </div>
  </div>