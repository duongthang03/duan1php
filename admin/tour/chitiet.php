<div class="page-wrapper">
    <h1>Quản lý vé</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Chi tiết vé</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" style="" method="POST">
                                <div class="card-body" style="width: 100%">
            </div>
                    <?php
                        extract($tour);
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
                    <style>
                        .table {
                            /* background-image: url('../img/R3.png'); 
                            background-size: cover; 
                            position: relative; 
                            width: 100%;
                            height: 500px;  */
                            /* border: 1px solid black; */
                            border: 2px solid #ffcc00; /* Màu sắc và độ dày của border */
                            border-radius: 10px; /* Bo tròn các góc */
                            padding: 20px; /* Khoảng cách bên trong border */
                            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
                        }
                        .price {
                            font-size: 1.2em; /* Kích thước chữ */
                            color: green; /* Màu chữ */
                            text-align: right; /* Căn chỉnh về phía phải */
                            line-height: 1.5; /* Khoảng cách giữa các dòng */
                            padding: 5px; /* Khoảng cách với viền */
                        }
                        .quantity {
                            font-size: 1.1em; /* Kích thước chữ */
                            color: blue; /* Màu chữ */
                            text-align: right; /* Căn chỉnh về phía trái */
                            line-height: 1.4; /* Khoảng cách giữa các dòng */
                            padding: 3px; /* Khoảng cách với viền */
                        }
                        img{
                            border-radius: 10px;
                        }
                        </style>
                    <!-- <image class="background-image"  src="../img/R2.png" width="100%"> -->
                    <div class="table" style="width: 80%; margin-left: 10%">      

                        <table class="" border=0 style="width: 80%;">
                                <p style="width: 20%; float:left; border: 2px solid red;  border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); text-align:center">ID ------ <?= $id_tour ?></p> 
                                <p style="width: 20%; float:right; border: 2px solid green;  border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5); text-align:center"> <?= $trangthai ?></p> 
                                <p></p>
                                <div style="text-align: right">
                                        <img src="../img/<?=$img?>" width="70%">
                                        <figcaption><?= $tenkhuvuichoi ?></figcaption>
                                        <figcaption><?= $diachi ?> || <?= $tendiadiem ?></figcaption>
                                </div>
                                <p class="price">Giá: <?= $gia ?> VND</p>
                                <p class="quantity">Số lượng: <?= $soluong ?></p>
                                <p>Mô tả:</p>
                                <textarea style="height: 100%; width: 100%; border: none" rows=4 readonly><?= $mota ?></textarea>
                                <p>Thông tin chi tiết:</p>
                                <textarea style="height: 100%; width: 100%; border: none" rows=8 readonly><?= $thongtinchitiet ?></textarea>
                                    <th></th>
                                    <td style="text-align: center">
                                        <a href="<?=$update_tour?>"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                        <a href="<?=$delete_tour?>"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
                                    </td>
                                </tr>
                            </tr>
                            <br>
                            </table>
                    </div>
                    <?php
                    ?>
                <!-- </table> -->
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
