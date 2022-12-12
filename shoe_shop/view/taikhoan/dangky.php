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
                                        <input type="email" name="email" placeholder="Email" id="" require pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Bạn phải nhập đúng định dạng của email !">
                                        <p style="color: red;"><?=isset($error["email"])?($error["email"]):''?></p>
                                        <input type="text" name="user" placeholder="Username" required pattern="[a-z]{0,10}" title="Bạn phải nhập ít hơn 10 ký tự và ký tự phải từ A-Z !">
                                        <p style="color: red;"><?=isset($error["user"])?($error["user"]):''?></p>
                                        <input type="password" name="pass" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password phải chứa 8 ký tự trở lên có ít nhất một số và một chữ hoa và chữ thường" >
                                        <p style="color: red;"><?=isset($error["pass"])?($error["pass"]):''?></p>
                                        <div class="button-box">
                                    
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