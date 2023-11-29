<?php
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
        include "view/my-cart.php";
      break;
    case "checkout":
      if (isset($_SESSION['giohang'])) {
        $cart = $_SESSION['giohang'];
        if (isset($_POST['order_confirm'])) {
           echo '<script>window.alert("fhwhfuwrg")</script>';
            $txthoten = $_POST['txthoten'];
            $txttel = $_POST['txttel'];
            $txtemail = $_POST['txtemail'];
            $txtaddress = $_POST['txtaddress'];
            $pttt = $_POST['pttt'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $currentDateTime = date('H:i:s d/m/Y');
            if (isset($_SESSION['username'])) {
                $id_user = $_SESSION['id_nguoidung'];
            } else {
                $id_user = 0;
            }
            $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
            foreach ($cart as $item) {
                // addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                  insert_donhang($item['price'] * $item['quantity'], '11-10-2012', $item['id'], $id_user, $currentDateTime, $item['quantity'], $idBill);
            }
            unset($_SESSION['cart']);
            $_SESSION['success'] = $idBill;
            header("Location: index.php?act=confirmation");
        }
        include "view/checkout.php";
    } else {
        header("Location: index.php?act=my_cart");
    }
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
      include "view/login.php";
      break;
    case "dangky":
      $username_register = $_POST['username_register'];
      $password_register = $_POST['password_register'];
      $email_register = $_POST['email_register'];
      $sdt_register = $_POST['sdt_register'];
      insert_nguoidung($username_register, $password_register, $email_register, $sdt_register);
      echo '<script type="text/javascript">alert("Đăng ký thành công!");</script>';
      include "view/login.php";
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
          header('Location:../admin/index.php');
          exit();
        } else {
          $_SESSION['username'] = $username1;
          $_SESSION['id_nguoidung'] = $id_nguoidung;
          $list_tour = loadall_tour();
          include "view/home2.php";
        }
      }
      // include "view/home.php";
      break;
      case "dangxuat":
        // dangxuat();
        session_unset();
        header('Location: index.php');
        include "view/home.php";
        break;
      break;
      case "diadiem":
        $list_tour_theodiadiem = loadall_tour_theodiadiem($_GET['diadiem']);
        $list_tour = $list_tour_theodiadiem;
        include "view/home2.php";
        break;
  }
} else {
      $list_tour = loadall_tour();
  include "view/home2.php";
}
include "view/footer.php";

?>