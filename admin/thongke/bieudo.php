<div class="page-wrapper">
    <h1>Thống kê</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Biểu đồ</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" action="" method="POST" style="">
                                <div class="card-body" style="width: 100%">
  <div class="row2 form_content ">
    <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
    </div>
    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        // Set Data
        // const data = google.visualization.arrayToDataTable([
        //   ['Contry', 'Mhl'],
        //   ['Italy',54.8],
        //   ['France',48.6],
        //   ['Spain',44.4],
        //   ['USA',23.9],
        //   ['Argentina',14.5]
        // ]);
        const data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng'],
          <?php
          foreach ($list_thongke as $thongke) {
            extract($thongke);
            echo "['$tendiadiem', $soluong],";
          }
          ?>
        ]);

        // Set Options
        const options = {
          title: 'BIỂU ĐỒ SỐ NƠI BÁN VÉ TRONG KHU VỰC',
          is3D: true
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
            </div>
</div>    