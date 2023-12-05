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
    
?>