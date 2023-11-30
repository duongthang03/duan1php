<?php
  // extract($one_cart);
  // echo $id_giohang;
?>
        <!-- main container -->
        <main id="main">
          <!-- top information area -->
          <div class="inner-top">
            <div class="container">
              <h1 class="inner-main-heading">Checkout</h1>
              <!-- breadcrumb -->
              <nav class="breadcrumbs">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">pages</a></li>
                  <li><span>Checkout</span></li>
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
                      <span class="left">Are You Returning Customer? </span>
                      <span class="right">Login Here</span>
                      <span class="arrow"></span>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="top-box">
                    <a href="#" class="holder height">
                      <span class="left">Have a Promotional Coupon? </span>
                      <span class="right">Enter Coupon Code</span>
                      <span class="arrow"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-holder">
                    <h2 class="small-size">Billing Information</h2>
                    <div class="wrap">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="txthoten">Họ & Tên</label>
                            <input name="txthoten" type="text" id="name" class="form-control" />
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="hold">
                        <label for="txtaddress">Địa chỉ</label>
                        <input name="txtaddress" type="text" id="address" class="form-control" />
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="txtemail">Email address</label>
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
                              <input type="radio" name="pttt" value="1" required/>
                              <span class="check-input"></span>
                              <span class="check-label">Thanh toán trực tiếp tại quầy</span>
                            </label>
                          </header>
                          <div class="info-hold">
                            <p>
                              Please send your cheque to Entrada Inc. Address,
                              Thank You!
                            </p>
                          </div>
                        </li>
                        <li>
                          <header class="title">
                            <label class="custom-radio">
                              <input type="radio" name="pttt" value="2" required/>
                              <span class="check-input"></span>
                              <span class="check-label">Thanh toán online</span>
                            </label>
                          </header>
                          <div class="info-hold">
                            <p>
                              If you dont have paypal account - you can still
                              pay using credit cards!
                            </p>
                          </div>
                        </li>
                      </ul>
                      <ul class="payment-option">
                        <li>
                          <img alt="visa" src="img/footer/visa.png" />
                        </li>
                        <li>
                          <img
                            width="33"
                            height="20"
                            alt="master card"
                            src="img/footer/mastercard.png"
                          />
                        </li>
                        <li>
                          <img
                            width="72"
                            height="20"
                            alt="paypal"
                            src="img/footer/paypal.png"
                          />
                        </li>
                        <li>
                          <img
                            width="33"
                            height="20"
                            alt="maestro"
                            src="img/footer/maestro.png"
                          />
                        </li>
                        <li>
                          <img
                            width="55"
                            height="20"
                            alt="bank transfer"
                            src="img/footer/bank-transfer.png"
                          />
                        </li>
                      </ul>
                    </div>
                    <!-- </form>  -->
                  </div>
                <div class="col-md-6">
                  <div class="form-holder">
                    <h2 class="small-size">Additional Notes</h2>
                    <div class="wrap">
                      <div class="hold">
                        <label for="txt">Your Comment</label>
                        <textarea
                          id="txt"
                          class="form-control"
                          placeholder="Please enter any additional information here, eg. food/drug requirements etc."
                        ></textarea>
                      </div>
                    </div>
                    <div class="order-block">
                      <h2 class="small-size">Preview Order</h2>
                      <div class="wrap">
                        <table class="product-table">
                          <thead>
                            <tr>
                              <th>Selected Tours</th>
                              <th>Price</th>
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
                                      <span class="title"
                                        ><?php echo $item['name'] ?> &emsp;<span class="amount"
                                          > | <?= number_format($item['price'], 0, ',', '.') ?> x&emsp; <?= $item['quantity'] ?> tickets</span
                                        ></span
                                      >
                                      <time datetime="2016-09-29"
                                        >Booking Date: &emsp; 01/12/2023</time
                                      >
                                    </td>
                                    <td>
                                      <span class="amount"><?php echo number_format($item['price'] * $item['quantity'], 0, ",", "."); ?> VND</span>
                                    </td>
                                  </tr>
                                </tbody>
                          <?php
                            }
                          ?>
                           <tfoot>
                          <tr>
                              <td>Total Price</td>
                              <td><?= number_format($_SESSION['resultTotal'], 0, ",", ".") ?> VND</td>
                            </tr>
                          </tfoot>
                        </table>
                        <button type="submit" name="order_confirm" class="btn btn-default">
                          Confirm booking
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </main>
      