<?php
  // session_start();
  // echo $_SESSION['id_nguoidung'];
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
      <?php
      if (empty($dataDb)) {
          echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
      } else {
      ?>
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
          <tbody id="order">
            <?php
            // $i = 1;
            // echo $_SESSION['id_nguoidung'];
            // echo $_SESSION['username'];
            $sum_total = 0;
            foreach ($dataDb as $key => $product) :
              $dateP = date("Y-m-d");
              $date = '';
              $datePF = date('jS M Y', strtotime($dateP));
              // echo $datePF;
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
                        <a href="?act=checkout&id_tour=<?=$product['id_tour']?>"><button type="submit" class="btn btn-default">Thanh toán</button></a>
                        <p></p>
                      </div>
                    </div>
                  </td>
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
                <td colspan="3" align="center">
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
          </tbody>
        </table>
        <?php
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        // let newDate = $('#date_').val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity,
                // date: newDate
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>
      </div>
      <div class="cart-option">
        <div class="button-hold">
          <a href="?act=checkout" class="btn btn-default">Thanh toán tất</a>
        </div>
      </div>
      <div class="table-responsive">
        <div style="height: 20px; padding: 30px; margin-top: 10px" class="inner-top">
          <h3 class="" >Đơn hàng đã đặt</h3>
        </div>
        <div class="table-responsive">
        <table class="table table-hover table-align-right">
          <thead>
            <tr style="text-align: center; justify-content: center">
              <th style="text-align: center; justify-content: center">
                <strong class="date-text">Vé đã đặt</strong>
              </th>
              <th>
                <strong class="date-text">Số lượng vé đặt</strong>
              </th>
              <th>
                <strong class="date-text">Tổng tiền</strong>
              </th>
              <th>
                <strong class="date-text">Ngày vé đặt</strong>
              </th>
              <th>
                <strong class="date-text">Thời gian đặt hàng</strong>
              </th>
              <th>
                <strong class="date-text">Trạng thái</strong>
              </th>
              
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_donhangdadat as $key => $value) {
              extract($value);
              $tongtien = number_format($tongtien, 0, '', '.');
              $datetime1 = new DateTime($datetime);
              $datetime2 = $datetime1 -> format('H\h:i\m:s\s | d-m-Y');
              $ngaydat1 = new dateTime($ngaydat);
              $ngaydat2 = $ngaydat1 -> format('d-m-Y');
              if($trangthai == 1){
                $trangthai = "Chờ duyệt";
              } else if($trangthai == 2){
                $trangthai = "Đã thanh toán";
              } else if($trangthai == 3){
                $trangthai = "Đã hoàn thành";
              } 
            ?>
              <tr>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <div class="info">
                        <div class="img-wrap">
                          <img
                            src="../img/<?= $img ?>"
                            height="240"
                            width="350"
                            alt="image description"
                          />
                        </div>
                        <div class="text-wrap">
                          <strong class="product-title"
                            ><?= $tenkhuvuichoi ?> | <?= $tendiadiem ?></strong
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <input type="button" value="<?= $soluong_donhang ?>" style="text-align: center; border: none; background-color: transparent">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <input type="button" value="<?= $tongtien ?>" style="text-align: center; border: none; background-color: transparent">VND
                    </div>
                  </div>
                </td>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <input type="button" value="<?= $ngaydat2 ?>" style="text-align: center; border: none; background-color: transparent">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <input type="button" value="<?= $datetime2 ?>" style="text-align: center; border: none; background-color: transparent">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="cell">
                    <div class="middle">
                      <input type="button" id="clo<?= $trangthai ?>" value="<?= $trangthai ?>" style="text-align: center; border: none; background-color: transparent">
                    </div>
                  </div>
                </td>
              </tr>
                    <script>
                      var clo = document.getElementById("clo<?= $trangthai ?>");
                      // clo.addEventListener("", function(){
                      if(clo.value === "Chờ duyệt"){
                        clo.style.color = "red";
                      } else if(clo.value == "Đã hoàn thành"){
                        clo.style.color = "green";
                      }
                    // })
                    </script>
            <?php
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