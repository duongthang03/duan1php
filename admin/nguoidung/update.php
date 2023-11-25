<?php
if(is_array($nguoidung)){
    extract($nguoidung);
}
if($role == 0){
    $role1 = "Người dùng";
} else if($role == 1){
    $role1 = "Admin";
}
?>
<div class="page-wrapper">
    <h1>Quản lý Người Dùng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Update Người Dùng</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" action="?act=A_update_nguoidung" method="POST">
                                <div class="card-body" style="width: 100%">
        <div class="">
            <label>ID tài khoản: </label> <br>
            <input class="form-control" type="text" name="id" value="<?=$id_nguoidung?>" readonly>
        <div class="">
            <label>Tên tài khoản: </label> <br>
            <input class="form-control" type="text" name="username" value="<?=$username?>">
        <div class="">
            <label>Mật khẩu: </label> <br>
            <input class="form-control" type="text" name="password" value="<?=$password?>">
        <div class="">
            <label>Email: </label> <br>
            <input class="form-control" type="email" name="email" value="<?=$email?>">
        <div class="">
            <label>Số điện thoại: </label> <br>
            <input class="form-control" type="text" name="sdt" value="<?=$sdt?>">
        <div class="">
            <label>Phân quyền: </label> <br>
            <select class="form-control" name="role" id="">
                <option  value="<?=$role?>" selected><?=$role1?></option>
                <option  value="0">Người dùng</option>
                <option  value="1">Admin</option>
            </select>
        <div class="">
            <input type="hidden" name="id_nguoidung" value="<?=$id_nguoidung?>">
            <input class="btn btn-secondary" name="A_update_nguoidung" type="submit" value="Update" style="margin: 5px">
            <input  class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
            <a href="?act=nguoidung">  <input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
        </div>
        <?php
        if(isset($thongbao) && ($thongbao != "")){
            echo $thongbao;
        }
        ?>
        </form>
    </div>
</div>
<!-- ///// -->
</div>
                    </div>
                </div>
            </div>
</div>  