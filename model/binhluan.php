<?php 
    function loadall_binhluan(){
        $sql = "SELECT * FROM `binhluan` 
                JOIN nguoidung ON binhluan.id_nguoidung = nguoidung.id_nguoidung
                JOIN tour ON binhluan.id_tour = tour.id_tour
                JOIN khuvuichoi ON tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi
                JOIN diadiem ON tour.id_diadiem = diadiem.id_diadiem
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function delete_binhluan($id_binhluan){
        $sql = "DELETE FROM binhluan WHERE id_binhluan=" .$id_binhluan;
        pdo_execute($sql);
    }
    function insert_binhluan($id_tour, $id_nguoidung, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `id_nguoidung`, `id_tour`, `ngaybinhluan`) 
            VALUES ('$noidung','$id_nguoidung','$id_tour','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }
    function all_binhluan(){
        $sql = "
            SELECT sanpham.name, binhluan.noidung, taikhoan._nguoidung, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_nguoidung = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
           ;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
?>