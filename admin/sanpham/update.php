<?php
    if (is_array($sanpham)) {
        # code...
        extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
      if (is_file($hinhpath)) {
        # code...
        $hinh = "<img src='".$hinhpath."' height='80px' >  ";
      }else{
        $hinh="no photo";
      }            
?>

<div class="row">
      <div class="row_header">
        <p>Cập nhật loại hàng</p>
      </div>
      <div class="row">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
          <div class="row_mb20">
            <select name="iddm" id="">
                <option value="0">Tất cả</option>
                <?php
                  foreach ($listdanhmuc as $danhmuc) {
                    # code...
                    // extract($danhmuc);
                    if ($iddm==$danhmuc['id']) $s="selected"; else $s="";
                    echo'<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                  }
                ?>
              </select>
          </div>
          
          <div class="row_mb20">
            Tên Sản phẩm <br>
            <input type="text" name="tensp" value="<?=$name?>">
          </div>
          
          <div class="row_mb20">
            Giá <br>
            <input type="text" name="giasp" value="<?=$price?>">
          </div>
          <div class="row_mb20">
            Hình ảnh <br>
            <input type="file" name="hinh">
            <?=$hinh?>
          </div>
          <div class="row_mb20">
            diện tích <br>
            <input type="text" name="dientich" value="<?=$dientich?>">
          </div>
          <div class="row_mb20">
            Mô tả <br>
            <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
          </div>
          
          <div class="row_mb21">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Cập Nhật ">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            <?php
                if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>