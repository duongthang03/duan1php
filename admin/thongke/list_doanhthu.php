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
                            <table border=2 style="width: 100%">
                                <tr>
                                    <th>STT</th>
                                    <th>Số lượng vé đã bán</th>
                                    <th>Ngày bán</th>
                                    <th>Tổng tiền thu về</th>
                                </tr>
                                <?php
                                foreach ($list_thongke_doanhthu as $key => $value) {
                                extract($value);
                                $ngay = date('d/m/Y');
                                ?>
                                <tr>
                                    <td><?php echo $key += 1 ?></td>
                                    <td><?php echo $soluong_ngay ?></td>
                                    <td><?php echo $ngay ?></td>
                                    <td><?php echo number_format($tongtien_ngay, 0, '', '.') ?> VND</td>
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
            $list_thongke_doanhthu = load_thongke_doanhthu();
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
          ['Time', 'Doanh Thu'],
          <?php
          $list_thongke_doanhthu = load_thongke_doanhthu();
          foreach ($list_thongke_doanhthu as $thongke) {
            extract($thongke);
            $ngay1 = strtotime($ngay);
            $day = date('d/m/Y', $ngay1);
            echo "['$day', $tongtien_ngay],";
          }
          ?>
        ]);

        // Set Options
        const options = {
            title: 'BIỂU ĐỒ SỐ DOANH THU',
            is3D: true,
            legend: { position: 'none' },
            width: 600,
            height: 400,
            bars: 'vertical', 
            colors: ['#1b9e77'], 
        };

        // Draw
        const chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
        chart.draw(data, options);

      }
    </script>

        </div>
        </div>

</div>

                        </div>
                    </div>
                </div>

