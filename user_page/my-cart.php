<?php
  // session_start();
  echo $_SESSION['id_nguoidung'];
?>
<!-- main container -->
<main id="main">
  <!-- top information area -->
  <div class="inner-top">
    <div class="container">
      <h1 class="inner-main-heading">Giỏ hàng</h1>
      <!-- breadcrumb -->
      <nav class="breadcrumbs">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><span>Giỏ hàng</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="inner-main common-spacing container">
    <!-- cart information holder -->
    <div class="cart-holder table-container">
      <!-- <form method="POST"> -->
      <div class="table-responsive">
        <table class="table table-hover table-align-right">
          <thead>
            <tr>
              <th>&nbsp;</th>
              <th>
                <strong class="date-text">Vé đã chọn</strong>
              </th>
              <th>
                <strong class="date-text" style="width: 105px">Giá vé</strong>
              </th>
              <th>
                <strong class="date-text">Số lượng vé</strong>
              </th>
              <th>
                <strong class="date-text" style="width=105px">Tổng tiền</strong>
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            // $i = 1;
            echo $_SESSION['id_nguoidung'];
            echo $_SESSION['username'];
            foreach ($list_cart as $key => $value) {
              extract($value);
              $i = $id_giohang;
              $dateP = date("Y-m-d");
              $datePF = date('jS M Y', strtotime($dateP));
              // echo $datePF;
              // $gia = INTEGER($gia);
              $gia = number_format($gia, 0, '', '.');
              $tong1 = number_format($tongtien, 0, '', '.');
              echo '
                        <form method="POST" action="?act=checkout">
                        <tr>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                      <a class="delete" href="#"
                                        ><span class="icon-trash"></span
                                      ></a>
                                      <input name="id_giohang" value="' . $id_giohang . '" type="hidden">
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                      <div class="info">
                                        <div class="img-wrap">
                                          <img
                                            src="../img/' . $img . '"
                                            height="240"
                                            width="350"
                                            alt="image description"
                                          />
                                        </div>
                                        <div class="text-wrap">
                                          <strong class="product-title"
                                            >' . $tenkhuvuichoi . ' // ' . $tendiadiem . '</strong
                                          >
                                          <time id="" class="time" datetime="2016-11-05"
                                            > ' . $datePF . '</time
                                          >
                                          <input type="date" name="ngaydat' . $i . '" value="' . $dateP . '" id="input2' . $i . '">

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                      <input type="button" class="price" id="price' . $i . '" value="' . $gia . '" onchange="getValue()" style="text-align: center; border: none; background-color: transparent">VND
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                      <div class="num-hold">
                                        <button type="button" class="minus control" onclick="decreaseQuantity' . $i . '()" style="font-size: 40px">-</button>
                                        <button type="button" class="plus control" onclick="increaseQuantity' . $i . '()" style="font-size: 25px">+</button>
                                        <input style="width:42%; text-align: center; border: none; background-color: transparent"  id="quantity' . $i . '" value="' . $soluong_cart . '" readonly name="quantity' . $i . '">
                                        <input style="width:100%; margin-top: 5px; height: 20px; text-align: center; background-color: #4f4949; color: white" type="" id="quantity' . $i . '" value="Còn ' . $soluong . ' vé" readonly>
                                      </div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                        <input style="width: 60%; text-align: center; border: none; background-color: transparent" readonly name="totalPrice' . $i . '" id="totalPrice' . $i . '" value="' . $tong1 . '">VND
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="cell">
                                    <div class="middle">
                                      <button type="submit" class="btn btn-default">Thanh toán</button>
                                    </div>
                                  </div>
                                </td>
                              </tr>';
              echo '
                                <!--<script>
                                  function getValue(){
                                    var input = document.getElementById("input2' . $i . '");
                                    var value = input.value;
                                    return value;
                                  }
                                </script>-->
                              ';
              // $ngaydat.$i = getValue();
              // $update_cart = update_cart($id_giohang, $ngaydat.$i, 1, 1);
              // $i++;
              echo '<script>
                              function increaseQuantity' . $i . '(){
                                  var quantityInput = document.getElementById("quantity' . $i . '"); 
                                  var currentQuantity = parseInt(quantityInput.value); 
                                  if(currentQuantity < ' . $soluong . '){
                                    quantityInput.value = currentQuantity + 1;
                                  }

                                  var priceInput = document.getElementById("price' . $i . '"); 
                                  var currentPrice = parseInt(priceInput.value);

                                  var totalPriceInput = document.getElementById("totalPrice' . $i . '"); 
                                  var currentTotalPrice = parseInt(totalPriceInput.value); 
                                  <!--totalPriceInput.value = currentPrice * quantityInput.value * 1000;-->
                                  total = currentPrice * quantityInput.value * 1000;
                                  totalPriceInput.value = total.toLocaleString("vi-VN");
                              }
                              function decreaseQuantity' . $i . '(){
                                  var quantityInput = document.getElementById("quantity' . $i . '"); 
                                  var currentQuantity = parseInt(quantityInput.value); 
                                  if(currentQuantity > 1){
                                      quantityInput.value = currentQuantity - 1;
                                  }

                                  var priceInput = document.getElementById("price' . $i . '"); 
                                  var currentPrice = parseInt(priceInput.value);

                                  var totalPriceInput = document.getElementById("totalPrice' . $i . '"); 
                                  var currentTotalPrice = parseInt(totalPriceInput.value); 
                                  <!--totalPriceInput.value = currentPrice * quantityInput.value;-->
                                  total = currentPrice * quantityInput.value * 1000;
                                  totalPriceInput.value = total.toLocaleString("vi-VN");
                              }
                            </script>
                            </form>';
              // $i++;
              // <a href="?act=checkout&id_giohang='.$id_giohang.'" class="btn btn-default">CHECKOUT</a>
            
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="cart-option">
        <div class="button-hold">
          <a href="?act=checkout" class="btn btn-default">Thanh toán tất</a>
        </div>
      </div>
    </div>
  </div>
  <!-- </form> -->
</main>
</div>
<?php
// $i = 1;
// foreach ($list_cart as $key => $value){
//   extract($value);
//   $ngaydat.$i = $_POST["ngaydat$i"];
//   $quantity.$i = $_POST["quantity$i"];
//   $tongtien.$i = $_POST["totalPrice$i"];
//   $update_cart = update_cart($id_giohang, $ngaydat.$i, $tongtien.$i, $quantity.$i);
//   $i++;
// }
?>
<!-- <script>
  var i = 0;
  function increaseQuantity(){
    i++;
      var quantityInput = document.getElementById("ocl"); 
      var currentQuantity = parseInt(quantityInput.value); 
      quantityInput.value = currentQuantity + 1;
  }
  function decreaseQuantity(){
      var quantityInput = document.getElementById("ocl"); 
      var currentQuantity = parseInt(quantityInput.value); 
      if(currentQuantity > 1){
          quantityInput.value = currentQuantity - 1;}
    }
  function total(){
      var quantityInput2 = document.getElementById("total"); 
      var quantityInput = document.getElementById("ocl"); 
      var currentQuantity = parseInt(quantityInput.value); 
      var currentQuantity2 = parseInt(quantityInput.value); 
      quantityInput2.value = currentQuantity2 * quantityInput;
  }
</script> -->

<script>
  const input2'.$i.' = document.getElementById("input2'.$i.'");
  const input1'.$i.' = document.getElementById("input1'.$i.'"); 
                                            input2'.$i.'.addEventListener("change", function () {
                                              input1'.$i.'.value = input2'.$i.'.value;
  });
</script>