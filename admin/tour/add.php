<div class="page-wrapper">
    <h1>Tour Management</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Add new tour</h4>
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
                                <input class="form-control" type="text" name="" placeholder="No comment" readonly>
                            </div>
                            <div>
                                <label>Địa điểm: </label> <br>
                                <input class="form-control" type="text" name="diadiem" placeholder="Nhập địa điểm">
                            </div>
                            <div>
                                <label>Khu vui chơi: </label> <br>
                                <input class="form-control" type="text" name="khuvuichoi" placeholder="Nhập tên khu vui chơi">
                            </div>
                            <div>
                                <label>Địa chỉ: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <div>
                                <label>Image: </label> <br>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <div>
                                <label>Mô tả: </label> <br>
                                <input class="form-control" type="text" name="mota" placeholder="Nhập mô tả">
                            </div>
                            <div>
                                <label>Thông tin chi tiết: </label> <br>
                                <input class="form-control" type="text" name="thongtinchitiet" placeholder="Nhập thông tin chi tiết">
                            </div>
                            <div>
                                <label>Giá: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập giá">
                            </div>
                            <div>
                                <label>Số lượng: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập số lượng">
                            </div>
                            <div>
                                <label>Trạng thái: </label> <br>
                                <input class="form-control" type="text" name="diachi" placeholder="Nhập trạng thái">
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