<div class="page-wrapper">
    <h1>Quản lý đơn hàng</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm mới đơn hàng</h4>
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
                            <div>
                                <label>ID: </label> <br>
                                <input class="form-control" type="text" name="tenkhuvuichoi" placeholder="Nhập tên khu vui chơi">
                            </div>
                            <div>
                                <label>Số lượng: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <div>
                                <label>Tổng tiền: </label> <br>
                                <input class="form-control" type="number" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <div>
                                <label>Ngày đặt: </label> <br>
                                <input class="form-control" type="date" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <div>
                                <label>ID tour: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <input class="btn btn-success" name="add" type="submit" value="Add" style="margin: 5px">
                            <input class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
                            <a href="?act=khuvuichoi"><input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
                        </div>
                            <?php
                                if(isset($status) && ($status!="")){
                                    // echo $status;
                                    echo '<script>alert("Thêm thành công")</script>';
                                }
                            ?>
                    </div>  
                </form>
            </div>
        </div>
    </div>   
</div>                                                                                                                                                 