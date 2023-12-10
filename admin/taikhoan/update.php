<?php
    if (is_array($taikhoan)) {
        # code...
        extract($taikhoan);
    }            
?>
<div class="row">
      <div class="row_header">
        <p>PHÂN QUYỀN</p>
      </div>
      <div class="row">
      <form action="index.php?act=updatetk" method="post">
          <div class="row_mb20">
           Vai trò (1 = admin / 0 = thành viên) <br>
            <input type="text" name="role" value="<?=$role?>">
          </div>
          
          <div class="row_mb21">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Đặt Quyền">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listtk"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>