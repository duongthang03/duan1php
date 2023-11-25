<div class="page-wrapper">
    <h1>Quản lý Người Dùng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách Người Dùng</h4>
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
                        <th>ID tài khoản</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Email/th>
                        <th>Số điện thoại</th>
                        <th>Quyền</th>
                    </tr>

                    <?php
                    foreach ($list_nguoidung as $key => $value) {
                        extract($value);
                        if($role == 0){
                            $role1 = "Người dùng";
                        } else if($role == 1){
                            $role1 = "Admin";
                        }
                        $update_nguoidung = "?act=update_nguoidung&id_nguoidung=" . $id_nguoidung;
                        $delete_nguoidung = "?act=delete_nguoidung&id_nguoidung=" . $id_nguoidung;
                        echo '<tr>
                            <td>' . $id_nguoidung . '</td>
                            <td>' . $username . '</td>
                            <td>' . $password . '</td>
                            <td>' . $email . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $role1 . '</td>
                            <td style="text-align: center">
                                        <a href="' . $update_nguoidung . '"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                        <a href="' . $delete_nguoidung . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
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
                <a href="?act=add_nguoidung"> <button class="btn btn-success" type="button" style="margin: 5px"><i class="mdi mdi-library-plus"></i> Add+</button></a>

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
