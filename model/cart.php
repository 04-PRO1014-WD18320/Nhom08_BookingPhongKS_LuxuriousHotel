<?php
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS countsp, MIN(sanpham.price) AS minprice, MAX(sanpham.price) AS maxprice, AVG(sanpham.price) AS avgprice ";
        $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm ";
        $sql .= "GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>