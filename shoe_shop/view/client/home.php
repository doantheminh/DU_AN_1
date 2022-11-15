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
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >nike Ari max 2015</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >GET UP TO 50% SALE</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">shopping now</a>
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
                            <input type="text" name="kyw" id="">
                            <button type="submit" value="Tìm kiếm" name="timkiem" >
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">shopping now</a>
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
                                    <h2>Best seller <strong>Danh mục</strong></h2>
                                </div>
                                <div class="side-menu">
                                     <!-- Nav tabs -->
                                        <!-- <ul class="nav tab-navigation" role="tablist">
                                            <li role="presentation">
                                                <a class="active" href="#tab1" aria-controls="tab1" role="tab" data-bs-toggle="tab">Women</a>
                                            </li>
                                            
                                            <li><img src="view/client/img/banner/banner-5.jpg" alt=""></li>
                                        </ul> -->
                                    <ul class="nav tab-navigation" role="tablist">
                                        <?php
                                        foreach ($dsdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                                            echo '<li role="presentation">
                                                <a class="active" href="' . $linkdm . '">' . $name . '</a>
                                                </li>';
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

                                            <div class="col">

                                                <div class="single-product">
                                                <?php
                                                    $i=0;
                                                    foreach ($spnew as $sp) {
                                                        extract($sp);
                                                        $linksp="index.php?act=sanphamct&idsp=".$id;
                                                        $hinh="upload/".$img;
                                                        if (($i==2)||($ii=5)||($i==8)) {
                                                        $mr="";
                                                        }else {
                                                            $mr="mr";
                                                        }
                                                        echo '<div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="'.$linksp.'">
                                                            <img src="'.$hinh.'" alt="" class="primary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                    <a href="'.$linksp.'" title="Fusce aliquam">'.$name.'</a>
                                                        </div>  
                                                        <div class="price-rating">
                                                        <span>'.$price.'</span>
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
                                                      <button type="submit" class="cart-btn" title="Add to cart" name="addtocart">add to cart</button>
                                                    
                                                      <ul class="add-to-link">
                                                           <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                           <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                      </ul>
                                                        </form>
                                                   </div>';
                                                   $i+=1;
                                                    }
                                               ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/5.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/25.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/15.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/9.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/17.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/25.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/18.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/25.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/26.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/23.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/24.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/22.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/21.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/18.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/19.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/17.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/18.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/15.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/9.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/10.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/7.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/5.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/4.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/2.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/1.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/5.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/10.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/1.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/25.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/23.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/11.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/9.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/17.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/8.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/15.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/7.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/2.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/12.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/23.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/16.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/14.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/19.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab6">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/12.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/18.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/21.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/23.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/25.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/25.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/10.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/13.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/20.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/7.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab7">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/5.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/6.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab8">
                                        <div class="product-slider carousel-margin">
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/11.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/12.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-new">
                                                        <span>new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/19.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/20.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/13.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/14.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/21.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/22.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$170.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-product">
                                                    <div class="level-pro-sale">
                                                        <span>sale</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="single-product.html">
                                                            <img src="view/client/img/product/3.png" alt="" class="primary-img">
                                                            <img src="view/client/img/product/15.png" alt="" class="secondary-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                                    </div>
                                                    <div class="price-rating">
                                                        <span class="old-price">$700.00</span>
                                                        <span>$800.00</span>
                                                        <div class="ratings">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="actions">
                                                        <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                                        <ul class="add-to-link">
                                                            <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
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
            $dstop10 = loadall_sanpham_top10(); ?>
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
                    <div class="feature-product-slider carousel-margin">
                        <div class="col">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                $img = "upload/" . $img;
                                echo '                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="'.$linksp.'">
                                        <img src="'.$hinh.'" alt="" class="primary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="'.$linksp.'" title="Fusce aliquam">'.$name.'</a>
                                </div>
                                <div class="price-rating">
                                    <span>'.$price.'</span>
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
                                                      <button type="submit" class="cart-btn" title="Add to cart" name="addtocart">add to cart</button>
                                                      <ul class="add-to-link">
                                                           <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                                           <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                                      </ul>
                                                        </form>

                                </div>
                            </div>';
                            }
                            ?>

                        </div>
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