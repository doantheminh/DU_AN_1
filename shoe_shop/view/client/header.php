
<?php $dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10(); ?>
<!doctype html>
<html class="no-js" lang="">
<!-- Mirrored from htmldemo.net/james/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 08:57:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Home || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="view/client/image/x-icon" href="view/client/img/favicon.ico">
        <!-- Google Fonts
        ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- All css -->
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/bootstrap.min.css">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/owl.carousel.css">
        <link rel="stylesheet" href="view/client/css/owl.theme.css">
        <link rel="stylesheet" href="view/client/css/owl.transitions.css">
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/jquery-ui.css">
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/meanmenu.min.css">
        <!-- nivoslider CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/lib/css/nivo-slider.css">
        <link rel="stylesheet" href="view/client/lib/css/preview.css">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/animate.css">
        <!-- magic CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/magic.css">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/normalize.css">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/main.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="view/client/css/responsive.css">
        <!-- modernizr JS
        ============================================ -->
        <script src="view/client/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- header area start -->
        <header>
            
            <div class="top-link">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 offset-lg-3 col-md-9 d-none d-md-block">
                            <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                            ?>
                                <div class="call-support">
                                    <p>Xin Chào: <span><?= $user ?></span></p>
                                </div>
                                
                            
                           
                            </div>
                            <div class="col-lg-2 col-md-3 position-relative">
                                <div class="dashboard">
                                    <div class="account-menu">
                                        <ul>
                                            <li>        
                                                <a href="#">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <ul>
                                                    <li><a href="index.php?act=edit_taikhoan">Tài khoản của tôi</a></li>
                                                    <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                                    <?php
                                                    if ($role == 1) { ?><li><a href="view/admin/index.php">Đăng nhập Admin</a></li> <?php } ?>
                                                    <li><a href="index.php?act=thoat">Thoát</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                    } else {

                                    ?>
                                    <div class="call-support">
                                </div>
                                
                            
                           
                            </div>
                            <div class="col-lg-2 col-md-3 position-relative">
                                <div class="dashboard">
                                        <div class="account-menu">
                                        <ul>
                                            <li>        
                                                <a href="#">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                                <ul>
                                                    <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                    <div class="cart-menu">
                                        <ul>
                                            <li><a href="index.php?act=addtocart"> <img src="view/client/img/icon-cart.png" alt="">  </a>
                                        
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area product-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="view/client/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="mainmenu">
                                
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Home</a>
                                        <li class="mega-footwear"><a href="index.php">Giày dép</a>
                                            <div class="mega-menu footwear">
                                            <?php
                                                foreach ($dsdm as $dm) {
                                                    extract($dm);
                                                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                                    echo '<span>
                                                    <a href="' . $linkdm . '">' . $name . '</a>
                                                    
                                                </span>
                                            ';
                                                }
                                                ?>
                                                
                                            </div>
                                        </li>

                                     
                                        <li><a href="#">Trang</a>
                                            <div class="sub-menu pages">
           
                                                <span>
                                                    <a href="index.php?act=addtocart">Giỏ Hàng</a>
                                                </span>
                                                <span>
                                                    <a href="index.php?act=bill">Thủ tục Thanh toán</a>
                                                </span>
                                                <span>
                                                    <a href="index.php?act=edit_taikhoan">Tài khoản của tôi</a>
                                                </span>
                                                <span>
                                                    <a href="index.php">Cửa hàng</a>
                                                </span>
                                        
                                                <span>
                                                    <a href="index.php?act=dangnhap">Trang Đăng Nhập</a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Home</a>
                                           
                                        </li>
                                        <li><a href="shop.html">Women</a>
                                            <ul>
                                                <li><a href="#">Dresses</a>
                                                    <ul>
                                                        <li><a href="#">Coctail</a></li>
                                                        <li><a href="#">day</a></li>
                                                        <li><a href="#">evening</a></li>
                                                        <li><a href="#">sports</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">shoes</a>
                                                    <ul>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#">run</a></li>
                                                        <li><a href="#">sandals</a></li>
                                                        <li><a href="#">boots</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">handbags</a>
                                                    <ul>
                                                        <li><a href="#">Blazers</a></li>
                                                        <li><a href="#">table</a></li>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">kids</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">clothing</a>
                                                    <ul>
                                                        <li><a href="#">T-shirts</a></li>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">jeans</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Men</a>
                                            <ul>
                                                <li><a href="#">Bags</a>
                                                    <ul>
                                                        <li><a href="#">Bootees bag</a></li>
                                                        <li><a href="#">Blazers</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">clothing</a>
                                                    <ul>
                                                        <li><a href="#">coats</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Lingerie</a>
                                                    <ul>
                                                        <li><a href="#">Bands</a></li>
                                                        <li><a href="#">Furniture</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="index.php">Foorwear</a>
                                            <ul>
                                                <li><a href="#">footwear men</a>
                                                    <ul>
                                                        <li><a href="#">gifts</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">footwear women</a>
                                                    <ul>
                                                        <li><a href="#">boots</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Jewellery</a>
                                            <ul>
                                                <li><a href="#">Rings</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-list.html">Shop list</a></li>
                                                <li><a href="single-product.html">Single Shop</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="index.php?act=dangnhap">login page</a></li>
                                                <li><a href="register.html">register page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->
        <!-- slider area start -->