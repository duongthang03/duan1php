<div class="page-wrapper">
    <h1>Quản lý người dùng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm mới người dùng</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" action="?act=A_add_nguoidung" method="POST" style="">
                                <div class="card-body" style="width: 100%">
        <div class="">
            <label>ID tài khoản: </label> <br>
            <input class="form-control" type="text" name="id" readonly>
        <div class="">
            <label>Tên tài khoản: </label> <br>
            <input class="form-control" type="text" name="username" placeholder="Nhập tên tài khoản người dùng">
        <div class="">
            <label>Mật khẩu: </label> <br>
            <input class="form-control" type="text" name="password" placeholder="Nhập mật khẩu">
        <div class="">
            <label>Email: </label> <br>
            <input class="form-control" type="text" name="email" placeholder="Nhập email">
        <div class="">
            <label>Số điện thoại: </label> <br>
            <input class="form-control" type="text" name="sdt" placeholder="Nhập số điện thoại">
        <div class="">
            <label>Quyền: </label> <br>
            <select class="form-control" name="role" id="">
                <option  value="0" selected>Người dùng</option>
                <option  value="1">Admin</option>
            </select>
                            <?php
                                if(isset($status) && ($status!="")){
                                    // echo $status;
                                    echo '<script>alert("Thêm thành công")</script>';
                                }
                            ?>
        </div> 
            <input class="btn btn-success" name="add" type="submit" value="Add" style="margin: 5px">
            <input class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
            <a href="?act=nguoidung"><input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
        </div> 
                </form>
            </div>
        </div>
    </div>   
</div>                                                                                                                                                 