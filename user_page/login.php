<?php
   

?>
            <!-- main container-->
            <main id="main">
                <!-- top information area -->
                <div class="inner-top">
                    <div class="container">
                        <h1 class="inner-main-heading" id="title">Đăng nhập</h1>
                        <!-- breadcrumb -->
                        <nav class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><span id="scr">Đăng nhập</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="inner-main common-spacing container" >
                    <!-- form -->
                    <div class="btn-hold">
                        <button class="btn btn-default" id="show" style=" height: 80px; width: 30%"><span id="a1" style="font-size: 30px">Đăng nhập</span>||<span id="a2">  Đăng ký</span></button>
                    </div>
                    <form class="twocol-form" action="?act=dangnhap" method="post" id="dangnhap" style="display: block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="top-box">
                                    <span class="holder height">Đăng nhập</span>
                                </div>
                                <div class="form-holder">
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="uname">Tên người dùng hoặc Email</label>
                                            <input type="text" name="username" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="pass">Mật khẩu</label>
                                            <input type="password" name="password" class="form-control" />
                                        </div>
                                        <div class="btn-hold">
                                            <button type="submit" class="btn btn-default" name="dangnhap">
                                                Đăng nhập
                                            </button>
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
                        document.getElementById('show').addEventListener("click", function(){
                            var dangnhap = document.getElementById('dangnhap');
                            var dangky = document.getElementById('dangky');
                            var title = document.getElementById('title');
                            var scr = document.getElementById('scr');
                            var show = document.getElementById('show');
                            var a1 = document.getElementById('a1');
                            var a2 = document.getElementById('a2');
                            if(dangnhap.style.display === "block"){
                                dangnhap.style.display = "none";
                                dangky.style.display = "block";
                                title.innerHTML = "Đăng ký";
                                // scr.innerHTML = "Đăng ký";
                                // show.innerHTML = "Đăng nhập || ĐĂNG KÝ";
                                a2.style.fontSize= "30px";
                                a1.style.fontSize= "1px";
                            }else{
                                dangky.style.display = "none";
                                dangnhap.style.display = "block";
                                title.innerHTML = "Đăng nhập";
                                // scr.innerHTML = "Đăng nhập";
                                // show.innerHTML = "ĐĂNG NHẬP || Đăng ký";
                                a2.style.fontSize= "1px";
                                a1.style.fontSize= "30px";
                            }
                        });
                    </script>
                    <form class="twocol-form" action="?act=dangky" method="post" id="dangky" style="display: none">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="top-box">
                                    <span class="holder height">Đăng ký</span>
                                </div>
                                <div class="form-holder">
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="uname1">Tên người dùng</label>
                                            <input type="text" name="username_register" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="email">Email</label>
                                            <input type="email" name="email_register" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="email">Số điện thoại</label>
                                            <input type="text" name="sdt_register" class="form-control" />
                                        </div>
                                        <div class="hold">
                                            <label for="reg-pass">Mật khẩu</label>
                                            <input type="password" name="password_register" class="form-control" />
                                        </div>
                                        <div class="btn-hold">
                                            <button type="submit" class="btn btn-default" name="dangky">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
       