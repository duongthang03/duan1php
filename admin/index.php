<?php
include "../model/pdo.php";
include "../model/diadiem.php";
include "../model/khuvuichoi.php";
include "../model/tour.php";
include "../model/donhang.php";

include "header.php";
include "sidebar.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "charts":
            include "charts.php";
            break;
        case "widgets":
            include "widgets.php";
            break;
        case "tables":
            include "tables.php";
            break;
        case "grid":
            include "grid.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        // case "diadiem":
        //     include "diadiem/index.php";
        //     break;
        // case "list_diadiem":
        case "diadiem":
            $list_diadiem = loadall_diadiem();
            include "diadiem/list.php";
            break;
        case "update_diadiem":
            if (isset($_GET['id_dd']) && ($_GET['id_dd'] > 0)) {
                $diadiem = loadone_diadiem($_GET['id_dd']);
            }
            $list_diadiem = loadall_diadiem();
            include "diadiem/update.php";
            break;
        case "A_update_diadiem":
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id_diadiem = $_POST['id_diadiem'];
                $tendiadiem = $_POST['tendiadiem'];
                
                update_diadiem($id_diadiem, $tendiadiem);
                $thongbao = "Cập nhật thành công!";
            }
            $list_diadiem = loadall_diadiem();
            include "diadiem/list.php";
            break;
        case "add_dd":
            include "diadiem/add.php";
            break;
        case "add_diadiem":
            if (isset($_POST['add'])) {
                $tendiadiem = $_POST['tendiadiem'];
                insert_diadiem($tendiadiem);
                $status = "Thêm thành công";
            }
            $list_diadiem = loadall_diadiem();
            include "diadiem/list.php";
            // include "diadiem/add.php";
            break;
        case "delete_diadiem":
            if (isset($_GET['id_dd'])) {
                delete_diadiem($_GET['id_dd']);
            }
            $list_diadiem = loadall_diadiem();
            include "diadiem/list.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////
        case "khuvuichoi":
            // $list_khuvuichoi = loadall_khuvuichoi();
            // $list_khuvuichoi_theodiadiem = loadall_khuvuichoi_theodiadiem();
            // include "khuvuichoi/list.php";
            // break;
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $id_diadiem = $_POST['id_diadiem'];
                if($id_diadiem == 0){
                    $list_khuvuichoi = loadall_khuvuichoi();
                    $list_diadiem = loadall_diadiem();
                    include "khuvuichoi/list.php";
                } else {
                    $list_khuvuichoi = loadall_khuvuichoi_theodiadiem($id_diadiem);
                    $list_diadiem = loadall_diadiem();
                    include "khuvuichoi/list.php";
                }
            } else {
                $list_khuvuichoi = loadall_khuvuichoi();
                $list_diadiem = loadall_diadiem();
                include "khuvuichoi/list.php";
            }
            // $list_khuvuichoi = loadall_khuvuichoi();
            // $list_diadiem = loadall_diadiem();
            // include "khuvuichoi/list.php";
            break;
        case "update_khuvuichoi":
            if (isset($_GET['id_kvc']) && ($_GET['id_kvc'] > 0)) {
                $khuvuichoi = loadone_khuvuichoi($_GET['id_kvc']);
            }
            $list_khuvuichoi = loadall_khuvuichoi();
            $list_diadiem = loadall_diadiem();
            include "khuvuichoi/update.php";
            break;
        case "A_update_khuvuichoi":
            if (isset($_POST['A_update_khuvuichoi']) && ($_POST['A_update_khuvuichoi'])) {
                $id_khuvuichoi = $_POST['id_khuvuichoi'];
                $tenkhuvuichoi = $_POST['tenkhuvuichoi'];
                $id_diadiem = $_POST['id_diadiem'];
                $diachi = $_POST['diachi'];
                update_khuvuichoi($id_khuvuichoi, $id_diadiem, $diachi, $tenkhuvuichoi);
                $thongbao = "Cập nhật thành công!";
            }
            $list_khuvuichoi = loadall_khuvuichoi();
            include "khuvuichoi/list.php";
            break;
        case "add_kvc":
            
            $list_khuvuichoi = loadall_khuvuichoi();
            $list_diadiem = loadall_diadiem();
            include "khuvuichoi/add.php";
            break;
        case "add_khuvuichoi":
            
            // if (isset($_POST['add'])) {

           $tenkhuvuichoi = $_POST['tenkhuvuichoi'];
                $id_diadiem = $_POST['id_diadiem'];
                $diachi = $_POST['diachi'];
                insert_khuvuichoi($id_diadiem, $diachi, $tenkhuvuichoi);
                $status = "Thêm thành công";
            // }
            $list_khuvuichoi = loadall_khuvuichoi();
            include "khuvuichoi/list.php";
            break;
        case "delete_khuvuichoi":
            if (isset($_GET['id_kvc'])) {
                delete_khuvuichoi($_GET['id_kvc']);
            }
            $list_khuvuichoi = loadall_khuvuichoi();
            include "khuvuichoi/list.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////
        case "tour":
            // $list_tour = loadall_tour();
            // $list_tour_theodiadiem = loadall_tour_theodiadiem();
            // include "tour/list.php";
            // break;
            if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                $keyw = $_POST['keyw'];
                $id_diadiem = $_POST['id_diadiem'];
                if($id_diadiem == 0){
                    $list_tour = loadall_tour();
                    $list_diadiem = loadall_diadiem();
                    include "tour/list.php";
                } else {
                    $list_tour = loadall_tour_theodiadiem($id_diadiem);
                    $list_diadiem = loadall_diadiem();
                    include "tour/list.php";
                }
            } else {
                $list_tour = loadall_tour();
                $list_diadiem = loadall_diadiem();
                include "tour/list.php";
            }
            // $list_tour = loadall_tour();
            // $list_diadiem = loadall_diadiem();
            // include "tour/list.php";
            break;
        case "update_tour":
            if (isset($_GET['id_tour']) && ($_GET['id_tour'] > 0)) {
                $tour = loadone_tour($_GET['id_tour']);
            }
            $list_tour = loadall_tour();
            $list_diadiem = loadall_diadiem();
            $list_khuvuichoi = loadall_khuvuichoi();
            include "tour/update.php";
            break;
        case "A_update_tour":
            if (isset($_POST['A_update_tour']) && ($_POST['A_update_tour'])) {
                $id_tour = $_POST['id_tour'];
                $id_diadiem = $_POST['id_diadiem'];
                $id_khuvuichoi = $_POST['id_khuvuichoi'];
                $hinh = $_FILES['img']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                $mota = $_POST['mota'];
                $thongtinchitiet = $_POST['thongtinchitiet'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $ngaybatdau = $_POST['ngaybatdau'];
                $ngayketthuc = $_POST['ngayketthuc'];
                $trangthai = $_POST['trangthai'];
                update_tour($id_tour, $gia, $ngaybatdau, $ngayketthuc, $soluong, $mota, $thongtinchitiet, $hinh, $id_khuvuichoi, $trangthai, $id_diadiem);
                $thongbao = "Update successfully!";
            }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        case "add_tour":
            
            $list_tour = loadall_tour();
            $list_diadiem = loadall_diadiem();
            include "tour/add.php";
            break;
        case "A_add_tour":
            
            // if (isset($_POST['add'])) {

           $tentour = $_POST['tentour'];
                $id_diadiem = $_POST['id_diadiem'];
                $diachi = $_POST['diachi'];
                insert_tour($id_diadiem, $diachi, $tentour);
                $status = "Thêm thành công";
            // }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        case "delete_tour":
            if (isset($_GET['id_kvc'])) {
                delete_tour($_GET['id_kvc']);
            }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////////////
        case "donhang":
            // if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
            //     $keyw = $_POST['keyw'];
            //     $id_diadiem = $_POST['id_diadiem'];
            //     if($id_diadiem == 0){
            //         $list_donhang = loadall_donhang();
            //         $list_diadiem = loadall_diadiem();
            //         include "donhang/list.php";
            //     } else {
            //         $list_donhang = loadall_donhang_theodiadiem($id_diadiem);
            //         $list_diadiem = loadall_diadiem();
            //         include "donhang/list.php";
            //     }
            // } else {
            //     $list_donhang = loadall_donhang();
            //     // $list_diadiem = loadall_diadiem();
            //     include "donhang/list.php";
            // }
            $list_donhang = loadall_donhang();
            include "donhang/list.php";
            break;
        case "update_donhang":
            if (isset($_GET['id_tour']) && ($_GET['id_tour'] > 0)) {
                $tour = loadone_tour($_GET['id_tour']);
            }
            $list_tour = loadall_tour();
            $list_diadiem = loadall_diadiem();
            $list_khuvuichoi = loadall_khuvuichoi();
            include "tour/update.php";
            break;
        case "A_update_tour":
            if (isset($_POST['A_update_tour']) && ($_POST['A_update_tour'])) {
                $id_tour = $_POST['id_tour'];
                $id_diadiem = $_POST['id_diadiem'];
                $id_khuvuichoi = $_POST['id_khuvuichoi'];
                $hinh = $_FILES['img']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                $mota = $_POST['mota'];
                $thongtinchitiet = $_POST['thongtinchitiet'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $ngaybatdau = $_POST['ngaybatdau'];
                $ngayketthuc = $_POST['ngayketthuc'];
                $trangthai = $_POST['trangthai'];
                update_tour($id_tour, $gia, $ngaybatdau, $ngayketthuc, $soluong, $mota, $thongtinchitiet, $hinh, $id_khuvuichoi, $trangthai, $id_diadiem);
                $thongbao = "Update successfully!";
            }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        case "delete_tour":
            if (isset($_GET['id_kvc'])) {
                delete_tour($_GET['id_kvc']);
            }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        case "chitietdonhang":
            $one_donhang = loadone_donhang($_GET['id_donhang']);
            include "donhang/chitiet.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        case "form-basic":
            include "form-basic.php";
            break;
        case "form-wizard":
            include "form-wizard.php";
            break;
        case "icon-fontawesome":
            include "icon-fontawesome.php";
            break;
        case "icon-material":
            include "icon-material.php";
            break;
        case "pages-buttons":
            include "pages-buttons.php";
            break;
        case "pages-calendar":
            include "pages-calendar.php";
            break;
        case "pages-chat":
            include "pages-chat.php";
            break;
        case "pages-elements":
            include "pages-elements.php";
            break;
        case "pages-gallery":
            include "pages-gallery.php";
            break;
        case "pages-invoice":
            include "pages-invoice.php";
            break;
        case "authentication-login":
            include "authentication-login.php";
            break;
        case "authentication-register":
            include "authentication-register.php";
            break;
        case "error-403":
            include "error-403.php";
            break;
        case "error-404":
            include "error-404.php";
            break;
        case "error-405":
            include "error-405.php";
            break;
        case "error-500":
            include "error-500.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>

