<?php
session_start();
include "../../model/pdo.php";
include "../../model/diadiem.php";
include "../../model/khuvuichoi.php";
include "../../model/tour.php";
include "../../model/cart.php";
include "../../model/donhang.php";
include "../../model/nguoidung.php";
include "../../global.php";

// Kiểm tra xem giỏ hàng có dữ liệu hay không
if (!empty($_SESSION['giohang'])) {
    $cart = $_SESSION['giohang'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $id_tour = array_column($cart, 'id');
    
    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $id_tour);
    
    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_tourCart($idList);
    // var_dump($dataDb);
    $sum_total = 0;
    foreach ($dataDb as $key => $product) :
        // $i = $id_giohang;
        $dateP = date("Y-m-d");
        $date = '';
        $datePF = date('jS M Y', strtotime($dateP));
        // echo $datePF;
        // $gia = INTEGER($gia);
        // $gia = number_format($gia, 0, '', '.');
        // $tong1 = number_format($tongtien, 0, '', '.');
        $quantityInCart = 0;
        foreach ($_SESSION['giohang'] as $item) {
          if ($item['id'] == $product['id_tour']) {
              $quantityInCart = $item['quantity'];
              // $date = $item['date'];
              break;
          }
        }
        ?>
          <tr>
            <td>
              <div class="cell">
                <div class="middle">
                  <button onclick="removeFormCart(<?= $product['id_tour'] ?>)"  style="border: none; background-color: transparent">
                    <a class="delete" href="#"
                      ><span class="icon-trash"></span
                    ></a>
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="cell">
                <div class="middle">
                  <div class="info">
                    <div class="img-wrap">
                      <img
                        src="../img/<?= $product['img'] ?>"
                        height="240"
                        width="350"
                        alt="<?= $product['tenkhuvuichoi'] ?>"
                      />
                    </div>
                    <div class="text-wrap">
                      <strong class="product-title"
                        ><?= $product['tenkhuvuichoi'] ?></strong
                      >
                      <!-- <input type="date" name="" value="<?= $date ?>" oninput="updateQuantity(<?= $product['id_tour'] ?>, <?= $key ?>)" id="date_<?= $product['id_tour'] ?>"> -->
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="cell">
                <div class="middle">
                    <input readonly value="<?= number_format((int)$product['gia'], 0, ",", ".")  ?>" style="text-align: right; border: none; background-color: transparent; width:80%"> <u>đ</u>
                </div>
              </div>
            </td>
            <td>
              <div class="cell">
                <div class="middle">
                  <div class="num-hold">
                    <!-- <button type="button" class="minus control" onclick="decreaseQuantity<?= $product['id_tour'] ?>()" style="font-size: 40px">-</button>
                    <button type="button" class="plus control" onclick="increaseQuantity<?= $product['id_tour'] ?>()" style="font-size: 25px">+</button> -->
                    <input type="number" value="<?= $quantityInCart ?>" min="1" max=<?=$product['soluong']?> id="quantity_<?= $product['id_tour'] ?>" oninput="updateQuantity(<?= $product['id_tour'] ?>, <?= $key ?>)" style="width:42%; text-align: center; border: none; background-color: transparent">
                    <!-- <input style="width:42%; text-align: center; border: none; background-color: transparent"  id="quantity<?= $i ?>" value="<?= $soluong_cart ?>" readonly name="quantity<?= $i ?>"> -->
                    <input style="width:100%; margin-top: 5px; height: 20px; text-align: center; background-color: #4f4949; color: white" value="Tổng: <?= $product['soluong'] ?> vé" readonly>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="cell">
                <div class="middle">
                    <input readonly value="<?= number_format((int)$product['gia'] * (int)$quantityInCart, 0, ",", ".") ?>" style="text-align: right; border: none; background-color: transparent; width:80%"> <u>đ</u>
                    <!-- <input style="width: 60%; text-align: center; border: none; background-color: transparent" readonly name="totalPrice<?= $i ?>" id="totalPrice<?= $i ?>" value="<?= $tong1 ?>">VND -->
                </div>
              </div>
            </td>
            <td>
              <div class="cell">
                <div class="middle">
                  <!-- <a href="?act=checkout&id_tour=<?=$product['id_tour']?>"><button type="submit" class="btn btn-default">Thanh toán</button></a> -->
                </div>
              </div>
            </td>
            </form>
          </tr>
                <script>
                  function increaseQuantity<?= $product['id_tour'] ?>() {
                    var value = parseInt(document.getElementById('quantity_<?= $product['id_tour'] ?>').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById('quantity_<?= $product['id_tour'] ?>').value = value;
                  }

                  function decreaseQuantity<?= $product['id_tour'] ?>() {
                    var value = parseInt(document.getElementById('quantity_<?= $product['id_tour'] ?>').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value--;
                    document.getElementById('quantity_<?= $product['id_tour'] ?>').value = value < 0 ? 0 : value;
                  }
                </script>
        <?php
            $sum_total += ((int)$product['gia'] * (int)$quantityInCart);
            $_SESSION['resultTotal'] = $sum_total;
            endforeach;
        ?>
        <tr>
                <td colspan="5" align="center">
                    <h2>Tổng tiền hàng:</h2>
                </td>
                <td colspan="2" align="center">
                    <h2>
                        <span>
                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                        </span>
                    </h2>
                </td>
            </tr>
<?php
}
?>