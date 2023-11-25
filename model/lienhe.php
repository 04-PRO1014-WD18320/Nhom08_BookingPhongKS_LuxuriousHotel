<?php

function insert_lienhe($name,$sdt,$email,$noidung){
    $sql= "insert into lienhe(name,sdt,email,noidung) values ('$name','$sdt','$email','$noidung')";
    pdo_execute($sql);
}
function loadall_lienhe(){
    $sql = "select * from lienhe order by id desc";
    $listlienhe = pdo_query($sql);
    return $listlienhe;
}
function delete_lienhe($id){
    $sql = "delete from lienhe where id=". $id;
    pdo_query($sql);
}
?>