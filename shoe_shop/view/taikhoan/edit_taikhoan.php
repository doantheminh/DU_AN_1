
        </div>
        <div class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> my account</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Category</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Dresses (4)</a></li>
                                        <li><a href="#">shoes (6)</a></li>
                                        <li><a href="#">Handbags (1)</a></li>
                                        <li><a href="#">Clothing (3)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Color</h3>
                                </div>
                                <div class="single-sidebar-content">
                                    <ul>
                                        <li><a href="#">Black (2)</a></li>
                                        <li><a href="#">Blue (2)</a></li>
                                        <li><a href="#">Green (4)</a></li>
                                        <li><a href="#">Grey (2)</a></li>
                                        <li><a href="#">Red (2)</a></li>
                                        <li><a href="#">White (2)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="my-account-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-list-ol"></i>
                                                Lịch sử đặt hàng
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="account-title">
                                                        <h4>Here are the orders you've placed since your account was created.</h4>
                                                    </div>
                                                    <div class="order-history">
                                                        <p>You have not placed any orders.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-user"></i>
                                                Thông tin cá nhân của tôi
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                                                <div class="delivery-details">
                                                <?php
                                                  if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                                                  extract($_SESSION['user']);

                                                  }
                                                ?>
                                                    <form action="index.php?act=edit_taikhoan" method="post">
                                                        <div class="list-style">
                                                            <div class="account-title">
                                                                <h4>Hãy Chắc Chắn Cập Nhật Thông Tin Cá Nhân Của Bạn Nếu Nó Đã Thay Đổi. </h4>
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Email <em>*</em> </label>
                                                                <input type="email" name="email" id="" value="<?=$email?>">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Tên đăng nhập <em>*</em> </label>
                                                                <input type="text" name="user" id=""value="<?=$user?>">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Mật khẩu </label>
                                                                <input type="password" name="pass" id=""value="<?=$pass?>">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Địa chỉ<em>*</em> </label>
                                                                <input type="text" name="address" id=""value="<?=$address?>">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Điện thại <em>*</em> </label>
                                                                <input type="text" name="tel" id=""value="<?=$tel?>">
                                                            </div>
                                                      
                                                            <input type="hidden" name="id" value="<?=$id?>">

                                                            <div class="save-button">
                                                                <button><input type="submit" name="capnhat"></button>
                                                            </div>
                                                        </div>
                                                    </form>
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

                            </div>
                            <div class="account-button">
                                <div class="home"> <a href="index.php"> home</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>