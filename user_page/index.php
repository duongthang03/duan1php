<?php
include "../model/pdo.php";
include "../model/diadiem.php";
include "../model/khuvuichoi.php";
include "../model/tour.php";
include "../model/cart.php";
include "../model/donhang.php";
include "../model/nguoidung.php";
include "../global.php";
$list_tour = loadall_tour();
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case "chitiettour":
      $tour = loadone_tour($_GET['id_tour']);
      $gallery = load_gallery(3);
      include "tour-detail.php";
      break;
    case "my_cart":
      // $tour = loadone_tour($_GET['id_tour']);
      $list_cart = load_cart();
      include "my-cart.php";
      break;
    case "add_to_cart":
      $id_nguoidung = $_SESSION['id_nguoidung'];
      $add_cart = insert_cart($_GET['id_tour'], $id_nguoidung);
      // $add_tour_cart = loadone_tour($_GET['id_tour']);
      $list_cart = load_cart();
      include "my-cart.php";

      break;
    case "checkout":
      // $add_cart = insert_cart();
      // $add_cart = insert_cart($_GET['id_tour']);
      $id = $_POST['id_giohang'];
      // echo $id;
      $soluong = $_POST['quantity' . $id];
      $tong = $_POST['totalPrice' . $id];
      $tong = intval($tong) * 1000000;
      $date = $_POST['ngaydat' . $id];
      update_cart($id, $date, $tong, $soluong);
      $one_cart = loadone_cart($id);
      include "checkout.php";
      break;
    case "confirmation":
      $one_cart = loadone_cart($_GET['id_giohang']);
      extract($one_cart);
      // $tongtien = $_POST['tongtien'];
      // $ngaydat = $_POST['ngaydat'];
      // $id_tour = $id_tour;
      // $id_giohang = $id_giohang;
      // $id_nguoidung = $id_nguoidung;
      date_default_timezone_set('Asia/Ho_Chi_Minh');
      $datetime = date('Y-m-d H:i:s');
      insert_donhang($tongtien, $ngaydat, $id_tour, $id_giohang, $id_nguoidung, $datetime);
      include "confirmation.php";
      break;
    case "icon-login":
      include "login.php";
      break;
    case "dangky":
      $username_register = $_POST['username_register'];
      $password_register = $_POST['password_register'];
      $email_register = $_POST['email_register'];
      $sdt_register = $_POST['sdt_register'];
      insert_nguoidung($username_register, $password_register, $email_register, $sdt_register);
      echo '<script type="text/javascript">alert("Đăng ký thành công!");</script>';
      include "login.php";
      break;
    case "dangnhap":
      // $_SESSION['username'] = $username;
      // session_start();
      if (isset($_POST['dangnhap'])) {
        $username1 = $_POST['username'];
        $password1 = $_POST['password'];
        $dangnhap = dangnhap($username1, $password1);
        // echo $dangnhap;
        extract($dangnhap);
        // $id_nguoidung1 = $id_nguoidung;
        // echo $username;
        // echo $password;
        // echo $id_nguoidung;
        if ($role == 1) {
          header('Location:../admin');
          exit();
        } else {
          $_SESSION['username'] = $username1;
          $_SESSION['id_nguoidung'] = $id_nguoidung;
          include "view/home.php";
        }
      }
      // include "view/home.php";
      break;
  }
} else {
  include "view/home.php";
}
include "view/footer.php";

?>