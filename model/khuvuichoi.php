<?php
function loadall_khuvuichoi(){
    // $sql="select * from khuvuichoi order by id desc";
    $sql="select * from khuvuichoi join diadiem on khuvuichoi.id_diadiem = diadiem.id_diadiem order by khuvuichoi.id_khuvuichoi desc";
    $list_khuvuichoi=pdo_query($sql);
    return  $list_khuvuichoi;
}
function loadone_khuvuichoi($id_khuvuichoi){
    $sql = "select * from khuvuichoi join diadiem on khuvuichoi.id_diadiem = diadiem.id_diadiem where khuvuichoi.id_khuvuichoi = ".$id_khuvuichoi;
    $result = pdo_query_one($sql);
    return $result;
}
function loadall_khuvuichoi_theodiadiem($id_diadiem){
    $sql="select * from khuvuichoi join diadiem on khuvuichoi.id_diadiem = diadiem.id_diadiem where diadiem.id_diadiem = ".$id_diadiem;
    $list_khuvuichoi=pdo_query($sql);
    return  $list_khuvuichoi;
}
function insert_khuvuichoi($id_diadiem, $diachi, $tenkhuvuichoi){
    $sql = "INSERT INTO `khuvuichoi`(`id_diadiem`, `diachi`,`tenkhuvuichoi`) VALUES ('$id_diadiem', '$diachi', '$tenkhuvuichoi');";
    pdo_execute($sql);
}
function update_khuvuichoi($id_khuvuichoi, $id_diadiem, $diachi, $tenkhuvuichoi){
    $sql=  "UPDATE `khuvuichoi` SET `id_diadiem` = '{$id_diadiem}', `diachi` = '{$diachi}', `tenkhuvuichoi` = '{$tenkhuvuichoi}'  WHERE `khuvuichoi`.`id_khuvuichoi` = $id_khuvuichoi";
    pdo_execute($sql);
}
function delete_khuvuichoi($id_khuvuichoi){
    $sql = "DELETE FROM khuvuichoi WHERE id_khuvuichoi=" .$id_khuvuichoi;
    pdo_execute($sql);
}