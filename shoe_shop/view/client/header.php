

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
                        
                            <div class="call-support">
                                <p>Cần hỗ trợ gọi: <span> (+84) 343462877</span></p>
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
                                                <li><a href="index.php?act=thoat">Thoat</a></li>

                                                <li class="text-white"><?= isset($_SESSION['user'])?$_SESSION['user']['user']:""?></li>
                                                
                                            
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
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
                                        <li><a href="index.php">Trang Chủ</a>
                                            <div class="sub-menu">
                                            </div>
                                        </li>
                                        <li class="mega-women"><a href="shop.html">Phụ Nữ</a>
                                            <div class="mega-menu women">
                                                <div class="part-1">
                                                    <span>
                                                        <a href="#">Váy Đầm</a>
                                                        <a href="#">Cocktail</a>
                                                        <a href="#">Sáng</a>
                                                        <a href="#">Tối</a>
                                                        <a href="#">Các Môn Thể Thao</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Đôi Giày</a>
                                                        <a href="#">Các môn thể thao</a>
                                                        <a href="#">giày Chạy</a>
                                                        <a href="#">dép sandal</a>
                                                        <a href="#">Sách dạy</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Túi xách</a>
                                                        <a href="#">Trẻ em</a>
                                                        <a href="#">Người Lớn</a>
                                                    </span>
                                                    <span>
                                                        <a href="#">Quần Áo</a>
                                                        <a href="#">Áo khoác</a>
                                                        <a href="#">Quần jeans</a>
                                                    </span>
                                                </div>
                                                <div class="part-2">
                                                    <a href="#">
                                                        <img src="img/banner/menu-banner.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-men"><a href="shop.html">Đàn Ông</a>
                                            <div class="mega-menu men">
                                                <span>
                                                    <a href="#">Túi</a>
                                                    <a href="#">Túi bốt</a>
                                                    <a href="#">Áo cộc tay</a>
                                                </span>
                                                <span>
                                                    <a href="#">Quần Áo</a>
                                                    <a href="#">Áo khoác</a>
                                                    <a href="#">áo phông</a>
                                                </span>
                                                <span>
                                                    <a href="#">Đồ lót</a>
                                                    <a href="#">đồ nội thất</a>
                                                  
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-footwear"><a href="shop.html">Giày dép</a>
                                            <div class="mega-menu footwear">
                                                <span>
                                                    <a href="#">GIày dép nam</a>
                                                    <a href="#">quà</a>
                                                </span>
                                                <span>
                                                    <a href="#">GIày dép nữ</a>
                                                    <a href="#">bốt</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mega-jewellery"><a href="shop.html">Đồ kim hoàn</a>
                                            <div class="mega-menu jewellery">
                                                <span>
                                                    <a href="#">Nhẫn</a>
                                                </span>
                                            </div>
                                        </li>
                                     
                                        <li><a href="#">Trang</a>
                                            <div class="sub-menu pages">
                                                <span>
                                                    <a href="about-us.html">Giới Thiệu</a>
                                                </span>
                                                <span>
                                                    <a href="blog.html">Bài Viết</a>
                                                </span>
                                                <span>
                                                    <a href="blog-details.html">Chi tiết bài viết</a>
                                                </span>
                                                <span>
                                                    <a href="cart.html">Giỏ Hàng</a>
                                                </span>
                                                <span>
                                                    <a href="checkout.html">Thủ tục Thanh toán</a>
                                                </span>
                                                <span>
                                                    <a href="my-account.html">Tài khoản của tôi</a>
                                                </span>
                                                <span>
                                                    <a href="index.php">Cửa hàng</a>
                                                </span>
                                                <span>
                                                    <a href="shop-list.html">Danh sách cửa hàng</a>
                                                </span>
                                                <span>
                                                    <a href="index.php?act=dangky">Trang Đăng Nhập</a>
                                                </span>
                                               
                                                <span>
                                                    <a href="wishlist.html">Danh sách yêu thích</a>
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
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                            </ul>
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
                                                <li><a href="index.php?act=dangky">login page</a></li>
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