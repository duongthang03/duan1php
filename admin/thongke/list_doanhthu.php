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
                                // $ngay = date('d/m/Y');
                                $ngay1 = strtotime($ngay);
                                $day = date('d/m/Y', $ngay1);
                                ?>
                                <tr>
                                    <td><?php echo $key += 1 ?></td>
                                    <td><?php echo $soluong_ngay ?></td>
                                    <td><?php echo $day ?></td>
                                    <td><?php echo number_format($tongtien_ngay, 0, '', '.') ?> VND</td>
                                </tr>
                                <?php
                                }
                               
                                ?>
                            </table>
                        <p></p>
                        <div class="" id="load" style="width: 100%; display: flex; flex-wrap: none">
                            <!-- <input class="" id="show"  type="button" value="XEM BIỂU ĐỒ"> -->
                            <div>
                                <h4>Biểu đồ</h4>
                                <select onchange="reload()" id="load2">
                                    <option value="<?= $_SESSION['thang'] ?>" selected>Tháng <?= $_SESSION['thang'] ?></option>
                                    <?php
                                    for($i = 1; $i <= 12; $i++){
                                        echo '<option value="'.$i.'">Tháng '.$i.'</option>';
                                    }
                                    ?>
                                </select>
                                <div id="myChart" style="width:49%; height: auto; align-items: center; display: block">
                                </div>
                            </div>
                        
                            <div>
                                <h4>Biểu đồ</h4>
                                <select onchange="reload()" id="load3">
                                    <option value="<?= $_SESSION['thang3'] ?>" selected>Tháng <?= $_SESSION['thang3'] ?></option>
                                    <?php
                                    for($i = 1; $i <= 12; $i++){
                                        echo '<option value="'.$i.'">Tháng '.$i.'</option>';
                                    }
                                    ?>
                                </select>
                                <div id="myChart2" style="width:49%; height: auto; align-items: center; display: block">
                                </div>
                            </div>
                <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    const data = google.visualization.arrayToDataTable([
                    ['Time', 'Doanh Thu'],
                    <?php
                    //  if($thang < 11 || $thang > 12){
                    //     $thang =11;
                    // }
                    $thang = intval($_SESSION['thang']);
                    $list_thongke_doanhthu_thang = load_thongke_doanhthu_thang((int)$thang);
                    foreach ($list_thongke_doanhthu_thang as $thongke) {
                        extract($thongke);
                        $ngay1 = strtotime($ngay);
                        $day = date('d/m/y', $ngay1);
                        // $day = "Date($ngay1)";
                        echo "['$day', $tongtien_ngay],";
                    }
                    ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'BIỂU ĐỒ SỐ DOANH THU THÁNG <?= $_SESSION['thang'] ?>',
                        is3D: true,
                        legend: { position: 'none' },
                        width: 600,
                        height: 400,
                        bars: 'vertical', 
                        colors: ['#1b9e77'], 
                        hAxis: {
                            title: 'Ngày',
                            minValue: 0
                        },
                        vAxis: {
                            title: 'Doanh Thu $',
                            minValue: 0
                        },
                    };

                    // Draw
                    const chart = new google.visualization.ColumnChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
                </script>
                <script>
                google.charts.setOnLoadCallback(drawChart3);

                function drawChart3() {
                    const data = google.visualization.arrayToDataTable([
                    ['Time', 'Số lượng vé bán ra'], 
                    <?php
                    $thang3 = intval($_SESSION['thang3']);
                    echo "['', 0],";
                    $list_thongke_doanhthu = load_thongke_doanhthu_thang((int)$thang3);
                    foreach ($list_thongke_doanhthu as $thongke) {
                        extract($thongke);
                        $ngay1 = strtotime($ngay);
                        $day = date('d/m/y', $ngay1);
                        echo "['$day', $soluong_ngay],";
                    }
                    ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'BIỂU ĐỒ SỐ LƯỢNG VÉ BÁN RA TRONG THÁNG <?= $_SESSION['thang3'] ?>',
                        is3D: true,
                        legend: { position: 'none' },
                        width: 600,
                        height: 400,
                        bars: 'vertical', 
                        colors: ['#1b9e77'], 
                        hAxis: {
                            title: 'Ngày',
                            minValue: 0
                        },
                        vAxis: {
                            title: 'Số Lượng',
                            minValue: 0
                        },
                    };

                    // Draw
                    const chart = new google.visualization.LineChart(document.getElementById('myChart2'));
                    chart.draw(data, options);

                }
                </script>
                </div>
                    </form>

        </div>
        </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                        </div>
                    </div>
                </div>
    <script>
    function reload() {
        let newThang = document.getElementById('load2').value;
        let newThang3 = document.getElementById('load3').value;
        // let new1 = $('#load2').val();
        // if (new1 <= 0) {
        //     new1 = 1
        // }
        // alert(new1);
        // alert(newThang);
        $.ajax({
            type: 'POST',
            url: './thongke/up.php',
            data: {
                // thang: new1
                thang : newThang,
                thang3 : newThang3
            },
            success: function(response) {
                $.post('./thongke/dup.php', function(data) {
                    $('#load').html(data);
                })
                // $('#myChart').html(response);
                // thang = newThang; // Cập nhật giá trị thang
                // drawChart(); // Gọi lại hàm để vẽ biểu đồ mới
            },
            error: function(error) {
                console.log(error);
            },
        })
    }
    </script>

