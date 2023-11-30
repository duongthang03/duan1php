<?php
include "../model/pdo.php";
include "../model/diadiem.php";
include "../model/khuvuichoi.php";
include "../model/tour.php";
include "../model/donhang.php";
include "../model/nguoidung.php";
include "../model/binhluan.php";
include "../model/thongke.php";

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
        case "chitiet_tour":
                $tour = loadone_tour($_GET['id_ve']);
                include "tour/chitiet.php";
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
                $trangthai = $_POST['trangthai'];
                update_tour($id_tour, $gia, $soluong, $mota, $thongtinchitiet, $hinh, $id_khuvuichoi, $trangthai, $id_diadiem);
                $thongbao = "Update successfully!";
            }
            $list_tour = loadall_tour();
            include "tour/list.php";
            break;
        case "add_tour":
            if (isset($_POST['add'])) {
                $diadiem = $_POST['diadiem'];
                $khuvuichoi = $_POST['khuvuichoi'];
                $diachi = $_POST['diachi'];
                $hinh=$_FILES['image']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                    } else {
                echo "Sorry, there was an error uploading your file.";
                    }
                $mota = $_POST['mota'];
                $thongtinchitiet = $_POST['thongtinchitiet'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $trangthai = $_POST['trangthai'];
                insert_khuvuichoi($diadiem, $diachi, $khuvuichoi);
                function loadone2_khuvuichoi($khuvuichoi){
                    $sql = "select * from khuvuichoi join diadiem on khuvuichoi.id_diadiem = diadiem.id_diadiem where khuvuichoi.tenkhuvuichoi = '".$khuvuichoi."'";
                    $result = pdo_query_one($sql);
                    return $result;
                }
                $load_kvc = loadone2_khuvuichoi($khuvuichoi);
                extract($load_kvc);
                $khuvuichoiw = $id_khuvuichoi;
                insert_tour($gia, $soluong, $mota, $thongtinchitiet, $hinh, $khuvuichoiw, $trangthai, $id_diadiem);
                $thongbao = "Update successfully!";
                // header('Location: ./index.php');
            }

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
            if(isset($_POST['mi'])){
                $id = $_GET['id'];
                $tt = $_POST['mi'];
                update_trangthai_donhang($id, $tt);
            }
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
        case "delete_donhang":
            if (isset($_GET['id_donhang'])) {
                delete_donhang($_GET['id_donhang']);
            }
            $list_donhang = loadall_donhang();
            include "donhang/list.php";
            break;
        case "chitietdonhang":
            $one_donhang = loadone_donhang($_GET['id_tbl_order']);
            include "donhang/chitiet.php";
            break;
        case "update_trangthai":
            $trangthai = $_POST['trangthai'];
            $id_order = $_POST['id_order'];
            update_trangthai_donhang($id_order, $trangthai);
            $list_tour = loadall_tour();
            $list_diadiem = loadall_diadiem();
            $list_khuvuichoi = loadall_khuvuichoi();
            include "donhang/list.php";
            break;
        ///////////////////////////////////////////////////////////////////////////////////////
        case "nguoidung":
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/list.php";
            break;
        case "delete_nguoidung":
            if (isset($_GET['id_nguoidung'])) {
                delete_nguoidung($_GET['id_nguoidung']);
            }
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/list.php";
            break;
        case "update_nguoidung":
            if (isset($_GET['id_nguoidung'])) {
                $nguoidung = loadone_nguoidung($_GET['id_nguoidung']);
            }
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/update.php";
            break;
        case "A_update_nguoidung":
            if (isset($_POST['A_update_nguoidung'])) {
                $id_nguoidung = $_POST['id_nguoidung'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $role = $_POST['role'];
                update_nguoidung($id_nguoidung, $username, $password, $email, $sdt, $role);
                $thongbao = "Cập nhật thành công!";
            }
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/list.php";
            break;
        case "add_nguoidung":
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/add.php";
            break;
        case "A_add_nguoidung":      
            if (isset($_POST['add'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $role = $_POST['role'];
                insert_nguoidung2($username, $password, $email, $sdt, $role);
                $status = "Thêm thành công";
            }
            $list_nguoidung = loadall_nguoidung();
            include "nguoidung/list.php";
            break;
        //////////////////////////////////////////////////////////////////////////////
        case "binhluan":
            $list_binhluan = loadall_binhluan();
            include "binhluan/list.php";
            break;
        case "delete_binhluan":
            if (isset($_GET['id_binhluan'])) {
                delete_binhluan($_GET['id_binhluan']);
            }
            $list_binhluan = loadall_binhluan();
            include "binhluan/list.php";
            break;
            ////////////////////////////////////////////////
        case "thongke":
            $list_thongke = load_thongke();
            include "thongke/list.php";
            break;
        case "thongke_doanhthu":
            $list_thongke_doanhthu = load_thongke_doanhthu();
            include "thongke/list_doanhthu.php";
            break;
            ///////////////////////////////////////////////
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

