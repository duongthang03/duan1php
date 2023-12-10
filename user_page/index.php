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
include "../model/binhluan.php";
include "../global.php";
// $list_tour = loadall_tour();
include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
  $act = $_GET['act'];
  switch ($act) {
    case "home":
      $list_tour = loadall_tour();
      $list_tour_limit = loadall_tour_limit();
      include "view/home3.php";
      break;
    case "chitiettour":
      // $list_tour = loadall_tour();
      // $tour = loadone_tour($_GET['id_tour']);
      $gallery = load_gallery(3);
      if (isset($_GET['id_tour']) && ($_GET['id_tour'] > 0)) {
        $id_tour = $_GET['id_tour'];
        $tour = loadone_tour($id_tour);
        $list_tour = loadall_tour_limit();
        $list_binhluan = all_binhluan($id_tour);
      } else {
        $id_tour = "";
      }
      if (isset($_POST['binhluan'])) {
        $id_tour = $_POST['id'];
        $noidung = $_POST['noidung'];
        $userID = $_SESSION['username']['id_nguoidung'];
        insert_binhluan($id_tour, $userID, $noidung);
        header("Location: " . $_SERVER['HTTP_REFERER']);
      }
      include "view/tour-detail.php";
      break;

    case "my_cart":
      // $tour = loadone_tour($_GET['id_tour']);
      // $id_nguoidung = $_SESSION['id_nguoidung'];
      // $id_nguoidung = 1;
      // $list_cart = load_cart($id_nguoidung);
      $id_nguoidung = $_SESSION['username']['id_nguoidung'];
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
        // var_dump($cart);
      }
      // include "view/listCartOrder.php";
      include "view/my-cart.php";
      break;
    case "checkout":
      if (isset($_SESSION['giohang'])) {
        $cart = $_SESSION['giohang'];
        // print_r($cart);
        if (isset($_POST['order_confirm'])) {
          $txthoten = $_POST['txthoten'];
          $txttel = $_POST['txttel'];
          $txtemail = $_POST['txtemail'];
          $txtaddress = $_POST['txtaddress'];
          $pttt = $_POST['pttt'];
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          $currentDateTime = date('Y-m-d H:i:s');
          if (isset($_SESSION['username'])) {
            $id_user = $_SESSION['username']['id_nguoidung'];
          } else {
            $id_user = 0;
          }
          $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
          foreach ($cart as $item) {
            insert_donhang($item['price'] * $item['quantity'], $item['date'], $item['id'], $id_user, $currentDateTime, $item['quantity'], $idBill);
            $one_tour = loadone_tour($item['id']);
            extract($one_tour);
            $soluong1 = $soluong - $item['quantity'];
            update_tour_soluong($item['id'], $soluong1);
          }
          unset($_SESSION['cart']);
          $_SESSION['success'] = $idBill;
          header("Location: ?act=confirmation");
        }
        include "view/checkout.php";
      } else {
        header("Location: index.php?act=listCart");
      }
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

    case "checkout1":
      // $add_cart = insert_cart();
      // $add_cart = insert_cart($_GET['id_tour']);
      $id = $_POST['id_giohang'];
      // echo $id;
      $soluong = $_POST['quantity' . $id];
      $tong = $_POST['totalPrice' . $id];
      if ($soluong == 1) {
        $tong1 = $tong * 1000;
      } else {
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
          include "view/nguoidung/dangky.php";
        }
      }
      include "view/nguoidung/dangky.php";
      break;

    case "thoat":
      dangxuat();
      unset($_SESSION['giohang']);
      $list_tour = loadall_tour();
      echo "<script>window.location.href = 'index.php';</script>";
      // include "view/home2.php";
      break;

    case "all_diadiem":
      $list_tour = loadall_tour();
      $list_tour_limit = loadall_tour_limit();
      include "view/home3.php";
      break;

    case "diadiem":
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      } else {
        $page = 1;
      }
      $product = "tour.id_tour desc";

      if (isset($_GET['thapdencao'])) {
        $product = "tour.gia asc";
      }

      if (isset($_GET['caodenthap'])) {
        $product = "tour.gia desc";
      }
      $list_tour_theodiadiem = loadall_tour_theodiadiem($_GET['diadiem'], $product);
      $list_tour = $list_tour_theodiadiem;
      // $lit_tour_iddm = tour_by_diadiem($list_tour_theodiadiem['id_diadiem']);
      $list_tour_limit = loadall_tour_limit();
      include "view/diadiem.php";
      break;

    case "defaut":
      include "view/home3.php";
  }
} else {
  $list_tour = loadall_tour();
  include "view/home3.php";
}
include "view/footer.php";

?>