<!-- main container-->
<main id="main">
    <!-- top information area -->
    <div class="inner-top">
        <div class="container">
            <!-- breadcrumb -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><span id="scr">Quên mật khẩu</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="inner-main common-spacing container">
        <div class="btn-hold">
            <h2>Quên mật khẩu</h2>
        </div>
        <!-- form -->
        <form class="twocol-form" action="index.php?act=quenmk" method="post">
            <div class="form-holder">
                <div class="wrap">
                    <input type="hidden" name="id_user" value="<?= $user['id_nguoidung'] ?>">

                    <div class="hold">
                        <label for="email">Điền email:</label>
                        <input type="email" name="email" class="form-control" />
                    </div>

                    <div class="btn-hold">
                        <input type="submit" class="btn btn-default" name="guiemail" value="Gửi">
                        </input>
                    </div>
                </div>
            </div>
        </form>
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != 0)) {
                echo $thongbao;
            }
            ?>
        </h2>
    </div>

</main>
</div>