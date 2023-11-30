<div class="page-wrapper">
    <h1>Quản lý đơn hàng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách đơn hàng</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 200%">
                    <form class="form-horizontal" style="" method="POST">
                        <div class="card-body" style="width: 100%">
                            <input type="text" name="keyw" value="" id="searchInput" style="width: 25%" placeholder="Nhập mã hóa đơn hoặc thông tin cần tìm...">
                            <button onclick="search()"><i class="mdi mdi-account-search"></i>Search</button>
                            <script>
                                function search() {
                                    event.preventDefault();
                                    var searchValue = document.getElementById('searchInput').value.toLowerCase();
                                    var invoices = document.getElementsByClassName('invoice');
                                    for (var i = 0; i < invoices.length; i++) {
                                        var invoiceInfo = invoices[i].textContent.toLowerCase();
                                        if (invoiceInfo.includes(searchValue)) {
                                        invoices[i].style.display = 'table-row';
                                        highlightMatchingText(invoices[i], searchValue);
                                        } else {
                                        invoices[i].style.display = 'none';
                                        }
                                    }
                                }
                                function highlightMatchingText(element, searchValue) {
                                    var regex = new RegExp(searchValue, 'gi');
                                    var text = element.innerHTML;
                                    var newText = text.replace(regex, '<span style="color: red"><u>$&</u></span>'); 
                                    element.innerHTML = newText;
                                }
                            </script>
                            <br>
                                <select name="statusFilter" id="">
                                    <option value="0" selected>Show all</option>
                                    <option value="1">Mới nhất</option>
                                    <option value="2">Đã thanh toán</option>
                                    <option value="3">Chưa thanh toán</option>
                                </select>
                                <input type="submit" name="clickOK" value="Go" style="margin: 5px">
                    </form>
                    <button type="button" onclick="applyFilters()">i</button>
                    <div class="" style=" display: flex; flex-wrap:wrap; justify-content: space-between">
                    <script>
                        function applyFilters() {
                            var statusFilter = document.getElementById('statusFilter').value;
                            if ((statusFilter === '0') || (statusFilter === '1')) {
                            } else if (statusFilter === '2') {

                            } else if (statusFilter === '3') {

                            }
                            }
                            </script>
                            
                    <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $limit = 9;
                        $start = ($page - 1) * $limit;
                        $sql1 = "SELECT SUM(soluong_donhang) AS soluong,
                                        datve.datetime,
                                        datve.id_nguoidung,
                                        datve.id_donhang,
                                        tbl_order.trangthai,
                                        tbl_order.id_order,
                                        datve.tongtien
                                FROM datve 
                                join tour on datve.id_tour = tour.id_tour 
                                join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi 
                                join diadiem on tour.id_diadiem = diadiem.id_diadiem 
                                join nguoidung on datve.id_nguoidung = nguoidung.id_nguoidung 
                                join tbl_order on datve.id_tbl_order = tbl_order.id_order
                                group by datve.datetime
                                order by tbl_order.ngaydathang desc 
                                LIMIT $start, $limit";
                        $result1 = pdo_query($sql1);
                        $conn = pdo_get_connection();
                        $sql = "SELECT COUNT(*) AS total FROM datve";
                        $result = $conn->query($sql);
                        $row = $result->fetch();
                        $total_records = $row['total'];
                        $total_pages = ceil($total_records / $limit);
                    $option = 0;
                    if(isset($P_POST['option'])){
                        $option = $_POST['option'];
                    }
                    if($option == 0){
                    ?>
                        <table border=2 style="width: 100%" class="tour-table">
                            <tr style="text-align: center">
                             <th>Số hóa đơn</th>
                             <th>Thời gian đặt vé</th>
                             <th>Số lượng</th>
                             <th>Tổng tiền</th>
                             <th>ID user</th>
                             <th>Trạng thái</th>
                             <th></th>
                             <th></th>
                         </tr>
                    <?php 
                        foreach ($result1 as $key => $value) {
                            extract($value);
                            $i = $id_donhang;
                            $chuoi = str_pad($i, 5, "0", STR_PAD_LEFT);
                            $ngaydat = date('d/m/Y');
                            if($trangthai == 1){
                                $trangthai1 = 'Chờ duyệt';
                            } else if($trangthai == 2){
                                $trangthai1 = 'Xác nhận';
                            } else if($trangthai == 3){
                                $trangthai1 = 'Hoàn thành';
                            }
                    ?>
                            <tr style="" class="invoice">
                                <td>HD<?=$chuoi?></td>
                                <td><?=$datetime?></td>
                                <td><?= $soluong ?></td>
                                <td><?= number_format($tongtien, 0, '', '.') ?> VND</td>
                                <td><?= $id_nguoidung ?></td>
                                <td style="text-align: center"><form action="?act=donhang&id=<?= $id_order ?>" method="POST"> <button name="mi" id="show<?= $id_donhang ?>" class="btn btn-warning btn-sm" onclick="cl<?=$id_donhang?>()" value="<?= $trangthai ?>" type="submit" style="margin: 5px"><?= $trangthai1 ?></button> </form></td>
                    <?php
                                // <!--<button id="show" class="btn btn-warning btn-sm" type="button" style="margin: 5px">Chưa Thanh Toán</button> -->
                                // <!--<button id="show" class="btn btn-success btn-sm" type="button" style="margin: 5px">Đã Thanh toán</button>-->
                                // <!--<button id="show" class="btn btn-primary btn-sm" type="button" style="margin: 5px">Xác Nhận Đơn Hàng</button>-->
                    ?>
                                <td style="text-align: center"><a href="?act=chitietdonhang&id_tbl_order=<?=$id_order?>">Xem chi tiết</a></td>
                            <!-- // echo'<td style="text-align: center"><button id="" class="btn btn-primary btn-sm" onclick="" value="2" type="button" style="margin: 5px"><?=$trangthai2?></button></td> -->
                            <script>
                                var val = document.getElementById("show<?=$id_donhang?>");

                                if(val.value === "1"){
                                    // val.textContent = "Chưa thanh toán";
                                    // val.value = "1";
                                    val.className = "btn btn-warning btn-sm";
                                } else if(val.value === "2"){
                                    // val.textContent = "Đã xác nhận";
                                    // val.value = "2";
                                    val.className = "btn btn-success btn-sm";
                                } else if(val.value === "3"){
                                    // val.textContent = "Hoàn thành";
                                    // val.value = "0";
                                    val.className = "btn btn-primary btn-sm";
                                }
                            function cl<?=$id_donhang?>(){
                                var val = document.getElementById("show<?=$id_donhang?>");
                                if(val.value === "1"){
                                    val.textContent = "Chờ duyệt";
                                    val.value = "2";
                                    val.className = "btn btn-warning btn-sm";
                                } else if(val.value === "2"){
                                    val.textContent = "Xác nhận";
                                    val.value = "3";
                                    val.className = "btn btn-success btn-sm";
                                } else if(val.value === "3"){
                                    val.textContent = "Hoàn thành";
                                    val.value = "1";
                                    val.className = "btn btn-primary btn-sm";
                                }
                            }
                            </script>
                    <?php        
                        }
                    ?>
                            </tr>
                        </table>
                    <?php 
                    echo "<ul class='pagination'>";
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo "<li><a href='?act=donhang&page=" . $i . "'>" . $i . "</a></li>";
                    }
                    echo "</ul>";
                    };
                    ?>
                    <?php
                        if(isset($_POST['mi'])){
                            $id = $_GET['id'];
                            $tt = $_POST['mi'];
                            update_trangthai_donhang($id, $tt);
                        }
                    ?>
                    <style>
                        ul.pagination {
                            display: flex;
                            list-style: none;
                            padding: 0;
                            justify-content: center;
                            margin-top: 20px;
                        }

                        ul.pagination li {
                            margin: 0 5px;
                        }

                        ul.pagination li a {
                            text-decoration: none;
                            padding: 8px 12px;
                            border: 1px solid #ccc;
                            border-radius: 3px;
                            color: #333;
                        }

                        ul.pagination li a:hover {
                            background-color: #f0f0f0;
                        }
                        .tour-table {
  border: 1px solid #ccc; /* Màu và độ rộng viền */
  border-radius: 8px; /* Bo tròn viền */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng viền */
}
                    </style>
            </div>
        <!-- </form> -->
    </div>
</div>



</div>

                        </div>
                    </div>
                </div>
            </div>
</div>    
<!-- ///////////////-->
