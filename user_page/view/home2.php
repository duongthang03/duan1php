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
              <h3>FILTER</h3>
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
                      <?php
                      $list_diadiem = loadall_diadiem();
                      foreach ($list_diadiem as $key => $value) {
                        extract($value);
                        echo '
                                      <li>
                                        <a href="?act=diadiem&diadiem=' . $id_diadiem . '">
                                          <span class="ico-holder">
                                            <span class="icon-asia"></span>
                                          </span>
                                          <span class="text">' . $tendiadiem . '</span>
                                        </a>
                                      </li>
                                  ';
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
              <?= $row['total'] ?> TRIPS MATCHES YOUR SEARCH
            </strong>
            <div class="layout-holder">
              <div class="layout-action">
                <a href="#" class="link link-list"><span class="icon-list"></span></a>
                <a href="#" class="link link-grid active"><span class="icon-grid"></span></a>
              </div>
              <div class="select-holder">
                <div class="select-col">
                  <select class="filter-select sort-select">
                    <option value="sort">Sort Order</option>
                    <option value="sort">Price</option>
                    <option value="sort">Recent</option>
                    <option value="sort">Popular</option>
                  </select>
                </div>
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
              $limit = 3;
              $start = ($page - 1) * $limit;
              $sql1 = "SELECT * from tour 
                              join diadiem on tour.id_diadiem = diadiem.id_diadiem 
                              join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi 
                              order by tour.id_tour desc 
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
              foreach ($list_tour as $key => $value) {
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
                        <footer>
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
                          <span class="price">Chỉ từ <span>' . $gia . ' VND</span></span>
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
                echo "<li><a href='index.php&page=" . $i . "'>" . $i . "</a></li>";
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
      <h2 class="text-center text-uppercase">RECENTLY VIEWED</h2>
      <div class="row">
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space">
              <a href="#">Everest Basecamp Trek</a>
            </h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-31.jpg" height="210" width="250" alt="image description" />
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
        </article>
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space">
              <a href="#">Everest Basecamp Trek</a>
            </h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-32.jpg" height="210" width="250" alt="image description" />
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
        </article>
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space">
              <a href="#">Everest Basecamp Trek</a>
            </h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-33.jpg" height="210" width="250" alt="image description" />
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
        </article>
        <article class="col-sm-6 col-md-3 article">
          <div class="thumbnail">
            <h3 class="no-space">
              <a href="#">Everest Basecamp Trek</a>
            </h3>
            <strong class="info-title">Everest Region, Nepal</strong>
            <div class="img-wrap">
              <img src="img/listing/img-34.jpg" height="210" width="250" alt="image description" />
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
        </article>
      </div>
    </div>
  </aside>
</main>
</div>