
        </div>
        
<?php $dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10(); ?>
        <div class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> Tài khoản cá nhân</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-3">
                        <div class="product-sidebar">
                            <div class="sidebar-title">
                                <h2>Danh mục sản phẩm</h2>
                            </div>
                            <div class="single-sidebar">
                                <div class="single-sidebar-title">
                                    <h3>Loại sản phẩm</h3>
                                </div>
                                <div class="single-sidebar-content">
                                        <?php
                                        foreach ($dsdm as $dm){
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                            echo '
                                            <ul>
                                                <li><a href="' . $linkdm . '">' . $name . '</a></li>
                                            </ul>
                                               
                                                
                                                ';
                                        }
                                        ?>
                                    
                                </div>
                            </div>

                            <div class="banner-left">
                                <a href="#">
                                    <img src="view/client/img/product/banner_left.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="my-account-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                
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
                                                                <input type="email" name="email" id="" value="<?=$email?>"require pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Bạn phải nhập đúng định dạng của email !">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Tên đăng nhập <em>*</em> </label>
                                                                <input type="text" name="user" id=""value="<?=$user?>" pattern="[a-z]{1,20}" required title="Bạn phải nhập ít hơn 20 ký tự và ký tự phải từ A-Z !">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Mật khẩu </label>
                                                                <input type="password" name="pass" id=""value="<?=$pass?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Mật khẩu phải chứa 8 ký tự trở lên có ít nhất một số và một chữ hoa và chữ thường">
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Địa chỉ<em>*</em> </label>
                                                                <input type="text" name="address" id=""value="<?=$address?>" required>
                                                            </div>
                                                            <div class="form-name">
                                                                <label>Điện thại <em>*</em> </label>
                                                                <input type="text" name="tel" id=""value="<?=$tel?>" pattern="(\+84|0)\d{9,10}" require title="Nhập số điện thoại từ 10 đến 11 số không bao gồm chữ">
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