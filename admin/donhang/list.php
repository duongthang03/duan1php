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
                            <div class="">
                                <input class="" type="button" value="Select all" style="margin: 5px">
                                <input class="" type="button" value="Deselect all" style="margin: 5px">
                            </div>
                        <div class="" style=" display: flex; flex-wrap:wrap; justify-content: space-between">
                                        <!-- <input type="text" name="keyw" value="">
                                        <select name="id_diadiem" id="">
                                            <option value="0" selected>Show all</option>
                                            <?php
                                                // foreach ($list_diadiem as $key => $value) {
                                                //     extract($value);
                                                //     echo '<option value="' . $id_diadiem . '">' . $tendiadiem . '</option>';
                                                // }
                                            ?>
                                        </select>
                                        <input type="submit" name="clickOK" value="Go" style="margin: 5px"> -->
            
                <!-- <table border=2 style="width: 100%"> -->
                    <?php
                    $i = 1;
                    foreach ($list_donhang as $key => $value) {
                        extract($value);
                        if($trangthai_donhang == 0){
                            $trangthai_donhang1 = 'Chưa thanh toán';
                        } else{
                            $trangthai_donhang1 = 'Đã thanh toán';
                        }
                        $update_donhang = "?act=update_donhang&id_donhang=" . $id_donhang;
                        $delete_donhang = "?act=delete_donhang&id_donhang=" . $id_donhang;
                        echo '<table border=2 style="width: 49%">
                                <tr>
                                    <th style="width:40%; text-align: center">HD'.$i.'</th>
                                    <td style="text-align: center"><input type="checkbox" name="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ID_Tour || Khu vui chơi || Địa điểm</th> 
                                    <td>' . $id_tour . ' || '.$tenkhuvuichoi.' || '.$tendiadiem.'</td>
                                </tr>
                                <tr>
                                    <th>ID_User || UserName</th> 
                                    <td>' . $id_nguoidung . ' || '.$username.'</td>
                                </tr>
                                <tr>
                                    <th>Số vé</th>
                                    <td>' . $soluong_cart . '</td>
                                </tr>
                                <tr>
                                    <th>Tổng tiền</th>
                                    <td>' . $tongtien . '</td>
                                </tr>
                                <tr>
                                    <th>Ngày đặt</th>
                                    <td>' . $ngaydat . '</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>' . $trangthai_donhang1 . '</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td style="text-align: center">
                                        <a href="' . $update_donhang . '"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                        <a href="' . $delete_donhang . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
                                    </td>
                                </tr>
                            </tr>
                            <br>
                            </table>';
                            $i++;
                    }
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
