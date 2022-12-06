        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <img src="view/client/img/slider/slider-1.jpg" alt="" title="#slider-direction-1" />
                    <img src="view/client/img/slider/slider-2.jpg" alt="" title="#slider-direction-2" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Giảm Giá Sập Sàn</h1>
                            <h2 class="title2" >nike Ari max 2015</h2>
                            <h3 class="title3" >Lorem Ipsum chỉ đơn giản là một bản ghi của giày </h3>
                            <a href="#"><span>Đọc thêm</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Giảm Giá Sản Phẩm</h1>
                            <h2 class="title2" >GET UP TO 50% SALE</h2>
                            <h3 class="title3" >Lorem Ipsum mang đến cho người dùng sự thoải mái </h3>
                            <a href="#"><span>Đọc thêm</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        <!-- banner area start -->
        <div class="banner-area">
            <div class="single-banner">
                <div class="part-1">
                    <div class="box-1 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum chỉ đơn giản là văn bản giả của ngành công nghiệp in ấn và sắp chữ.</p>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="box-2">
                        <a href="#">
                            <img src="view/client/img/banner/banner-2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="part-2">
                    <div class="search-box">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw"  >
                            <button type="submit" value="Tìm kiếm" name="timkiem">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                    </div>
                    <div class="box-3">
                        <a href="#">
                            <img src="view/client/img/banner/banner-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-4 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum chỉ đơn giản là văn bản giả của ngành công nghiệp in ấn và sắp chữ.</p>
                        <a href="#">Mua ngay</a>
                    </div>
                    <div class="box-5">
                        <a href="#">
                            <img src="view/client/img/banner/banner-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-6">
                        <a href="#">
                            <img src="view/client/img/banner/banner-4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->
        <!-- products area start -->
        <div class="products-area">
            <div class="container">
                <div class="products">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-menu">
                                <div class="menu-title">
                                    <h2><strong>Danh mục</strong></h2>
                                </div>
                                <div class="side-menu">
                                    <ul class="nav tab-navigation" role="tablist">
                                        <?php
                                        foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                            echo '
                                                <li role="presentation">
                                                <a class="active" href="' . $linkdm . '">' . $name . '</a>
                                                </li>
                                                ';
                                        }
                                        ?>

                                            <li><img src="view/client/img/banner/banner-5.jpg" alt=""></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                                        <div class="product-slider carousel-margin">
                                                <?php
                                                    
                                                    foreach ($spnew as $sp) {
                                                        extract($sp);
                                                        $linksp="index.php?act=sanphamct&idsp=".$id;
                                                        $img="upload/".$img;

                                                        echo '

    
                                                    <div class="col">
                                                        <div class="single-product">
                                                            <div class="level-pro-new">
                                                                <span>new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="'.$linksp.'">
                                                                    <img src="'.$img.'" alt="" class="primary-img">
                                                                    <img src="'.$img.'" alt="" class="secondary-img">
                                                                </a>
                                                            </div>
                                                            <div class="product-name">
                                                                <a href="'.$linksp.'="Fusce aliquam">'.$name.'</a>
                                                            </div>
                                                            <div class="price-rating">
                                                                <span>'.number_format($price).' vnd</span>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-half-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <form action="index.php?act=addtocart" method="post">
                                                        </a>
                                                    </div>

                                                    <div class="actions">
                                                    <form action="index.php?act=addtocart" method="post">
                                                      <input type="hidden" name="id" value="'.$id.'">
                                                      <input type="hidden" name="name" value="'.$name.'">
                                                      <input type="hidden" name="img" value="'.$img.'">
                                                      <input type="hidden" name="price" value="'.$price.'">

                                                      <input type="submit" value="Mua" name="addtocart" class="btn btn-dark">
                                                      <ul class="add-to-link">
                                                           <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                           <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                      </ul>
                                                        </form>
                                                            </div>
                                                        </div>
                                           
                                                    </div>

    
                                                   ';
                                               
                                                    }
                                               ?>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- products area end -->
        <!-- feature products area start -->
        <?php $dsdm = loadall_danhmuc();
            $dstop10 = loadall_sanpham_top10()            
            ?>
        <div class="features-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Sản phẩm yêu thích</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                    <div class="feature-product-slider carousel-margin">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $img = "upload/".$img;
                                echo '
                                <div class="col">
                                <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="'.$linksp.'">
                                        <img src="'.$img.'" alt="" class="primary-img">
                                        <img src="'.$img.'" alt="" class="secondary-img">

                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="'.$linksp.'" title="Fusce aliquam">'.$name.'</a>
                                </div>
                                <div class="price-rating">
                                    <span>'.number_format($price).'VND</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                <form action="index.php?act=addtocart" method="post">
                                                      <input type="hidden" name="id" value="'.$id.'">
                                                      <input type="hidden" name="name" value="'.$name.'">
                                                      <input type="hidden" name="img" value="'.$img.'">
                                                      <input type="hidden" name="price" value="'.$price.'">
                                                      <input type="submit" value="Mua" name="addtocart" class="btn btn-dark">

                                                      <ul class="add-to-link">
                                                           <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                           <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                      </ul>
                                                        </form>

                                </div>
                            </div>
                            </div>
                            ';}
                            ?>

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- feature products area end -->
        <!-- another banner area start -->
        <div class="another-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-banner">
                            <a href="#">
                                <img src="view/client/img/banner/banner-10.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>