<?php
session_start();
include "../../model/pdo.php";
include "../../model/diadiem.php";
include "../../model/khuvuichoi.php";
include "../../model/tour.php";
include "../../model/donhang.php";
include "../../model/nguoidung.php";
include "../../model/binhluan.php";
include "../../model/thongke.php";
?>
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
                    ['Time', 'Doanh Thu'],
                    <?php
                    echo "['', 0],";
                    $thang3 = intval($_SESSION['thang3']);
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
                   