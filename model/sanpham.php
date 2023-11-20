<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $dientich, $iddm){
    $sql = "insert into sanpham(name, price, img, mota, dientich, iddm) values('$tensp', '$giasp', '$hinh', '$mota', '$dientich', '$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=". $id;
    pdo_query($sql);
}

function loadall_sanpham($kyw, $iddm=0){
    $sql="select * from sanpham where 1";
    if ($kyw !="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm = '".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;    
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id =". $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadone_sanpham_cungloai($id){
    $sql = "select * from sanpham where id <>". $id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,4";
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

function loadone_ten_dm($iddm){
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