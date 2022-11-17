
        <!-- checkout area start -->
        <div class="checkout-area">
            <div class="container">
            <form action="index.php?act=billcomfirm" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Thủ tục thanh toán</strong></li>
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
                                    <ul>
                                        <li><a href="#">Dresses (4)</a></li>
                                        <li><a href="#">shoes (6)</a></li>
                                        <li><a href="#">Handbags (1)</a></li>
                                        <li><a href="#">Clothing (3)</a></li>
                                    </ul>
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
                        <div class="checkout-banner hidden-xs">
                            <a href="#">
                                <img src="view/client/img/checkout/checkout_banner.jpg" alt="">
                            </a>
                        </div>
                        <div class="checkout-heading">
                            <h2>Thủ tục thanh toán</h2>
                        </div>
                        <div class="checkout-accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Bước 1: Thông tin đặt hàng
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="delivery-details">
                                                        <form action="#">
                                                        <?php
                                                            if(isset($_SESSION['user'])){
                                                                $name=$_SESSION['user']['user'];
                                                                $address=$_SESSION['user']['address'];
                                                                $email=$_SESSION['user']['email'];
                                                                $tel=$_SESSION['user']['tel'];
                                                            }else {
                                                                $name="";
                                                                $address="";
                                                                $email="";
                                                                $tel="";

                                                            }
                                                        ?>
                                                            <div class="list-style">
                                                                <div class="form-name">
                                                                    <label>Tên người đặt <em>*</em> </label>
                                                                    <input type="text" placeholder="Tên" name="name"  value="<?=$name?>">
                                                                </div>

                                                                <div class="form-name">
                                                                    <label>Địa chỉ <em>*</em> </label>
                                                                    <input type="text" placeholder="Address" name="address" value="<?=$address?>">
                                                                </div>
                                                                <div class="form-name">
                                                                    <label>Email <em>*</em> </label>
                                                                    <input type="text" placeholder="Email" name="email" id="" value="<?=$email?>">
                                                                </div>
                                                                <div class="form-name">
                                                                    <label>Số điện thoại <em>*</em> </label>
                                                                    <input type="text" placeholder="Số điện thoại" name="tel" id="" value="<?=$tel?>">  
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Bước 2: Phương thức thanh toán
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="patment-method">
                                                <p>Vui lòng chọn phương thức thanh toán ưa thích để sử dụng cho đơn đặt hàng này.</p>
                                                <div class="radio">
                                                <tr>
                            <td><input type="radio" name="pttt" checked id="">Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" >Thanh toán online</td>

                        </tr>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Bước 3: Xác nhận đơn hàng   
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" data-bs-parent="#accordion">
                                        <div class="panel-body">
                                            <div class="confirm-order">
                                                <div class="table-responsive">
                                                <table class="table-bordered table table-hover">
                                                    <?php
                                                            viewcart(2);
                                                        ?>
                                                    </table>
                                                </div>
                                                <input type="submit" value="Tiếp tục đặt hàng" class="btn btn-dark" name="dongydathang">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 </form>
            </div>
        </div>