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
                <form class="form-horizontal" style="" method="POST" enctype="multipart/form-data">
                                <div class="card-body" style="width: 100%">

                        <div class="">
                            <div>
                                <label>ID: </label> <br>
                                <input class="form-control" type="button" name="" value="No comment" readonly>
                            </div>
                            <div>
                                <label>Địa điểm: </label> <br>
                                <!-- <input class="form-control" type="text" name="diadiem" placeholder="Nhập địa điểm"> -->
                                <select class="form-control" name="diadiem" id="">
                                    <option value="1" selected>Hà Nội</option>
                                    <?php
                                        foreach ($list_diadiem as $key => $value) {
                                            extract($value);
                                            echo '<option value="' . $id_diadiem . '">' . $tendiadiem . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label>Tên khu vui chơi: </label> <br>
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
                                <input class="form-control" type="text" name="gia" placeholder="Nhập giá">
                            </div>
                            <div>
                                <label>Số lượng: </label> <br>
                                <input class="form-control" type="text" name="soluong" placeholder="Nhập số lượng">
                            </div>
                            <div>
                                <label>Trạng thái: </label> <br>
                                <!-- <input class="form-control" type="text" name="trangthai" placeholder="Nhập trạng thái"> -->
                                <select class="form-control" name="trangthai" id="">
                                    <option value="0" selected>Hữu hiệu</option>
                                    <option value="1" >Tạm ẩn</option>
                                </select>
                            </div>
                            <input class="btn btn-success" name="add" type="submit" value="Add" style="margin: 5px">
                            <input class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
                            <a href="?act=tour"><input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
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