<?php
    function loadall_thongke(){
        $sql = "SELECT * from donhang order by id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

    function getTenPhongByMaPhong($maPhong) {
        $sql = "SELECT name FROM sanpham WHERE id = ?";
        // var_dump ($sql);
        $result = pdo_query($sql, $maPhong);
        
        if (!empty($result)) {
            $tenPhong = $result[0]['name'];
        } else {
            $tenPhong = "Không tìm thấy phòng";
        }
        
        return $tenPhong;
    }
    
    function getTenKhachHangByMaKhachHang($maKhachHang) {
        $sql = "SELECT user FROM taikhoan WHERE id = ?";
        // var_dump ($sql);
        $result = pdo_query($sql, $maKhachHang);
        
        if (!empty($result)) {
            $tenKhachHang = $result[0]['user'];
        } else {
            $tenKhachHang = "Không tìm thấy tên khách hàng";
        }
        
        return $tenKhachHang;
    }
?>