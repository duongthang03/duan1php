<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

    <h1>Quản lý địa điểm</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách địa điểm</h4>
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
            <div class="col-md-6" >
                <div class="card" style="width: 200%">
                <form class="form-horizontal" action="" method="POST" style="">
                                <div class="card-body" style="width: 100%">

    <div class="">
        <form action="" method="POST">
            <div class="">
                <table border=2 style="width: 100%">
                    <tr>
                        <th></th>
                        <th>Mã</th>
                        <th>Tên địa điểm</th>
                    </tr>
                    <?php
                    foreach ($list_diadiem as $diadiem) {
                        extract($diadiem);

                        $update_diadiem = "?act=update_diadiem&id_dd=" . $id_diadiem;
                        $delete_diadiem = "?act=delete_diadiem&id_dd=" . $id_diadiem;

                        echo '<tr>
                            <td><input type="checkbox" name="checkbox" id="checkbox1" value="on"'; $checkboxValue =""; if($checkboxValue == "on"){echo "checked";} echo '></td>
                            <td>' . $id_diadiem . '</td>
                            <td>' . $tendiadiem . '</td>
   
                            <td style="text-align: center">
                                <a href="' . $update_diadiem . '"><button class="btn btn-info" type="button" style="margin: 5px"> <i class="mdi mdi-grease-pencil"></i> Edit</button> </a>  
                                <a href="' . $delete_diadiem . '"><button class="btn btn-danger" type="button" style="margin: 5px" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"><i class="mdi mdi-delete-forever"></i> Delete</button></a>
                            </td>
                    </tr>';
                                   
                    }
                    ?>
                                        <?php 
                                            // $checkboxValue = "";
                                            // if(isset($_POST['select'])){
                                            // $checkboxValue = "on";
                                            // }
                                        ?>
                </table>
            </div>
            <p></p>
            <div class="">
                <input class="select" name="select" type="button" value="Select all" style="margin: 5px">
                <!-- <button name="select" type='submit'>Select all</button> -->
                <input class="" type="button" value="Deselect all" style="margin: 5px">
                <a href="?act=add_dd"> <button class="btn btn-success" type="button" style="margin: 5px"><i class="mdi mdi-library-plus"></i> Add+</button></a>
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
                                                                                                                               