<?php
if(is_array($khuvuichoi)){
    extract($khuvuichoi);
}
?>
<div class="page-wrapper">
    <h1>Quản lý khu vui chơi</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Update khu vui chơi</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="card" style="width: 200%">
                <form class="form-horizontal" action="?act=A_update_khuvuichoi" method="POST">
                                <div class="card-body" style="width: 100%">

                    <!-- /////////////////////// -->
        
        <div class="">
            <label>Tên khu vui chơi: </label> <br>
            <input class="form-control" type="text" name="tenkhuvuichoi" value="<?=$tenkhuvuichoi?>">
        <div class="">
            <label>Địa điểm: </label> <br>
            <select class="form-control" name="id_diadiem" id="">
                <option  value="<?=$id_diadiem?>" selected><?=$tendiadiem?></option>
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
        <div class="">
            <label>Địa chỉ: </label> <br>
            <input class="form-control" type="text" name="diachi" value="<?=$diachi?>">
        
        <div class="">
            <input type="hidden" name="id_khuvuichoi" value="<?=$id_khuvuichoi?>">
            <input class="btn btn-secondary" name="A_update_khuvuichoi" type="submit" value="Update" style="margin: 5px">
            <input  class="btn btn-primary" type="reset" value="Reset" style="margin: 5px">
            <a href="?act=khuvuichoi">  <input  class="btn btn-warning" type="button" value="List" style="margin: 5px"></a>
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