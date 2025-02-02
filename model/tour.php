<?php
// function loadall_tour_home(){
//     $sql="select * from tour where 1 order by id_tour desc limit 0,9";
//     $listtour=pdo_query($sql);
//     return  $listtour;
// }
// function loadall_tour_top10(){
//     $sql="select * from tour where 1 order by luotxem desc limit 0,10";
//     $listtour=pdo_query($sql);
//     return $listtour;
// }
function loadone_tourCart($idList)
{
    $sql = "SELECT * FROM tour 
            JOIN khuvuichoi ON tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi
            WHERE id_tour IN ( " . $idList . ")";
    $tour = pdo_query($sql);
    return $tour;
}
function loadall_tour()
{
    $sql = "SELECT * from tour 
            join diadiem on tour.id_diadiem = diadiem.id_diadiem 
            join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi";
    // where 1 tức là nó đúng
    // if($keyw!=""){
    //     $sql.=" and name like '%".$keyw."%'";
    // }
    // if($id_tourdm>0){
    //     $sql.=" and id_tourdm ='".$id_tourdm."'";
    // }
    $sql .= " order by id_tour desc";
    $list_tour = pdo_query($sql);
    return $list_tour;
}
function loadone_tour($id_tour)
{
    $sql = "SELECT * from tour 
            join diadiem on tour.id_diadiem = diadiem.id_diadiem 
            join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi 
            where id_tour = " . $id_tour;
    $tour = pdo_query_one($sql);
    return $tour;
}
function loadall_tour_theodiadiem($id_diadiem, $product)
{
    $sql = "SELECT * from tour 
            join diadiem on tour.id_diadiem = diadiem.id_diadiem 
            join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi 
            where tour.id_diadiem = " . $id_diadiem;
    $sql .= " order by $product";
    $list_tour = pdo_query($sql);
    return $list_tour;
}

function update_tour($id_tour, $gia, $soluong, $mota, $thongtinchitiet, $id_khuvuichoi, $trangthai, $id_diadiem)
{
    // if ($hinh != "") {
    //     $sql = "UPDATE `tour` SET `gia` = '{$gia}',`soluong` = '{$soluong}', `mota` = '{$mota}', `thongtinchitiet` = '{$thongtinchitiet}', `img` = '{$hinh}', `id_khuvuichoi` = '{$id_khuvuichoi}', `trangthai` = '{$trangthai}', `id_diadiem` = '{$id_diadiem}', `img` = '{$hinh}' WHERE `tour`.`id_tour` = $id_tour";
    // } else { }
    $sql = "UPDATE tour SET `gia` = '{$gia}',`soluong` = '{$soluong}', `mota` = '{$mota}', `thongtinchitiet` = '{$thongtinchitiet}', `id_khuvuichoi` = '{$id_khuvuichoi}', `trangthai` = '{$trangthai}', `id_diadiem` = '{$id_diadiem}' WHERE `tour`.`id_tour` = $id_tour";

    pdo_execute($sql);
}
function insert_tour($gia, $soluong, $mota, $thongtinchitiet, $hinh, $id_khuvuichoi, $trangthai, $id_diadiem)
{
    $sql = "INSERT INTO `tour`(`gia`, `soluong`, `mota`, `thongtinchitiet`, `img`, `id_khuvuichoi`, `trangthai`, `id_diadiem`) VALUES ('$gia', '$soluong', '$mota', '$thongtinchitiet', '$hinh', '$id_khuvuichoi', '$trangthai', '$id_diadiem')";
    pdo_execute($sql);
}
function update_tour_soluong($id_tour, $soluong)
{
    $sql = "UPDATE `tour` SET `soluong` = '{$soluong}' WHERE `tour`.`id_tour` = $id_tour";
    pdo_execute($sql);
}
function delete_tour($id_tour)
{
    $sql = "DELETE FROM tour WHERE id_tour=" . $id_tour;
    pdo_execute($sql);
}

function loadall_tour_page($begin)
{
    $sql = "SELECT * from tour 
            join diadiem on tour.id_diadiem = diadiem.id_diadiem 
            join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi";
    $sql .= " order by id_tour desc LIMIT $begin,9";
    $list_tour = pdo_query($sql);
    return $list_tour;
}

function loadall_tour_limit()
{
    $sql = "SELECT * from tour 
            join diadiem on tour.id_diadiem = diadiem.id_diadiem 
            join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi";
    $sql .= " order by id_tour desc LIMIT 0,6";
    $list_tour = pdo_query($sql);
    return $list_tour;
}