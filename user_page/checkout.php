<?php
  extract($one_cart);
  echo $id_giohang;
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
            <form class="booking-form" action="?act=confirmation&id_giohang=<?=$id_giohang?>" method="POST">
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
                            <label for="name">First Name</label>
                            <input type="text" id="name" class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="lname">Last Name</label>
                            <input
                              type="text"
                              id="lname"
                              class="form-control"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="hold">
                        <label for="cname">Company Name</label>
                        <input type="text" id="cname" class="form-control" />
                      </div>
                      <div class="hold">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" />
                      </div>
                      <div class="hold">
                        <label for="city">City / Town</label>
                        <input type="text" id="city" class="form-control" />
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="em">Email address</label>
                            <input type="email" id="em" class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="hold">
                            <label for="phn">Phone</label>
                            <input type="text" id="phn" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <ul class="option">
                        <li>
                          <header class="title">
                            <label class="custom-radio">
                              <input type="radio" name="pay" />
                              <span class="check-input"></span>
                              <span class="check-label">Check Payment</span>
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
                              <input type="radio" name="pay" />
                              <span class="check-input"></span>
                              <span class="check-label">Paypal Payment</span>
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
                  </div>
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
                              <th>Total Price</th>
                            </tr>
                          </thead>
                          <?php
                            // $tongtien = $tongtien * 1000;
                            $tong1 = number_format($tongtien, 0, '', '.');
                          ?>
                                <tbody>
                                  <tr>
                                    <td>
                                      <span class="title"
                                        ><?=$tenkhuvuichoi?> &emsp;<span class="amount"
                                          >x&emsp; <?=$soluong_cart?> tickets</span
                                        ></span
                                      >
                                      <time datetime="2016-09-29"
                                        >Booking Date: &emsp; <?=$ngaydat?></time
                                      >
                                    </td>
                                    <td>
                                      <span class="amount"><?=$tong1?> VND</span>
                                    </td>
                                  </tr>
                                </tbody>
                            <?php
                              // $TotalT += $tongtien;
                            ?>
                          <!-- <tbody>
                            <tr>
                              <td>
                                <span class="title"
                                  >Everest Trekking &emsp;<span class="amount"
                                    >x&emsp; 3</span
                                  ></span
                                >
                                <time datetime="2016-09-29"
                                  >Booking Date:&emsp; 14th Jan 2016</time
                                >
                              </td>
                              <td>
                                <span class="amount">$2,999</span>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span class="title"
                                  >Bungee Jumping &emsp;<span class="amount"
                                    >x&emsp; 2</span
                                  ></span
                                >
                                <time datetime="2016-09-29"
                                  >Booking Date:&emsp; 14th Jan 2016</time
                                >
                              </td>
                              <td>
                                <span class="amount">$1,999</span>
                              </td>
                            </tr>
                          </tbody> -->
                          <tfoot>
                            <!-- <tr>
                              <td>Total Price</td>
                              <td><?=$TotalT?></td>
                            </tr> -->
                          </tfoot>
                        </table>
                        <button type="submit" class="btn btn-default">
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
      