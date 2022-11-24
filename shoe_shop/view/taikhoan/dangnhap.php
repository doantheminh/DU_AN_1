


            <div class="shopping-cart"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.php" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Log up page</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>Đăng Nhập</h2>
                                    <span>Hãy đăng nhập để sử dụng các chức năng của chúng tôi</span>
                                </div>
                                <div class="login-form">
                                    <form action="index.php?act=dangnhap" method="post">
                      
                                        <input type="text" name="user" placeholder="Username">
                                        <p style="color: red;"><?= isset($error['user1'])? $error['user1']: ''?></p>
                                        <input type="password" name="pass" placeholder="Password">
                                        <p style="color: red;"><?= isset($error['pass1'])? $error['pass1']: ''?></p>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember me</label>
                                            </div>
                                            <input type="submit" value="Đăng nhập" name="dangnhap" class="default-btn">
                                            <a href="index.php?act=dangky" class="default-btn">Đăng Ký</a>
                                            <a href="index.php?act=quenmk" class="default-btn">Quên mật khẩu</a>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>