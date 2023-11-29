<!-- main container-->
<main id="main">
    <!-- top information area -->

    <?php
    if (isset($_SESSION['username'])) {
        extract($_SESSION['username']);
        ?>
        Bạn đã đăng nhập
    <?php } else { ?>

        <div class="inner-main common-spacing container">
            <!-- form -->
            <div class="btn-hold">
                <button class="btn btn-default" id="show" style=" height: 80px; width: 30%">
                    <span id="b1" style="font-size: 30px;">Đăng nhập</span>
                    <span class="icon-update-profile"></span>
                    <span id="b2"> Đăng ký</span>
                </button>
            </div>
            <form class="twocol-form" action="index.php?act=dangnhap" method="post" id="dangnhap" style="display: block">
                <div class="inner-top">
                    <div class="container">
                        <!-- breadcrumb -->
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><span id="scr">Đăng nhập</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-box" style="margin-top: 10px;">
                            <span style="position: relative; left: 50%;">
                                <span class="icon-plane"></span>
                                <span class="icon-plane"></span>
                                <span class="icon-plane"></span>
                            </span>
                        </div>
                        <div class="form-holder">
                            <div class="wrap">
                                <div class="hold">
                                    <label for="uname">Tên đăng nhập</label>
                                    <input type="text" name="username" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="pass">Mật khẩu</label>
                                    <input type="password" name="pass" class="form-control" />
                                </div>
                                <div class="btn-hold">
                                    <input type="submit" class="btn btn-default" name="dangnhap" value="Đăng nhập">
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // $_SESSION['username'] = $username;
                ?>
            </form>

            <script>
                document.getElementById('show').addEventListener("click", function () {
                    var dangnhap = document.getElementById('dangnhap');
                    var dangky = document.getElementById('dangky');
                    var title = document.getElementById('title');
                    var scr = document.getElementById('scr');
                    var show = document.getElementById('show');
                    var b1 = document.getElementById('b1');
                    var b2 = document.getElementById('b2');
                    if (dangnhap.style.display === "block") {
                        dangnhap.style.display = "none";
                        dangky.style.display = "block";
                        // title.innerHTML = "Đăng ký";
                        // scr.innerHTML = "Đăng ký";
                        // show.innerHTML = "Đăng nhập || ĐĂNG KÝ";
                        b2.style.fontSize = "30px";
                        b1.style.fontSize = "10px";
                    } else {
                        dangky.style.display = "none";
                        dangnhap.style.display = "block";
                        // title.innerHTML = "Đăng nhập";
                        // scr.innerHTML = "Đăng nhập";
                        // show.innerHTML = "ĐĂNG NHẬP || Đăng ký";
                        b2.style.fontSize = "10px";
                        b1.style.fontSize = "30px";
                    }
                });
            </script>


            <form class="twocol-form" action="index.php?act=dangky" method="post" id="dangky" style="display: none">
                <div class="inner-top">
                    <div class="container">
                        <!-- breadcrumb -->
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><span id="scr">Đăng ký</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-box" style="margin-top: 10px;">
                            <span style="position: relative; left: 50%;">
                                <span class="icon-plane"></span>
                                <span class="icon-plane"></span>
                                <span class="icon-plane"></span>
                            </span>
                        </div>
                        <div class="form-holder">
                            <div class="wrap">
                                <div class="hold">
                                    <label for="uname1">Tên đăng nhập</label>
                                    <input type="text" name="ten_dangky" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="reg-pass">Mật khẩu</label>
                                    <input type="password" name="password_dangky" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="email">Email</label>
                                    <input type="email" name="email_dangky" class="form-control" />
                                </div>
                                <div class="hold">
                                    <label for="email">Số điện thoại</label>
                                    <input type="text" name="sdt_dangky" class="form-control" />
                                </div>
                                <div class="btn-hold">
                                    <input type="submit" class="btn btn-default" name="dangky" value="Đăng ký">
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    <?php } ?>
</main>
</div>