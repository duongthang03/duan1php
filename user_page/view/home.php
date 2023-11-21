<!-- main container -->
<main id="main">
  <section class="content-block bg-white">
    <div class="container">
      <header class="content-heading">
        <h2 class="main-heading">Tour thịnh hành</h2>
        <span class="main-subtitle">Thỏa mãn mong đợi phiêu lưu của bạn</span>
        <div class="seperator"></div>
      </header>
    </div>
  </section>

  <!-- article list holder -->
  <div class="content-block content-spacing">
    <div class="container">
      <div class="content-holder">
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
            // } else {
            //   $motaN = $text;
            // }
            // echo $text;
            // echo $shortText;
            $gia = number_format($gia, 0, '', '.');
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
          <?php
          // $i=0;
          // foreach ($dssp as $sp){
          //     extract($sp);
          //     $hinh =  $img_path.$img;
          //     $linksp="index.php?act=sanphamct&idsp=".$id;
          
          //     if(($i==2)||($i==5)||($i==8)){
          //         $mr="";
          //     }else{
          //         $mr="mr";
          //     }
          //     echo '<div class="box_items '.$mr.'">
          //         <div class="box_items_img">
          //         <img src="'.$hinh.'" alt="">
          //         <div class="add" href="">ADD TO CART</div>
          //     </div>
          //     <a class="item_name" href="'. $linksp .'">'.$name.'</a>
          //     <p class="price">$'.$price.'</p>
          
          // </div>';
          //         $i+=1;
          //     }
          ?>

          <!-- <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article>

          <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article>

          <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article>

          <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article>

          <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article>

          <article class="col-sm-6 col-md-4 article has-hover-s3">
            <div class="img-wrap">
              <a href="#">
                <img src="img/listing/img-01.jpg" height="215" width="370" alt="image description">
              </a>
              <div class="img-caption text-uppercase">
                Hà Nội
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
                  <span class="price">giá<span>$2749</span></span>
                  <a href="#" class="link-more">Xem chi tiết</a>
                </div>
              </div>
            </div>
            <h3><a href="#">Vé vui chơi</a></h3>
          </article> -->

        </div>
      </div>
    </div>
  </div>

  <!-- special block -->
  <aside class="special-block">
    <div class="container">
      <p class="special-text">
        Nhận giảm giá đặc biệt.
        <strong>Call <a href="tel:157757525">+(84)399325529</a></strong>
      </p>
    </div>
  </aside>


  <!-- couter block -->
  <aside class="count-block" style="margin-top: 30px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-md-3 block-1">
          <div class="holder">
            <span class="icon icon-step"></span>
            <span class="info"><span class="counter">300</span>+</span>
            <span class="txt">Tour vui chơi</span>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 block-2">
          <div class="holder">
            <span class="icon icon-fish-jumping"></span>
            <span class="info"><span class="counter">100</span>+</span>
            <span class="txt">Địa điểm hấp dẫn</span>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 block-3">
          <div class="holder">
            <span class="icon icon-tree"></span>
            <span class="info"><span class="counter">10</span>+</span>
            <span class="txt">Năm kinh nghiệm</span>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 block-4">
          <div class="holder">
            <span class="icon icon-duration"></span>
            <span class="info"><span class="counter">100000</span>+</span>
            <span class="txt">Khách hàng tin tưởng</span>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <!-- partner list -->
  <article class="partner-block">
    <div class="container">
      <header class="content-heading">
        <h2 class="main-heading">Cộng tác viên</h2>
        <div class="seperator"></div>
      </header>
      <div class="partner-list" id="partner-slide">
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-travelagancy.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-around-world.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-tourist.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-tourist-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-adventure.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-adventure-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-around-world.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-travelagancy.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-adventure.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-adventure-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-around-world.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-around-world-hover.svg" alt="image description" />
          </a>
        </div>
        <div class="partner">
          <a href="#">
            <img width="130" src="img/logos/logo-travelagancy.svg" alt="image description" />
            <img class="hover" width="130" src="img/logos/logo-travelagancy-hover.svg" alt="image description" />
          </a>
        </div>
      </div>
    </div>
  </article>
</main>
</div>