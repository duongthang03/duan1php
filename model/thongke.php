<?php
function load_thongke()
{
    $sql = "SELECT diadiem.id_diadiem, diadiem.tendiadiem, COUNT(*) 'soluong', MIN(gia) 'gia_min', MAX(gia) 'gia_max', AVG(gia) 'gia_avg' FROM diadiem 
            JOIN tour ON diadiem.id_diadiem = tour.id_diadiem
            JOIN khuvuichoi ON tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi
            GROUP BY diadiem.id_diadiem, diadiem.tendiadiem 
            ORDER BY soluong DESC";
    $list_thongke = pdo_query($sql);
    return $list_thongke;
}
