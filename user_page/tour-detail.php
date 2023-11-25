<?php
  // session_start();
  // echo $_SESSION['id_nguoidung'];
  $id_nguoidung = $_SESSION['id_nguoidung'];
  // echo $id_nguoidung;
  if(isset($_GET['add_to_cart'])){
      insert_cart($id_tour, $id_nguoidung);
  }
?>
<!-- search form -->
<!-- <form class="search-form" action="#">
            <fieldset>
              <a href="#" class="search-opener hidden-md hidden-lg">
                <span class="icon-search"></span>
              </a>
              <div class="search-wrap">
                <a href="#" class="search-opener close">
                  <span class="icon-cross"></span>
                </a>
                <div class="trip-form trip-form-v2 trip-search-main">
                  <div class="trip-form-wrap">
                    <div class="holder">
                      <label>Departing</label>
                      <div class="select-holder">
                        <div
                          id="datepicker"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label>Returning</label>
                      <div class="select-holder">
                        <div
                          id="datepicker1"
                          class="input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <input class="form-control" type="text" readonly />
                          <span class="input-group-addon"
                            ><i class="icon-drop"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-region">Select Region</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 region"
                          name="region"
                          id="select-region"
                        >
                          <option value="select">Africa</option>
                          <option value="select">Arctic</option>
                          <option value="select">Asia</option>
                          <option value="select">Europe</option>
                          <option value="select">Oceanaia</option>
                          <option value="select">Polar</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="select-activity">Select Activity</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 acitvity"
                          name="activity"
                          id="select-activity"
                        >
                          <option value="Holiday Type">Holiday Type</option>
                          <option value="Holiday Type">Beach Holidays</option>
                          <option value="Holiday Type">Weekend Trips</option>
                          <option value="Holiday Type">Summer and Sun</option>
                          <option value="Holiday Type">Water Sports</option>
                          <option value="Holiday Type">Scuba Diving</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <label for="price-range">Price Range</label>
                      <div class="select-holder">
                        <select
                          class="trip-select trip-select-v2 price"
                          name="activity"
                          id="price-range"
                        >
                          <option value="Price Range">Price Range</option>
                          <option value="Price Range">$1 - $499</option>
                          <option value="Price Range">$500 - $999</option>
                          <option value="Price Range">$1000 - $1499</option>
                          <option value="Price Range">$1500 - $2999</option>
                          <option value="Price Range">$3000+</option>
                        </select>
                      </div>
                    </div>
                    <div class="holder">
                      <button class="btn btn-trip btn-trip-v2" type="submit">
                        Find Tours
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </form> -->
<!-- </header> -->
<!-- main container -->
<main id="main">
  <!-- main tour information -->
  <?php extract($tour) ?>
  <section class="container-fluid trip-info">
    <div class="same-height two-columns row">
      <div class="height col-md-6">
        <!-- top image slideshow -->
        <div id="tour-slide">
          <?php
          extract($gallery);
          $i = 0;
          foreach ($gallery as $key => $value) {
            extract($value);
            $Imgg = '../gallery/' . $anh;
            echo '
                          <div class="slide">
                            <div class="bg-stretch">
                              <img
                                src="' . $Imgg . '"
                                alt="image descriprion"
                                height="1104"
                                width="966"
                              />
                            </div>
                          </div>';
            $i += 1;
          }
          ?>
        </div>
      </div>
      <?php
        $gia1 = number_format($gia, 0, '', '.');
      ?>
      <div class="height col-md-6 text-col">
        <div class="holder">
          <h1 class="small-size">
            <?= $tenkhuvuichoi ?>
          </h1>
          <div class="price">giá <strong>
              <?= $gia1 ?> VNĐ
            </strong></div>
          <div class="description">
            <p>
              <?= $mota ?>
            </p>
          </div>
          <ul class="reviews-info">
            <li>
              <div class="info-left">
                <strong class="title">Đánh giá</strong>
              </div>
              <div class="info-right">
                <div class="star-rating">
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <!-- <span class="disable"
                            ><span class="icon-star"></span
                          ></span> -->
                </div>
              </div>
            </li>
            <!-- <li>
                      <div class="info-left">
                        <strong class="title">Vacation Style</strong>
                        <span class="value">Adult Group</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-hiking"></span>
                          </li>
                          <li>
                            <span class="icon icon-mount"></span>
                          </li>
                          <li>
                            <span class="icon icon-camping"></span>
                          </li>
                        </ul>
                        <span class="value">Camping Trek</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Activity Level</strong>
                        <span class="value">Quite Tough</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-level3"></span>
                          </li>
                          <li>
                            <span class="icon icon-level5"></span>
                          </li>
                          <li>
                            <span class="icon icon-level7"></span>
                          </li>
                        </ul>
                        <span class="value">9/10</span>
                      </div>
                    </li>
                    <li>
                      <div class="info-left">
                        <strong class="title">Group Size</strong>
                        <span class="value">Medium Grougs</span>
                      </div>
                      <div class="info-right">
                        <ul class="ico-list">
                          <li>
                            <span class="icon icon-group-small"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-medium"></span>
                          </li>
                          <li>
                            <span class="icon icon-group-large"></span>
                          </li>
                        </ul>
                        <span class="value">6/10</span>
                      </div>
                    </li> -->
          </ul>
          <div class="btn-holder">
            <a href="?add_to_cart" class="btn btn-lg btn-info">ĐẶT NGAY</a>
          </div>
          <ul class="social-networks social-share">
            <li>
              <a href="#" class="facebook">
                <span class="ico">
                  <span class="icon-facebook"></span>
                </span>
                <span class="text">Share</span>
              </a>
            </li>
            <li>
              <a href="#" class="twitter">
                <span class="ico">
                  <span class="icon-twitter"></span>
                </span>
                <span class="text">Tweet</span>
              </a>
            </li>
            <li>
              <a href="#" class="google">
                <span class="ico">
                  <span class="icon-google-plus"></span>
                </span>
                <span class="text">+1</span>
              </a>
            </li>
            <li>
              <a href="#" class="pin">
                <span class="ico">
                  <span class="icon-pin"></span>
                </span>
                <span class="text">Pin it</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="tab-container">
    <nav class="nav-wrap" id="sticky-tab">
      <div class="container">
        <!-- nav tabs -->
        <ul class="nav nav-tabs text-center" role="tablist">
          <li role="presentation" class="active">
            <a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Thông tin</a>
          </li>

          <li role="presentation">
            <a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Đánh giá</a>
          </li>
          <li role="presentation">
            <a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Ảnh</a>
          </li>
          <li role="presentation">
            <a href="#tab06" aria-controls="tab06" role="tab" data-toggle="tab">Ngày &amp; Giá</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- tab panes -->
    <div class="container tab-content trip-detail">
      <!-- overview tab content -->
      <div role="tabpanel" class="tab-pane active" id="tab01">
        <div class="row">
          <div class="col-md-6" style="width: 100%;">
            <strong class="header-box">Thông tin chi tiết về
              <?= $tenkhuvuichoi ?>
            </strong>
            <div class="detail">
              <textarea style="resize: none; border: none; padding: 5px; width: 100%; background-color: #f8f8f8;"
                cols="75" rows="50">
                        <?= $thongtinchitiet ?>
                      </textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- faq and review tab content -->
      <div role="tabpanel" class="tab-pane" id="tab04">
        <div class="row">
          <div class="col-md-6" style="width: 100%;">
            <div class="header-box">
              <a href="#" class="link-right">Viết bình luận</a>
              <span class="rate-left">
                <strong class="title">Đánh giá tổng quan</strong>
                <span class="star-rating">
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <span><span class="icon-star"></span></span>
                  <!-- <span class="disable"
                            ><span class="icon-star"></span
                          ></span> -->
                </span>
              </span>
            </div>
            <div class="comments reviews-body">
              <div class="comment-holder">

                <div class="comment-slot">
                  <div class="thumb">
                    <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description" /></a>
                  </div>
                  <div class="text">
                    <header class="comment-head">
                      <div class="left">
                        <strong class="name">
                          <a href="#">Cleona Torez - Spain</a>
                        </strong>
                        <div class="meta">Reviewed on 14/1/2016</div>
                      </div>
                    </header>
                    <div class="des">
                      <p>
                        This is Photoshop's version of Lorem Ipsum.
                        Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh
                        id elit. Duis sed odio sit amet nibh vulputate
                        cursus a sit amet mauris.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="comment-slot">
                  <div class="thumb">
                    <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description" /></a>
                  </div>
                  <div class="text">
                    <header class="comment-head">
                      <div class="left">
                        <strong class="name">
                          <a href="#">Cleona Torez - Spain</a>
                        </strong>
                        <div class="meta">Reviewed on 14/1/2016</div>
                      </div>
                    </header>
                    <div class="des">
                      <p>
                        This is Photoshop's version of Lorem Ipsum.
                        Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh
                        id elit. Duis sed odio sit amet nibh vulputate
                        cursus a sit amet mauris.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="comment-slot">
                  <div class="thumb">
                    <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description" /></a>
                  </div>
                  <div class="text">
                    <header class="comment-head">
                      <div class="left">
                        <strong class="name">
                          <a href="#">Cleona Torez - Spain</a>
                        </strong>
                        <div class="meta">Reviewed on 14/1/2016</div>
                      </div>
                    </header>
                    <div class="des">
                      <p>
                        This is Photoshop's version of Lorem Ipsum.
                        Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh
                        id elit. Duis sed odio sit amet nibh vulputate
                        cursus a sit amet mauris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="link-more text-center">
                <a href="#">Show More Reviews - 75 Reviews</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- gallery tab content -->
      <div role="tabpanel" class="tab-pane" id="tab05">
        <ul class="row gallery-list has-center">
          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

          <li class="col-sm-6">
            <a class="fancybox" data-fancybox-group="group" href="img/gallery/img-10-2.jpg">
              <span class="img-holder">
                <img src="img/gallery/img-10.jpg" height="750" width="450" alt="image description" />
              </span>
              <span class="caption">
                <span class="centered">
                  <strong class="title">Xem chi tiết</strong>
                </span>
              </span>
            </a>
          </li>

        </ul>
      </div>

      <!-- dates and prices tab content -->
      <div role="tabpanel" class="tab-pane" id="tab06">
        <div class="table-container">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    <strong class="date-text">Chọn ngày đi</strong>
                  </th>
                  <th>
                    <strong class="date-text">Trạng thái</strong>
                  </th>
                  <th>
                    <strong class="date-text">Giá</strong>
                  </th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <input type="date" name="ngaydat" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <?php if ($trangthai == 0) {
                          $trangthai2 = "Available";
                        } else {
                          $trangthai2 = "Not available";
                        }
                        ?>
                        <?= $trangthai2 ?>
                      </div>
                    </div>
                  </td>
                  <?php $gia = number_format($gia); ?>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <?= $gia ?> VND
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="middle">
                        <!-- <a href="?act=add_to_cart" class="btn btn-default">BOOK NOW</a> -->
                        <a href="?act=add_to_cart&id_tour=<?= $id_tour ?>"><button class="btn btn-default"
                            onclick="showAlert()">BOOK NOW</button></a>
                        <script>
                          function showAlert() {
                            alert('Đã thêm vào giỏ hàng');
                          }
                        </script>
                        <!-- <p><?= $id_tour ?></p> -->
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- recent block -->
  <aside class="recent-block recent-gray recent-wide-thumbnail">
    <div class="container">
      <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
      <div class="row">
        <?php
        $i = 0;
        foreach ($list_tour as $key => $value) {
          extract($value);
          $hinh = $img_path . $img;
          $linksp = "?act=chitiettour&id_tour=" . $id_tour;
          $text = $mota;
          $limit = 1;
          $ellipsis = " . . .";
          $lines = substr_count($text, "\n") / 3;
          // if($lines > $limit){
          $shortText = implode("\n", array_slice(explode("\n", $text), 0, $limit));
          $motaN = $shortText . $ellipsis;
          // } else {
          //   $motaN = $text;
          // }
          // echo $text;
          // echo $shortText;
        
          echo '<article class="col-sm-6 col-md-4 article has-hover-s3">
                    <div class="img-wrap">
                      <a href="?act=chitiettour&id_tour=' . $id_tour . '">
                        <img src="' . $hinh . '" height="215" width="370" alt="image description">
                      </a>
                      <div class="img-caption text-uppercase">
                        ' . $tendiadiem . '
                      </div>
                      <div class="hover-article">
                        <div class="star-rating">
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span><span class="icon-star"></span></span>
                          <span class="disable"><span class="icon-star"></span></span>
                        </div>
                        <div class="info-footer">
                          <span class="price">Giá<span>' . $gia . ' VND</span></span>
                          <a href="?act=chitiettour&id_tour=' . $id_tour . '" class="link-more">Xem chi tiết</a>
                        </div>
                      </div>
                    </div>
                    <h3 style="color: red;"><a style="color: red; font-weight: bold" href="#">Vé ' . $tenkhuvuichoi . ' // ' . $tendiadiem . '</a></h3>
                    <h3 class="mota" style=""><a class="mota" href="#">' . $motaN . '</a></h3>
                  </article>';
          $i++;
          if ($i == 20) {
            break;
          }
          // max-height: 3.3em; overflow: hidden
        }

        ?>



        <!-- <article class="col-sm-6 col-md-3 article">
                  <div class="thumbnail">
                    <h3 class="no-space">
                      <a href="#">Everest Basecamp Trek</a>
                    </h3>
                    <strong class="info-title">Everest Region, Nepal</strong>
                    <div class="img-wrap">
                      <img
                        src="img/listing/img-34.jpg"
                        height="210"
                        width="250"
                        alt="image description"
                      />
                    </div>
                    <footer>
                      <div class="sub-info">
                        <span>5 Days</span>
                        <span>$299</span>
                      </div>
                      <ul class="ico-list">
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-hiking"></span>
                            <span class="popup"> Hiking </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-mountain"></span>
                            <span class="popup"> Mountain </span>
                          </a>
                        </li>
                        <li class="pop-opener">
                          <a href="#">
                            <span class="icon-level5"></span>
                            <span class="popup"> Level 5 </span>
                          </a>
                        </li>
                      </ul>
                    </footer>
                  </div>
                </article> -->
      </div>
    </div>
  </aside>
</main>
</div>