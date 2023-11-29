<?php

function addOrder($id_user, $hoten, $sdt, $email, $diachi, $tongtien, $pttt){
    $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, diachi, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', '$diachi', $tongtien, $pttt);";
    $id=pdo_executeid($sql);
    return $id;
}

// function addOrderDetail($id_order, $id_pro, $giamua, $soluong, $thanhtien){
//     $sql="INSERT INTO datve (id_order, id_pro, giamua, soluong, thanhtien) VALUES ($id_order, $id_pro, $giamua, $soluong, $thanhtien );";
//     pdo_execute($sql);
// }
?>