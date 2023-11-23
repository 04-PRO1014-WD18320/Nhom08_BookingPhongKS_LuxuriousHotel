<?php

function insert_lienhe($name,$sdt,$email,$noidung){
    $sql= "insert into lienhe(name,sdt,email,noidung) values ('$name','$sdt','$email','$noidung')";
    pdo_execute($sql);
}
function loadall_lienhe(){
    $sql = "select * from lienhe order by id desc";
    $listlienhe=pdo_query($sql);
    return $listlienhe;
}
?>