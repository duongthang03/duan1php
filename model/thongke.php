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
function load_thongke_doanhthu()
{
    $sql = "SELECT 
                DATE(datetime) AS ngay,
                SUM(tongtien) AS tongtien_ngay,
                SUM(soluong_donhang) AS soluong_ngay
            FROM datve
            GROUP BY DATE(ngaydat)
            ORDER BY ngay";
    $list_thongke_doanhthu = pdo_query($sql);
    return $list_thongke_doanhthu;
}
function load_thongke_doanhthu_thang($month)
{
    $sql = "SELECT 
                DATE(datetime) AS ngay,
                SUM(tongtien) AS tongtien_ngay,
                SUM(soluong_donhang) AS soluong_ngay
            FROM datve
            WHERE MONTH(datetime) = " . $month . "
            GROUP BY DATE(ngaydat)
            ORDER BY ngay";
    $list_thongke_doanhthu_thang = pdo_query($sql);
    return $list_thongke_doanhthu_thang;
}
