<?php

function getOneBill($id_bill){
    $sql = "select * from donhang where id='".$id_bill."' ";
    $sp=pdo_query_one($sql);
    return $sp;
}


?>