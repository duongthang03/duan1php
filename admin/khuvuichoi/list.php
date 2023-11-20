<div class="page-wrapper">
    <h1>Quản lý khu vui chơi</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách khu vui chơi</h4>
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
                <table border=2 style="width: 100%">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Tên khu vui chơi</th>
                        <th>Địa điểm</th>
                        <th>Địa chỉ</th>
                        <th></th>
                    </tr>

                    <?php
                    foreach ($list_khuvuichoi as $khuvuichoi) {
                        extract($khuvuichoi);
                        $update_khuvuichoi = "?act=update_khuvuichoi&id_kvc=" . $id_khuvuichoi;
                        $delete_khuvuichoi = "?act=delete_khuvuichoi&id_kvc=" . $id_khuvuichoi;
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_khuvuichoi . '</td>
                            <td>' . $tenkhuvuichoi . '</td>
                            <td>' . $tendiadiem . '</td>
                            <td>' . $diachi . '</td>
                            <td style="text-align: center">
                                        <a href="' . $update_khuvuichoi . '"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                        <a href="' . $delete_khuvuichoi . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
                            </td>
                            </tr>';
            
                    }
                    ?>
                </table>
            </div>
            <p></p>
            <div class="">
                <input class="" type="button" value="Select all" style="margin: 5px">
                <input class="" type="button" value="Deselect all" style="margin: 5px">
                <a href="?act=add_kvc"> <button class="btn btn-success" type="button" style="margin: 5px"><i class="mdi mdi-library-plus"></i> Add+</button></a>

            </div>
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
