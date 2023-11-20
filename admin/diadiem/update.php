<?php
if(is_array($diadiem)){
    extract($diadiem);
}
?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

    <h1>Quản lý địa điểm</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Update địa điểm</h4>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" action="?act=A_update_diadiem" style="" method="POST">
                                <div class="card-body" style="width: 100%">

                    <!-- /////////////////////// -->
        <div class="">
            <label>Tên địa điểm: </label> <br>
            <input class="form-control" type="text" name="tendiadiem" value="<?=$tendiadiem?>">
        
        <div class="">
            <input type="hidden" name="id_diadiem" value="<?=$id_diadiem?>">
            <input class="btn btn-secondary" name="update" type="submit" value="Update" style="margin: 5px">
            <input class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
            <a href="?act=diadiem">  <input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
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