<?php
  // session_start();
  // echo $_SESSION['id_nguoidung'];
  // $id_nguoidung = $_SESSION['id_nguoidung'];
  // echo $id_nguoidung;
  // if(isset($_GET['add_to_cart'])){
  //     insert_cart($id_tour, $id_nguoidung);
  // }
?>
<main id="main">
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
                </div>
              </div>
            </li>
          </ul>
          <!-- <?php
            // $date3 = date("m-d-Y");
            // $datePF = date('jS M Y', strtotime($date3));
            // echo $datePF;
          ?>
          <div class="description">
          <input type="date" class="ngaydat" value="<?= $date3 ?>" name="ngaydat" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d', strtotime('+10 days')); ?>">
          </div>
          <div class="info-left">
                  <strong class="title">Chọn ngày</strong>
                </div>
                <div class="info-right">
                  <div class="star-rating">
                    <input type="date" class="ngaydat" name="ngaydat" min="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d', strtotime('+10 day')); ?>">
                  </div>
                </div> -->
          <div class="btn-holder">
            <!-- <a href="?act=add_to_cart&id_tour=<?= $id_tour ?>" class="btn btn-lg btn-info">ĐẶT NGAY</a> -->
            <button data-id="<?= $id ?>" class="btn btn-lg btn-info" onclick="addToCart(<?= $id_tour ?>, '<?= $tenkhuvuichoi?>', <?= $gia ?>)">Thêm vào giỏ hàng</button>
          </div>
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
          <script>
            let totalProduct = document.getElementById('totalProduct');
            function addToCart(id_tour, tenkhuvuichoi, gia) {
                console.log(id_tour, tenkhuvuichoi, gia);
                // Sử dụng jQuery
                $.ajax({
                    type: 'POST',
                    // Đường dẫ tới tệp PHP xử lý dữ liệu
                    url: './view/addToCart.php',
                    data: {
                        id: id_tour,
                        name: tenkhuvuichoi,
                        price: gia
                    },
                    success: function(response) {
                        totalProduct.innerText = response;
                        alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
          </script>
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
            <a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Bình Luận</a>
          </li>
          <li role="presentation">
            <a href="#tab05" aria-controls="tab05" role="tab" data-toggle="tab">Ảnh</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- tab panes -->
    <div class="container tab-content trip-detail">
      <!-- overview tab content -->
      <div role="tabpanel" class="tab-pane active" id="tab01">
        <div class="row" style="width: 100%; text-align:center; display: flex; justify-content: center">
          <div class="col-md-6" style="width: 70%;">
            <strong class="header-box">Thông tin chi tiết về
              <?= $tenkhuvuichoi ?>
            </strong>
            <div class="detail">
              <textarea style="resize: none; border: none; padding: 5px; width: 100%; background-color: #f8f8f8;"
                cols="75" rows="<?php $info = $thongtinchitiet;
                                $length = strlen($info);
                                $length = ceil($length /55);
                                echo $length; ?>">
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
                <?php
                  foreach($list_binhluan as $binhluan) {
                    extract($binhluan);
                    ?>
                      <div class="comment-slot">
                        <div class="thumb">
                          <a href="#"><img src="img/thumbs/img-05.jpg" height="50" width="50" alt="image description" /></a>
                        </div>
                        <div class="text">
                          <header class="comment-head">
                            <div class="left">
                              <strong class="name">
                                <a href="#"><?= $username ?></a>
                              </strong>
                              <div class="meta"><?= date("d-m-Y", strtotime($ngaybinhluan)) ?></div>
                            </div>
                          </header>
                          <div class="des">
                            <p>
                              <?= $noidung ?>
                            </p>
                          </div>
                        </div>
                      </div>
                    <?php
                  }
                ?>
                <?php
                  if(isset($_SESSION['username'])) {
                    ?>
                      <form action="index.php?act=chitiettour" method="post">
                        <div class="comment-slot">
                          <input type="hidden" name="id" value="<?= $id_tour ?>">
                          <textarea name="noidung" style="width: 100%; outline: none" placeholder="Viết bình luận của bạn..." id="" cols="30" rows="10"></textarea><br>
                          <input type="submit" name="binhluan" value="Bình luận">
                        </div>
                      </form>
                    <?php
                  } else {
                    ?>
                      <div class="comment-slot">
                        Vui lòng đăng nhập để sử dụng chức năng bình luận.
                      </div>
                    <?php
                  }
                ?>
                
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
  <!-- recent block -->
  <aside class="recent-block recent-gray recent-wide-thumbnail">
    <div class="container">
      <h2 class="text-center text-uppercase">Sản phẩm mới nhất</h2>
      <div class="row db-3-col">
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
          ?>
              <article class="col-sm-6 col-md-4 article has-hover-s3">
                <div class="img-wrap">
                  <a href="?act=chitiettour&id_tour=' . $id_tour . '">
                    <img src="<?= $hinh ?>" height="215" width="370" alt="image description">
                  </a>
                  <div class="img-caption text-uppercase">
                    <?= $tendiadiem ?>
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
                      <span class="price">Giá<span><?= $gia ?> VND</span></span>
                      <a href="?act=chitiettour&id_tour=<?= $id_tour ?>" class="link-more">Xem chi tiết</a>
                    </div>
                  </div>
                </div>
                <h3 style="color: red;"><a style="color: red; font-weight: bold" href="#">Vé <?= $tenkhuvuichoi ?> // <?= $tendiadiem ?></a></h3>
                <h3 class="mota" style=""><a class="mota" href="#"><?= $motaN ?></a></h3>
              </article>
          <?php
          $i++;
          if ($i == 20) {
            break;
          }
          // max-height: 3.3em; overflow: hidden
        }

        ?>

      </div>
    </div>
  </aside>
</main>
</div>