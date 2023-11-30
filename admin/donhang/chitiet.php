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
                                $tongtien1 = number_format($tongtien, 0, '', '.');
                                $ngaydat1 = date('d/m/Y');
                            ?>
                                <div class="invoice" style=" margin-left: 10%">
                                    <div class="header">
                                    <h2>Thông tin hóa đơn</h2>
                                    </div>
                                    <div class="content">
                                    <div class="customer-info">
                                        <h3>Thông tin khách hàng</h3>
                                        <p><strong>Họ tên:</strong> <?= $hoten ?></p>
                                        <p><strong>Email:</strong> <?= $email ?></p>
                                        <p><strong>Số điện thoại:</strong> <?= $sdt ?></p>
                                        <p><strong>Địa chỉ:</strong> <?= $diachi ?></p>
                                    </div>
                                    <div class="order-details">
                                        <h3>Chi tiết đơn hàng</h3>
                                        <p><strong>Ngày đặt hàng:</strong> <?=$ngaydat1?></p>
                                        <p><strong>Sản phẩm:</strong> Vé <a href="?act=chitiet_tour&id_ve=<?=$id_tour?>"><?=$tenkhuvuichoi?></a></p>
                                        <p><strong>Số lượng:</strong> <?=$soluong_donhang?></p>
                                        <p><strong>Tổng cộng:</strong> <?=$tongtien1?> VND</p>
                                        <p><strong>Địa chỉ:</strong> <?=$tenkhuvuichoi?> - <?=$diachi?> - <?=$tendiadiem?></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
</div>    
