<?php
    function load_cart(){
        $sql = "SELECT * from giohang join tour on giohang.id_tour = tour.id_tour join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi join diadiem on tour.id_diadiem = diadiem.id_diadiem order by id_giohang desc";
        $list_cart = pdo_query($sql);
        return  $list_cart;
    }
    function insert_cart($id_tour){
        $sql = "INSERT ignore INTO `giohang`(`id_tour`) VALUES ('$id_tour');";
        pdo_execute($sql);
    }
    function loadone_cart($id_giohang){
        $sql = "SELECT * from giohang join tour on giohang.id_tour = tour.id_tour join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi join diadiem on tour.id_diadiem = diadiem.id_diadiem where giohang.id_giohang=".$id_giohang;
        $one_cart = pdo_query_one($sql);
        return  $one_cart;
    }
    function update_cart($id_giohang, $ngaydat, $tongtien, $soluong_cart){
        $sql=  "UPDATE `giohang` SET `ngaydat` = '{$ngaydat}', `tongtien` = '{$tongtien}', `soluong_cart` = '{$soluong_cart}'  WHERE id_giohang =".$id_giohang;
        pdo_execute($sql);
    }
?>