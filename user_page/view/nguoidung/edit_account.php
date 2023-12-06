<!-- main container-->
<main id="main">
    <!-- top information area -->
    <div class="inner-top">
        <div class="container">
            <!-- breadcrumb -->
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><span id="scr">Cập nhật tài khoản</span></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="inner-main common-spacing container">
        <div class="btn-hold">
            <h2>Cập nhật tài khoản</h2>
        </div>
        <!-- form -->
        <form class="twocol-form" action="index.php?act=edit_user" method="post">
            <div class="form-holder">
                <div class="wrap">
                    <input type="hidden" name="id_user" value="<?= $user['id_nguoidung'] ?>">
                    <div class="hold">
                        <label for="uname1">Tên đăng nhập</label>
                        <input type="text" value="<?= $user['username'] ?>" name="ten_dangky" class="form-control" />
                    </div>
                    <div class="hold">
                        <label for="reg-pass">Mật khẩu</label>
                        <input type="password" value="<?= $user['password'] ?>" name="password_dangky" class="form-control" />
                    </div>
                    <div class="hold">
                        <label for="email">Email</label>
                        <input type="email" value="<?= $user['email'] ?>" name="email_dangky" class="form-control" />
                    </div>
                    <div class="hold">
                        <label for="email">Số điện thoại</label>
                        <input type="text" value="<?= $user['sdt'] ?>" name="sdt_dangky" class="form-control" />
                    </div>
                    
                    <div class="btn-hold">
                        <input type="submit" class="btn btn-default" name="capnhat" value="Cập nhật tài khoản">
                        </input>
                    </div>
                </div>
            </div>
        </form>



        
    </div>

</main>
</div>