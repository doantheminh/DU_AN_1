
        <div class="shopping-cart"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.php" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Quên mật khẩu</strong></li>
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
                                    <h2>Quên mật khẩu</h2>
                                    <span>Hãy gửi mail đăng ký để lấy mật khẩu từ chúng tôi</span>
                                </div>
                                <div class="login-form">
                                    <form action="index.php?act=quenmk" method="post">
                                        <input type="text" name="email" placeholder="Email" require>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember me</label>
                                            </div>
                                            <input type="submit" value="Gửi" name="guiemail" class="default-btn">
                                            <a href="index.php?act=dangky" class="default-btn">Đăng Ký</a>
                                            <a href="index.php?act=quenmk" class="default-btn">Quên mật khẩu</a>                                            
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <?php
                                            if (isset($thongbao)&&($thongbao!="")) {
                                              echo $thongbao;
                                            }
                                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>