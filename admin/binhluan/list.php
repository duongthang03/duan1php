<div class="page-wrapper">
    <h1>Quản lý bình luận</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách bình luận</h4>
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
                        <th></th>
                        <th>Tên tài khoản</th>
                        <th>Nơi bình luận</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>

                    <?php
                    foreach ($list_binhluan as $key => $value) {
                        extract($value);
                        $delete_binhluan = "?act=delete_binhluan&id_binhluan=" . $id_binhluan;
                        echo '<tr style="border-color:black">
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'. $username.'</td>
                                <td>'. $tenkhuvuichoi.' '. $tendiadiem .'</td>
                                <td>'. $noidung .'</td>
                                <td>'. $ngaybinhluan .'</td>
                                <td style="text-align: center">
                                    <a href="' . $delete_binhluan . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
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
