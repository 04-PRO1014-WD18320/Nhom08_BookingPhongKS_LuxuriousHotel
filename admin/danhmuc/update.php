<?php
    if (is_array($dm)) {
        # code...
        extract($dm);

    }
?>

<div class="row">
      <div class="row_header">
        <p>Cập nhật loại hàng</p>
      </div>
      <div class="row">
        <form action="index.php?act=updatedm" method="post">
          <div class="row_mb20">
            Mã Loại <br>
            <input type="text" name="maloai">
          </div>
          <div class="row_mb20">
            Tên Loại <br>
            <input type="text" name="tenloai" value="<?php if (isset($name)&&($name!=""))echo $name ;?>">
          </div>
          <div class="row_mb21">
            <input type="hidden" name="id" value="<?php if (isset($id)&&($id>0))echo $id ;?>">
            <input type="submit" name="capnhat" value="Cập Nhật ">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>