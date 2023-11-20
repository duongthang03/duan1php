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
            $add_cart = insert_cart($_GET['id_tour']);
            // $add_tour_cart = loadone_tour($_GET['id_tour']);
            $list_cart = load_cart();
            include "my-cart.php";
            
            break;
          case "checkout":
            // $add_cart = insert_cart();
            $one_cart = loadone_cart($_GET['id_giohang']);
            // $i = 1;
            // foreach ($list_cart as $key => $value){
            //   extract($value);
            //   $ngaydat.$i = $_POST["ngaydat$i"];
            //   $quantity.$i = $_POST["quantity$i"];
            //   $tongtien.$i = $_POST["totalPrice$i"];
            //   $update_cart = update_cart($id_giohang, $ngaydat.$i, $tongtien.$i, $quantity.$i);
            //   $i++;
            // }
            // echo $ngaydat3;
            // $ngaydat = $_POST['ngaydat'];
            // $quantity = $_POST['quantity'];
            // $tongtien = $_POST['totalPrice'];
            // $update_cart = update_cart($id_giohang, $ngaydat, $tongtien, $soluong_cart);
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
            insert_donhang($tongtien, $ngaydat, $id_tour, $id_giohang, $id_nguoidung);
            include "confirmation.php";
            break;

            case "login":
              $nguoidung = insert_nguoidung($_POST['id_nguoidung']);
              // if(isset($_POST['dangky'])&&($_POST['dangky'])){
              //   $username = $_POST['username'];
              //   $password = $_POST['password'];
              //   $email = $_POST['email'];
              //   $sdt = $_POST['sdt'];
              //   insert_nguoidung($username, $password ,$email, $sdt); 
              // }
              insert_nguoidung($username, $password ,$email, $sdt);
            include "login.php";
              break;
      }
    } else {
      include "view/home.php";
    }
  include "view/footer.php";

?>