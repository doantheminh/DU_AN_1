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
                                    <h2>Đăng ký</h2>
                                    <span>Please login using account detail bellow.</span>
                                </div>
                                <div class="login-form">
                                    <form action="index.php?act=dangky" method="post">
                                        <input type="email" name="email" placeholder="Email" id="" >
                                        <p style="color: red;"><?=isset($error["email"])?($error["email"]):''?></p>
                                        <input type="text" name="user" placeholder="Username" >
                                        <p style="color: red;"><?=isset($error["user"])?($error["user"]):''?></p>
                                        <input type="password" name="pass" placeholder="Password" require>
                                        <p style="color: red;"><?=isset($error["pass"])?($error["pass"]):''?></p>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember me</label>
                                            </div>
                                            <input type="submit" value="Đăng ký" name="dangky" class="default-btn">
                                            <a href="index.php?act=dangnhap" class="default-btn">Đăng Nhập</a>
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