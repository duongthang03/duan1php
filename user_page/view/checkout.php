<?php
// extract($one_cart);
// echo $id_giohang;
?>
<!-- main container -->
<main id="main">
  <!-- top information area -->
  <div class="inner-top">
    <div class="container">
      <h1 class="inner-main-heading">Thanh toán</h1>
      <!-- breadcrumb -->
      <nav class="breadcrumbs">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><span>Thanh toán</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="inner-main common-spacing container">
    <!-- booking form -->
    <form class="booking-form" action="" method="POST">
      <div class="row same-height">
        <div class="col-md-6">
          <div class="top-box">
            <a href="#" class="holder height">
              <span class="arrow"></span>
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="top-box">
            <a href="#" class="holder height">
              <span class="arrow"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-holder">
            <h2 class="small-size">Điền thông tin</h2>
            <div class="hold">
              <label for="txthoten">Họ & Tên</label>
              <input name="txthoten" type="text" id="name" class="form-control" />
            </div>
            <div class="hold">
              <label for="txtaddress">Địa chỉ</label>
              <input name="txtaddress" type="text" id="address" class="form-control" />
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="hold">
                  <label for="txtemail">Email</label>
                  <input name="txtemail" type="email" id="em" class="form-control" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="hold">
                  <label for="txttel">Số điện thoại</label>
                  <input name="txttel" type="text" id="phn" class="form-control" />
                </div>
              </div>
            </div>
            <ul class="option">
              <li>
                <header class="title">
                  <label class="custom-radio">
                    <input type="radio" name="pttt" value="1" required />
                    <span class="check-input"></span>
                    <span class="check-label">Thanh toán trực tiếp tại quầy</span>
                  </label>
                </header>

              </li>
              <li>
                <header class="title">
                  <label class="custom-radio">
                    <input type="radio" name="pttt" value="2" required />
                    <span class="check-input"></span>
                    <span class="check-label">Thanh toán online</span>
                  </label>
                </header>

              </li>
            </ul>

          </div>
          <!-- </form>  -->
        </div>
        <div class="col-md-6">
          <div class="form-holder">
            <div class="order-block">
              <h2 class="small-size">Xem lại đơn hàng</h2>
              <div class="wrap">
                <table class="product-table">
                  <thead>
                    <tr>
                      <th>Vé đã chọn</th>
                      <th>Giá</th>
                    </tr>
                  </thead>
                  <?php
                  // $tongtien = $tongtien * 1000;
                  // $tong1 = number_format($tongtien, 0, '', '.');
                  foreach ($cart as $item) {
                    ?>
                    <tbody>
                      <tr>
                        <td>
                          <span class="title">
                            <?php echo $item['name'] ?> &emsp;<span class="amount"> |
                              <?= number_format($item['price'], 0, ',', '.') ?> <u>đ</u>&emsp;x&emsp;
                              <?= $item['quantity'] ?> vé
                            </span>
                          </span>
                          <time datetime="">Ngày: &emsp;
                            <?= $item['date'] ?>
                          </time>
                        </td>
                        <td>
                          <span class="amount">
                            <?php echo number_format($item['price'] * $item['quantity'], 0, ",", "."); ?> VND
                          </span>
                        </td>
                      </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                  <tfoot>
                    <tr>
                      <td>Tổng</td>
                      <td>
                        <?= number_format($_SESSION['resultTotal'], 0, ",", ".") ?> VND
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <button type="submit" name="order_confirm" class="btn btn-default">
                  Xác nhận
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</main>
</div>