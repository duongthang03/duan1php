
<!-- ///// -->
<div class="page-wrapper">
    <h1>Quản lý địa điểm</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm mới địa điểm</h4>
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
                            <div>
                                <label>Tên địa điểm</label> <br>
                                <input class="form-control" type="text" name="tendiadiem" placeholder="Nhập tên địa điểm">
                            </div>
                            <input class="btn btn-success" name="add" type="submit" value="Add" style="margin: 5px">
                            <input class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
                            <a href="?act=diadiem"><input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
                        </div>
                            <?php
                                if(isset($status)&& ($status!="")){
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