<div class="page-wrapper">
    <h1>Thống kê</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thống kê</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 200%">
                    <form class="form-horizontal" action="" method="POST" style="">
                        <div class="card-body" style="width: 100%">
                            <div class="">
                                <select name="id_diadiem" id="">
                                    <option value="0" selected>Show all</option>
                                    <option value="0">Theo số lượng</option>
                                    <option value="0">Theo</option>
                                    <option value="0">Show all</option>
                                    <option value="0">Show all</option>
                                </select>
                                <input type="submit" name="clickOK" value="Go" style="margin: 5px">
                            </div>
                            <table border=2 style="width: 100%">
                                <tr>
                                    <th>ID</th>
                                    <th>ĐỊA ĐIỂM</th>
                                    <th>CÁC KHU VUI CHƠI</th>
                                    <th>GIÁ NHỎ NHẤT</th>
                                    <th>GIÁ LỚN NHẤT</th>
                                    <th>GIÁ TRUNG BÌNH</th>
                                </tr>
                                <?php
                                foreach ($list_thongke as $key => $value) {
                                extract($value);
                                ?>
                                <tr>
                                    <td><?php echo $id_diadiem ?></td>
                                    <td><?php echo $tendiadiem ?></td>
                                    <td><?php echo $soluong ?></td>
                                    <td><?php echo number_format($gia_min, 0, '', '.') ?> VND</td>
                                    <td><?php echo number_format($gia_max, 0, '', '.') ?> VND</td>
                                    <td><?php echo number_format($gia_avg, 0, '', '.') ?> VND</td>
                                </tr>
                                <?php
                                }
                                ?>
                            </table>
                        <p></p>
                        <div class="">
                            <input class="" id="show"  type="button" value="XEM BIỂU ĐỒ">
                        </div>
                        <div id="myChart" style="width:100%; width:80%; height: auto; align-items: center; display: none">
                            </div>
                    </form>

    <!-- </div>
</div> -->
<?php
            $list_thongke = load_thongke();
?>
                        
    <script>
        document.getElementById('show').addEventListener("click", function () {            
                var myChart = document.getElementById('myChart');
                if (myChart.style.display === "block") {
                    myChart.style.display = "none";
                } else {
                    myChart.style.display = "block";
                }
            });
    </script>
    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        const data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng'],
          <?php
          $list_thongke = load_thongke();
          foreach ($list_thongke as $thongke) {
            extract($thongke);
            echo "['$tendiadiem', $soluong],";
          }
          ?>
        ]);

        // Set Options
        const options = {
          title: 'BIỂU ĐỒ SỐ NƠI BÁN VÉ TRONG KHU VỰC',
          is3D: true,
          width: 600,
          height: 500
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

      }
    </script>

        </div>
        </div>

</div>

                        </div>
                    </div>
                </div>

