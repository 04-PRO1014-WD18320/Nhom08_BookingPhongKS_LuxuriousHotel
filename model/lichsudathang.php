<?php
        function select_bill_idUser($maKhachHang){
            $sql="SELECT * FROM donhang WHERE maKhachHang = $maKhachHang order by id desc";
            $listBill=pdo_query($sql);
            return  $listBill;
        }
        function select_bill_idUser_done($maKhachHang){
            $sql="SELECT * FROM donhang WHERE maKhachHang = $maKhachHang  order by id desc";// giảm dần
            $listBill=pdo_query($sql);
            return  $listBill;
        }

                   
        
        
                // function getTenPhongByMaPhong($maPhong) {
                //     $sql = "SELECT name FROM sanpham WHERE id = $maPhong ";
                // var_dump ($sql);
                //     $tenPhong = pdo_query($sql);
                //     return $tenPhong;
                // }
                

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
                        $tenKhachHang = "Không tìm thấy ten khach hang";
                    }
                    
                    return $tenKhachHang;
                }

                function getAnhPhongByAnhPhong($idSanPham) {
                    $anhPhong;
                    $sql = "SELECT img FROM sanpham WHERE id = ?";
                    // var_dump ($sql);
                    $result = pdo_query($sql, $idSanPham);
                    // var_dump (  $result);
                    if (!empty($result)) {
                        $anhPhong = $result[0]['img'];
                    } else {
                        $anhPhong = "Không tìm thấy ảnh phòng";
                    }

                    return $anhPhong;
                }
                


?>
?>
