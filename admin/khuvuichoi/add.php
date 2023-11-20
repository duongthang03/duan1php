<div class="page-wrapper">
    <h1>Quản lý khu vui chơi</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm mới khu vui chơi</h4>
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
                                <label>Tên khu vui chơi: </label> <br>
                                <input class="form-control" type="text" name="tenkhuvuichoi" placeholder="Nhập tên khu vui chơi">
                            </div>
                            <div>
                                <label>Địa điểm: </label> <br>
                                <!-- <input type="text" value="" name="tendiadiem" placeholder="Chọn địa điểm"> -->
                                <div class="">
                                    <select class="form-control" name="id_diadiem" id="">
                                        <option value="0" selected>Hà Nội</option>
                                        <!-- <?php
                                        // foreach($list_khuvuichoi as $key=>$value){
                                        //     if($id_kvc==$value['id']){
                                        //         echo '<option value="'.$value['id'].'" selected>'.$value['tenkhuvuichoi'].'</option>' ;
                                        //     }else{
                                        //         echo '<option value="'.$value['idp'].'">'.$value['name'].'</option>' ;
                                        //     }
                                        // }
                                        ?> -->
                                        <?php
                                            foreach ($list_diadiem as $key => $value) {
                                                extract($value);
                                                echo '<option value="' . $id_diadiem . '">' . $tendiadiem . '</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label>Địa chỉ: </label> <br>
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