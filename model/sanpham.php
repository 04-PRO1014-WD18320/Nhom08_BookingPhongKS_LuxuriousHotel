<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $dientich, $iddm){
    $sql = "insert into sanpham(name, price, img, mota, dientich, iddm) values('$tensp', '$giasp', '$hinh', '$mota', '$dientich', '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}
function loadall_sanpham($kyw, $iddm = 0, $locgia = "", $check_in_date = "", $check_out_date = "")
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    
    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%'";
    }
    
    if ($iddm > 0) {
        $sql .= " AND iddm = '" . $iddm . "'";
    }
    
    if ($locgia != "") {
        if ($locgia == '1') {
            $sql .= " AND price < 100000"; // Dưới 100
        } elseif ($locgia == '2') {
            $sql .= " AND price BETWEEN 100000 AND 300000"; // Từ 100 đến 300
        } elseif ($locgia == '3') {
            $sql .= " AND price > 500000"; // Trên 500
        } elseif ($locgia == '4') {
            $sql .= " AND price > 1000000"; // Trên 1000
        }
    }
    
    if ($check_in_date != "" && $check_out_date != "") {
        $sql .= " AND id NOT IN (
                    SELECT maPhong FROM donhang 
                    WHERE ('$check_in_date' BETWEEN ngayNhan AND ngayTra) 
                    OR ('$check_out_date' BETWEEN ngayNhan AND ngayTra)
                )";
    }
    
    $sql .= " ORDER BY id DESC";
    
    $listsanpham = pdo_query($sql);
    
    return $listsanpham;
}

// function loadall_sanpham($kyw, $iddm=0, $locgia=""){
//     $sql = "select * from sanpham where 1";
//     if ($kyw != "") {
//         $sql .= " and name like '%" . $kyw . "%'";
//     }
//     if ($iddm > 0) {
//         $sql .= " and iddm = '" . $iddm . "'";
//     }
//     if ($locgia != "") {
//         if ($locgia == '1') {
//             $sql .= " AND price < 100"; // Dưới 100
//         } elseif ($locgia == '2') {
//             $sql .= " AND price BETWEEN 100 AND 300"; // Từ 100 đến 300
//         }elseif ($locgia == '3') {
//             $sql .= " AND price > 500"; // Trên 500
//         } elseif ($locgia == '4') {
//             $sql .= " AND price > 1000"; // Trên 1000
//         }
//     }
//     $sql .= " order by id desc";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
// function getAvailableRooms($check_in_date, $check_out_date)
// {
//     $sql = "SELECT * FROM sanpham WHERE id NOT IN (
//                 SELECT maPhong FROM donhang 
//                 WHERE ('$check_in_date' BETWEEN ngayNhan AND ngayTra) 
//                 OR ('$check_out_date' BETWEEN ngayNhan AND ngayTra)
//             )";

//     $availableRooms = pdo_query($sql);
//     return $availableRooms;
// }

function loadone_sanpham($id){
    $sql = "select * from sanpham where id =". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_cungloai($id,$iddm){
    $sql = "select * from sanpham where iddm=".$iddm." and id <>". $id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,8";  
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
function update_sanpham($id,$iddm,$tensp,$giasp,$dientich,$mota,$hinh){
        if ($hinh!="")
            # code...
            $sql= "update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."', img='".$hinh."', dientich='".$dientich."', mota='".$mota."'  where id=".$id;
        else 
            $sql= "update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."', dientich='".$dientich."', mota='".$mota."'  where id=".$id;                
        pdo_execute($sql);
    } 

function load_ten_dm($iddm){
        if ($iddm>0) {
            # code...
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;            
        }else {
            return "";
        }

    }
    function loadall_sanpham_top10(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,4";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }



?>