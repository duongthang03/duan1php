<div class="page-wrapper">
    <h1>Quản lý tour</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách tour</h4>
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
                                    <!-- <form action="" method="POST"> -->
                                        <input type="text" name="keyw" value="">
                                        <select name="id_diadiem" id="">
                                            <option value="0" selected>Show all</option>
                                            <?php
                                                foreach ($list_diadiem as $key => $value) {
                                                    extract($value);
                                                    echo '<option value="' . $id_diadiem . '">' . $tendiadiem . '</option>';
                                                }
                                            ?>
                                        </select>
                                        <input type="submit" name="clickOK" value="Go" style="margin: 5px">
                                    <!-- </form> -->
            <div class="">
                <input class="" type="button" value="Select all" style="margin: 5px">
                <input class="" type="button" value="Deselect all" style="margin: 5px">
                <a href="?act=add_tour"> <button class="btn btn-success" type="button" style="margin: 5px"><i class="mdi mdi-library-plus"></i> Add+</button></a>
            </div>
                <!-- <table border=2 style="width: 100%"> -->
                    <?php
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
                        echo '<table border=2 style="width: 100%">
                                <tr>
                                    <th style="width:20%"></th>
                                    <td><input type="checkbox" name="" id=""></td>
                                </tr>
                                <tr>
                                    <th>ID</th> 
                                    <td>' . $id_tour . '</td>
                                </tr>
                                <tr>
                                    <th>Địa điểm</th>
                                    <td>' . $tendiadiem . '</td>
                                </tr>
                                <tr>
                                    <th>Tên khu vui chơi</th>
                                    <td>' . $tenkhuvuichoi . '</td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>' . $diachi . '</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td style="text-align: center">' . $hinhpath . '</td>
                                </tr>
                                <tr>
                                    <th>Mô tả</th>
                                    <td><textarea style="height: 100%; width: 100%" readonly>' . $mota . '</textarea></td>
                                </tr>
                                <tr>
                                    <th>Thông tin chi tiết</th>
                                    <td><textarea style="height: 100%; width: 100%" readonly>' . $thongtinchitiet . '</textarea></td>
                                </tr>
                                <tr>
                                    <th>Giá</th>
                                    <td>' . $gia . '</td>
                                </tr>
                                <tr>
                                    <th>Số lượng</th>
                                    <td>' . $soluong . '</td>
                                </tr>
                                <tr>
                                    <th>Ngày bắt đầu</th>
                                    <td>' . $ngaybatdau . '</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>' . $trangthai . '</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td style="text-align: center">
                                        <a href="' . $update_tour . '"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                        <a href="' . $delete_tour . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
                                    </td>
                                </tr>
                            </tr>
                            <br>
                            </table>';
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
