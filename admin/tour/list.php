<div class="page-wrapper">
    <h1>Quản lý vé</h1>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh sách vé</h4>
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
                                    <!-- <form action="" method="POST"> -->
                                        <input type="text" name="keyw" value="">
                                        <select name="id_diadiem" id="">
                                            <option value="0" selected>Show all</option>
                                            <?php
                                                foreach ($list_diadiem as $key => $value) {
                                                    extract($value);
                                                    echo '<option value="' . $id_diadiem . '">' . $tendiadiem . '</option>';
                                                }
                                            ?>
                                        </select>
                                        <input type="submit" name="clickOK" value="Go" style="margin: 5px">
                                    <!-- </form> -->
            <div class="">
                <a href="?act=add_tour"> <button class="btn btn-success" type="button" style="margin: 5px"><i class="mdi mdi-library-plus"></i> Add+</button></a>
            </div>
                <!-- <table border=2 style="width: 100%"> -->
                <table class="" border=2 style="width: 100%;">
                    <tr>
                        <th>ID</th>
                        <th>Địa điểm</th>
                        <th>Khu vui chơi & địa chỉ</th>
                        <th>Giá vé</th>
                        <th>Số lượng</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($list_tour as $key => $value) {
                        extract($value);
                        $hinhpath = "../img/" . $img;
                        $update_tour = "?act=update_tour&id_tour=" . $id_tour;
                        $delete_tour = "?act=delete_tour&id_tour=" . $id_tour;
                        if (is_file($hinhpath)) {
                            $hinhpath = "<img src= '" . $hinhpath . "' width='300px' height='150px'>";
                        } else {
                            $hinhpath = "No file img!";
                        }
                        if($trangthai == 0){
                            $trangthai = "Hữu hiệu";
                        }
                        $gia = number_format($gia, 0, '', '.');
                    ?>
                    <tr>
                        <td><?=$id_tour?></td>
                        <td><?=$tendiadiem?></td>
                        <td><?=$tenkhuvuichoi?> | <?=$diachi?></td>
                        <td><?=$gia?> VND</td>
                        <td><?=$soluong?></td>
                        <td><?=$trangthai?></td>
                        <td><a href="?act=chitiet_tour&id_ve=<?=$id_tour?>">Chi tiết</a></td>
                    </tr>         
                    <?php
                    }
                    ?>
                </table>
            </div>
            <p></p>
            
        </form>
    </div>
</div>




</div>

                        </div>
                    </div>
                </div>
            </div>
</div>    
<!-- ///////////////-->
