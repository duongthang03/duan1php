<div class="page-wrapper">
    <h1>Thông kê</h1>
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
            </div>
            <p></p>
        </form>
    </div>
</div>




</div>

                        </div>
                    </div>
                </div>
            </div>
</div>    
<!-- ///////////////-->
