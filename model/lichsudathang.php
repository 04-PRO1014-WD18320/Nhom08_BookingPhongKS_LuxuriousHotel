<?php
        function select_bill_idUser($maKhachHang){
            $sql="SELECT * FROM donhang WHERE maKhachHang = $maKhachHang order by id desc";
            $listBill=pdo_query($sql);
            return  $listBill;
        }
    
        function select_bill_idUser_done($maKhachHang){
            $sql="SELECT * FROM donhang WHERE maKhachHang = $maKhachHang  order by id desc";
            $listBill=pdo_query($sql);
            return  $listBill;
        }
        
?>
