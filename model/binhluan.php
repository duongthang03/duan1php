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
    function all_binhluan($id_tour){
        $sql = "SELECT
                    binhluan.id_binhluan,
                    binhluan.noidung,
                    binhluan.id_nguoidung,
                    binhluan.id_tour,
                    binhluan.ngaybinhluan,
                    nguoidung.id_nguoidung,
                    nguoidung.username
                FROM
                    binhluan
                JOIN 
                    nguoidung ON binhluan.id_nguoidung = nguoidung.id_nguoidung
                JOIN 
                    tour ON binhluan.id_tour= tour.id_tour
                WHERE
                    tour.id_tour = $id_tour
        ";
        $result =  pdo_query($sql);
        return $result;
    }
?>