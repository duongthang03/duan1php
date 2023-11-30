<?php
ob_start();
session_start();
include "../model/pdo.php";
include "../model/diadiem.php";
include "../model/khuvuichoi.php";
include "../model/tour.php";
include "../model/cart.php";
include "../model/donhang.php";
include "../model/nguoidung.php";
include "../model/order.php";
include "../global.php";
// $list_tour = loadall_tour();
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case "chitiettour":
      $list_tour = loadall_tour();
      $tour = loadone_tour($_GET['id_tour']);
      $gallery = load_gallery(3);
      include "view/tour-detail.php";
      break;

    case "my_cart":
      // $tour = loadone_tour($_GET['id_tour']);
      // $id_nguoidung = $_SESSION['id_nguoidung'];
      // $id_nguoidung = 1;
      // $list_cart = load_cart($id_nguoidung);
      $list_donhangdadat = load_donhangdadat($id_nguoidung);
      if (!empty($_SESSION['giohang'])) {
        $cart = $_SESSION['giohang'];

        // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
        $id_tour = array_column($cart, 'id');
        
        // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
        $idList = implode(',', $id_tour);
        
        // Lấy sản phẩm trong bảng sản phẩm theo id
        $dataDb = loadone_tourCart($idList);
        // var_dump($dataDb);
      }
      // include "view/listCartOrder.php";
      include "view/my-cart.php";
      break;

    case "add_to_cart":
      // echo $_SESSION['id_nguoidung'];
      $id_nguoidung1 = $_SESSION['id_nguoidung'];
      $add_cart = insert_cart($_GET['id_tour'], $id_nguoidung1);
      // $add_tour_cart = loadone_tour($_GET['id_tour']);
      $list_donhangdadat = load_donhangdadat($id_nguoidung);
      $list_cart = load_cart($id_nguoidung1);
      include "view/my-cart.php";
      break;

    case "delete_cart":
        delete_cart($_GET['id_giohang']);
        $list_cart = load_cart($id_nguoidung);
        $list_donhangdadat = load_donhangdadat($id_nguoidung);
        include "my-cart.php";
      break;

    case "checkout":
      // $add_cart = insert_cart();
      // $add_cart = insert_cart($_GET['id_tour']);
      $id = $_POST['id_giohang'];
      // echo $id;
      $soluong = $_POST['quantity' . $id];
      $tong = $_POST['totalPrice' . $id];
      if($soluong == 1){
        $tong1 = $tong * 1000;
      } else{
        $tong1 = $tong * 1000000;
      }
      $date = $_POST['ngaydat' . $id];
      update_cart($id, $date, $tong1, $soluong);
      $one_cart = loadone_cart($id);
      include "checkout.php";
      break;
    case "confirmation":
      // $one_cart = loadone_cart($_GET['id_giohang']);
      // extract($one_cart);
      // // $tongtien = $_POST['tongtien'];
      // // $ngaydat = $_POST['ngaydat'];
      // // $id_tour = $id_tour;
      // // $id_giohang = $id_giohang;
      // // $id_nguoidung = $id_nguoidung;
      // date_default_timezone_set('Asia/Ho_Chi_Minh');
      // $datetime = date('Y-m-d H:i:s');
      // insert_donhang($tongtien, $ngaydat, $id_tour, $id_nguoidung, $datetime, $soluong_cart);
      // $one_tour = loadone_tour($id_tour);
      // extract($one_tour);
      // $soluong1 = $soluong - $soluong_cart;
      // update_tour_soluong($id_tour, $soluong1);
      include "view/confirmation.php";
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
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($username, $pass);
        if (is_array($checkuser)) {
          $_SESSION['username'] = $checkuser;
          echo "<script>alert('Bạn đã đăng nhập thành công!')</script>";
          // include "index.php";
          echo "<script>window.location.href = 'index.php';</script>";
          // header('Location: index.php');
        } else {
          $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại!";
          include "nguoidung/dangky.php";
        }
      }
      include "nguoidung/dangky.php";
      break;
      case "dangxuat":
        dangxuat();
        include "view/home.php";
        break;
      break;

    case "diadiem":
      $list_tour_theodiadiem = loadall_tour_theodiadiem($_GET['diadiem']);
      $list_tour = $list_tour_theodiadiem;
      include "view/home2.php";
      break;

    case "defaut":
      include "view/home2.php";
  }
} else {
  $list_tour = loadall_tour();
  include "view/home2.php";
}
include "view/footer.php";

?>