<?php
$conn = pdo_get_connection();
$sqlm = "SELECT COUNT(*) AS total FROM tour";
$resultm = $conn->query($sqlm);
$row = $resultm->fetch();
?>
<!-- main container -->
<main id="main">
  <!-- content with sidebar -->
  <div class="bg-gray content-with-sidebar grid-view-sidebar">
    <div class="container">
      <div id="two-columns" class="row">
        <!-- sidebar -->
        <aside id="sidebar" class="col-md-4 col-lg-3 sidebar sidebar-list">
          <div class="sidebar-holder">
            <header class="heading">
              <h3>Địa điểm</h3>
            </header>
            <div class="accordion">
              <div class="accordion-group">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" href="#collapse1" aria-expanded="true"
                      aria-controls="collapse1">Chọn địa điểm</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                  <div class="panel-body">
                    <ul class="side-list region-list hovered-list">
                      <li>
                        <a href="index.php?act=all_diadiem">
                          <span class="ico-holder">
                            <span class="icon-asia"></span>
                          </span>
                          <span class="text">Tất cả địa điểm</span>
                        </a>
                      </li>
                      <?php
                      $list_diadiem = loadall_diadiem();
                      foreach ($list_diadiem as $key => $value) {
                        extract($value);
                        ?>
                        <li>
                          <a href="index.php?act=diadiem&diadiem=<?= $id_diadiem ?>">
                            <span class="ico-holder">
                              <span class="icon-asia"></span>
                            </span>
                            <span class="text">
                              <?= $tendiadiem ?>
                            </span>
                          </a>
                        </li>
                        <?php
                      }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <div class="accordion-group">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a
                              role="button"
                              data-toggle="collapse"
                              href="#collapse5"
                              aria-expanded="true"
                              aria-controls="collapse5"
                              >Price range</a
                            >
                          </h4>
                        </div>
                        <div
                          id="collapse5"
                          class="panel-collapse collapse in"
                          role="tabpanel"
                        >
                        </div>
                          <div class="panel-body">
                            <div id="slider-range"></div>
                            <input
                              type="text"
                              id="amount"
                              readonly
                              class="price-input"
                            />
                            <div id="ammount" class="price-input"></div> -->
              <!-- </div> -->
              <!-- <div id="collapse5" class="panel-collapse collapse in" role="tabpanel">
                          <div class="panel-body">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 35.6667%; width: 39.9667%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 35.6667%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 75.6333%;"></span></div>
                            <input type="text" id="amount" readonly="" class="price-input">
                            <div id="ammount" class="price-input"></div>
                          </div> -->

              <!-- </div>
                      </div> -->
            </div>
          </div>
        </aside>
        <div id="content" class="col-md-8 col-lg-9">
          <div class="filter-option filter-box">
            <strong class="result-info">
              TOP VÉ MỚI
            </strong>
            <div class="layout-holder">
              <div class="layout-action">
                <a class="link link-grid active"><span class="icon-grid"></span></a>
              </div>
              <div class="select-holder">
                <div class="select-col">
                  <select class="filter-select sort-select price_href">
                    <option value="sort">Lọc vé</option>
                    <option value="<?= $_GET['page'] ?? 1 ?>&thapdencao">Thấp đến cao</option>
                    <option value="<?= $_GET['page'] ?? 1 ?>&caodenthap">Cao đến thấp</option>
                  </select>
                </div>

                <script>
                  let price_href = document.querySelector('.price_href');

                  price_href.addEventListener('change', function () {
                    window.location.href = `index.php?act=home&page=${price_href.value}`;
                  })
                </script>
              </div>
            </div>
          </div>
          <div class="content-holder content-sub-holder">
            <div class="row db-3-col">
              <?php

              if (isset($_GET['page'])) {
                $page = $_GET['page'];
              } else {
                $page = 1;
              }
              $product = "tour.id_tour desc";

              if (isset($_GET['thapdencao'])) {
                $product = "tour.gia asc";
              }

              if (isset($_GET['caodenthap'])) {
                $product = "tour.gia desc";
              }

              $limit = 6;
              $start = ($page - 1) * $limit;
              $sql1 = "SELECT * from tour 
                              join diadiem on tour.id_diadiem = diadiem.id_diadiem 
                              join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi 
                              order by $product 
                              LIMIT $start, $limit";
              $result1 = pdo_query($sql1);
              $conn = pdo_get_connection();
              $sql = "SELECT COUNT(*) AS total FROM tour";
              $result = $conn->query($sql);
              $row = $result->fetch();
              $total_records = $row['total'];
              $total_pages = ceil($total_records / $limit);
              ?>
              <?php
              $i = 0;
              foreach ($result1 as $key => $value) {
                extract($value);
                $hinh = $img_path . $img;
                $linksp = "?act=chitiettour&id_tour=" . $id_tour;
                $text = $mota;
                $limit2 = 1;
                $ellipsis = " . . .";
                $lines = substr_count($text, "\n") / 9;
                $shortText = implode("\n", array_slice(explode("\n", $text), 0, $limit2));
                $motaN = $shortText . $ellipsis;
                $gia = number_format($gia, 0, '', '.');
                echo '
                        <article class="col-md-6 col-lg-4 article has-hover-s1 thumb-full">
                        <div class="thumbnail">
                        <div class="img-wrap">
                          <img
                            src="' . $hinh . '"
                            height="228"
                            width="350"
                            alt="image description"
                          />
                        </div>
                        <h3 class="small-space">
                          <a href="' . $linksp . '">' . $tenkhuvuichoi . '</a>
                        </h3>
                        <span class="info"
                          >' . $tendiadiem . '</span
                        >
                        <aside class="meta">
                          <span class="country">
                            <span class="icon-world"> </span>' . $gia . ' VND
                          </span>
                          <span class="activity">
                            <span class="icon-acitivities"> </span>
                            ' . $soluong . ' vé
                          </span>
                        </aside>
                        <p>
                          ' . $motaN . '
                        </p>
                        <a href="' . $linksp . '" class="btn btn-default"
                          >Xem thêm</a
                        >
                        <footer style="    display: flex; flex-direction: column;">
                          <ul class="social-networks">
                            <li>
                              <a href="#"
                                ><span class="icon-twitter"></span
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><span class="icon-google-plus"></span
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><span class="icon-facebook"></span
                              ></a>
                            </li>
                            <li>
                              <a href="#"
                                ><span class="icon-linkedin"></span
                              ></a>
                            </li>
                          </ul>
                          <span style="font-weight: 900;font-style: normal;font-size: 1.286em;margin-top: -5px;"> 
                          Giá <span>' . $gia . ' VND</span>
                          </span>
                        </footer>
                      </div>
                    </article>
                        ';
                if ($i == 6) {
                  break;
                }
              }
              ?>
            </div>
          </div>
          <!-- pagination wrap -->
          <nav class="pagination-wrap">
            <div class="btn-prev">
              <a href="#" aria-label="Previous">
                <span class="icon-angle-right"></span>
              </a>
            </div>
            <ul class='pagination'>

              <?php
              for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li><a href='index.php?act=home&page=" . $i . "'>" . $i . "</a></li>";
              }
              ?>
            </ul>
            <div class="btn-next">
              <a href="#" aria-label="Previous">
                <span class="icon-angle-right"></span>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- recent block -->
  <aside class="recent-block recent-list recent-wide-thumbnail">
    <div class="container">
      <h2 class="text-center text-uppercase">Vé Tour Mới Nhất</h2>
      <?php
      if (isset($_GET['phuquoc'])) {
        echo '
      <script>
      window.onload=function(){
        event.preventDefault();

        var search = "hạ long";
        var khuvuc = document.getElementsByClassName("khuvuc");
        for (var i = 0; i < khuvuc.length; i++) {
            var khuvucInfo = khuvuc[i].textContent.toLowerCase();
            if (khuvucInfo.includes(search)) {
            khuvuc[i].style.display = "block";
            } else {
            khuvuc[i].style.display = "none";
            }
        }
      }
        </script>
      ';
      }
      ?>
      <div class="content-block content-spacing">
        <div class="container">
          <div class="content-holder">
            <div class="row db-3-col">

              <?php
              $i = 0;
              foreach ($list_tour_limit as $key => $value) {
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
                echo '<article class="col-sm-6 col-md-4 article has-hover-s3 khuvuc" >
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
            </div>
  </aside>
</main>
</div>