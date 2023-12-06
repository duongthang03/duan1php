<style>
                .invoice {
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    width: 80%;
                    padding: 20px;
                    margin: 20px;
                    font-family: Arial, sans-serif;
                }
                .header h2 {
                    text-align: center;
                    margin-bottom: 20px;
                    color: #333;
                }
                .content {
                    display: flex;
                    justify-content: space-between;
                }
                .customer-info, .order-details {
                    flex: 1;
                    padding: 10px;
                    background-color: #f9f9f9;
                    border-radius: 5px;
                }
                .customer-info h3, .order-details h3 {
                    margin-bottom: 10px;
                    color: #555;
                }
                .customer-info p, .order-details p {
                    margin: 5px 0;
                }
                </style>
<div class="page-wrapper">
    <h1>Quản lý đơn hàng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Chi tiết đơn hàng</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 200%">
                    <form class="form-horizontal" style="" method="POST">
                        <div class="card-body" style="">
                            <div class="" >
                            <?php
                                extract($one_donhang);
                                // $tongtien1 = number_format($tongtien, 0, '', '.');
                                $datetime = date('H:m:i d/m/Y');
                            ?>
                                <div class="invoice" style=" margin-left: 10%">
                                    <div class="header">
                                    <h2>Thông tin hóa đơn</h2>
                                    </div>
                                    <div class="content">
                                    <div class="customer-info">
                                    <?php
                                        foreach($one_donhang as $value){
                                    ?>
                                        <h3>Thông tin khách hàng</h3>
                                        <p><strong>Họ tên:</strong><?= $value['hoten'] ?></p>
                                        <p><strong>Email:</strong> <?= $value['email'] ?></p>
                                        <p><strong>Số điện thoại:</strong> <?= $value['sdt'] ?></p>
                                        <p><strong>Địa chỉ:</strong> <?= $value['diachi'] ?></p>
                                    <?php
                                            break;
                                        }
                                    ?>
                                    </div>
                                    <div class="order-details">
                                        <h3>Chi tiết đơn hàng</h3>
                                        <p><strong>Ngày đặt hàng:</strong> <?=$datetime?></p>
                                        <p><strong>Sản phẩm:</strong>
                                        <?php
                                            foreach($one_donhang as $value){
                                                echo 'Vé '.'<a href="?act=chitiet_tour&id_ve='.$value['id_tour'].'">'.$value['tenkhuvuichoi'].'</a>'.' x '.$value['soluong_donhang'].' vé'.'<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                            }
                                        ?>
                                            <!-- <a href="?act=chitiet_tour&id_ve=<?=$id_tour?>"><?=$tenkhuvuichoi?> -->
                                            </a>
                                        </p>
                                        <p><strong>Tổng tiền:</strong> <?= number_format($value['tongtien'], 0, '', '.') ?> VND</p>
                                        <!-- <p><strong>Địa chỉ:</strong> <?=$tenkhuvuichoi?> - <?=$diachi?> - <?=$tendiadiem?></p> -->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <table class="" border=2 style="width: 100%;">
                    <tr>
                        <th>ID</th>
                        <th>Địa điểm</th>
                        <th>Khu vui chơi & địa chỉ</th>
                        <th>Giá vé</th>
                        <th>Số lượng tồn</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    <?php
                    $output = '';
                    foreach($one_donhang as $value) {
                        $output .= ($output === "" ? "'" : ",'").$value["id_tour"]."'";
                    }
                    function loadall_tour2($output){
                        $sql = "SELECT * from tour 
                                join diadiem on tour.id_diadiem = diadiem.id_diadiem 
                                join khuvuichoi on tour.id_khuvuichoi = khuvuichoi.id_khuvuichoi
                                where id_tour IN (".$output.")
                                ";
                        $sql.=" order by id_tour desc";
                        $list_tour = pdo_query($sql);
                        return  $list_tour;
                    }
                    $list_tour = loadall_tour2($output);
                    foreach ($list_tour as $key => $value) {
                        extract($value);
                        $hinhpath = "../img/" . $img;
                        $update_tour = "?act=update_tour&id_tour=" . $id_tour;
                        $delete_tour = "?act=delete_tour&id_tour=" . $id_tour;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='300px' height='150px'>";
                        } else {
                            $hinhpath = "No file img!";
                        }
                        if($trangthai == 0){
                            $trangthai = "Hữu hiệu";
                        }
                        $gia = number_format($gia, 0, '', '.');
                    ?>
                    <tr>
                        <td><?=$id_tour?></td>
                        <td><?=$tendiadiem?></td>
                        <td><?=$tenkhuvuichoi?> | <?=$diachi?></td>
                        <td><?=$gia?> VND</td>
                        <td><?=$soluong?></td>
                        <td><?=$trangthai?></td>
                        <td><a href="?act=chitiet_tour&id_ve=<?=$id_tour?>">Chi tiết</a></td>
                    </tr>         
                    <?php
                    }
                    ?>
                </table>

                        </div>
                </div>

                        </div>
                    </div>
                </div>
            </div>
</div>    
