<div class="row mb ">
            <div class="boxtrai mr">
            <div class="row mb">
                <?php
                        extract($onesp);
                ?>
                    <div class="boxtitle"><?=$name?></div>
                    <div class=" row boxcontent">
                       <?php
                        $img="upload/".$img;
                        echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                        echo $mota;
                       ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $("#binhluan").load("view/client/binhluan/binhluanform.php", {idpro: <?=$id?>});
                        });
                        </script>
                <div class="row " id="binhluan">
                    
                </div>
                <div class="row mb">
                    <div class="boxtitle">Sản phẩm cùng loại</div>
                    <div class=" row boxcontent">
                       <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                                extract($sp_cung_loai);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                            }
                       ?>
                    </div>
                </div>
            </div>
            <div class="boxphai ">
            <?php
                include "boxright.php";
               ?>
            </div>
        </div>






                <!-- single product area start -->
                <div class="Single-product-location home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong>Chi tiết sản phẩm</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product area end -->
        <!-- single product details start -->
        <div class="single-product-details">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="single-product-img tab-content">
                        <?php
                        extract($onesp);
                        ?>
                            <div class="single-pro-main-image tab-pane active" id="pro-large-img-1">
                            <?php
                        $img="upload/".$img;
                              echo  '<a href=""><img class="optima_zoom" src="'.$img.'" data-zoom-image="img/product/7.png" alt="optima"/></a>';
                        ?>
                                </div>
                           
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="single-product-details">
                            <a href="#" class="product-name"><?=$name?></a>
                            <div class="list-product-info">
                                <div class="price-rating">
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <a href="#" class="review">1 Review(s)</a>
                                        <a href="#" class="add-review">Add Your Review</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item-price">
                            <?php
                                    echo '<p><span>'.$price.'</span></p>';
                                ?>
                                
                            </div>
                            <div class="single-product-info">
                                <?php
                                    echo '<p>'.$mota.'</p>';
                                ?>
                                
                                <div class="share">
                                    <img src="img/product/share.png" alt="">
                                </div>
                            </div>
                            <div class="action">
                                <ul class="add-to-links">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-catagory">
                                <!-- <div class="color-select">
                                    <label class="required">
                                        <em>*</em> Color
                                    </label>
                                    <div class="input-box">
                                        <select id="select-1">
                                            <option value="">-- Please Select --</option>
                                            <option value="">black +$2.00</option>
                                            <option value="">blue +$1.00</option>
                                            <option value="">yellow +$1.00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="size-select">
                                    <label class="required">
                                        <em>*</em> Size
                                    </label>
                                    <div class="input-box">
                                        <select id="select-2">
                                            <option value="">-- Please Select --</option>
                                            <option value="">L +$2.00</option>
                                            <option value="">M +$1.00</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                            <div class="cart-item">
                                <div class="price-box">
                                    <span>$170</span>
                                </div>
                                <div class="single-cart">
                                    <div class="cart-plus-minus">
                                        <label>Qty: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                        <div class="actions">
                                                    <form action="index.php?act=addtocart" method="post">
                                                      <input type="hidden" name="id" value="'.$id.'">
                                                      <input type="hidden" name="name" value="'.$name.'">
                                                      <input type="hidden" name="img" value="'.$img.'">
                                                      <input type="hidden" name="price" value="'.$price.'">
                                                      <button type="submit" class="cart-btn" title="Add to cart" name="addtocart">add to cart</button>
                                                        </form>
                                                   </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product details end -->
        <!-- single product tab start -->
        <div class="single-product-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-product-tab">
                            <ul class="nav single-product-tab-navigation" role="tablist">
                                <li role="presentation">
                                    <a class="active" href="#tab1" aria-controls="tab1" role="tab" data-bs-toggle="tab">Product Description</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab2" aria-controls="tab2" role="tab" data-bs-toggle="tab">reviews</a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content single-product-page">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                                    <div class="single-p-tab-content">
                                        <p><?=$mota?></p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">

                                    <div class="single-p-tab-content">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                        <script>
                                        $(document).ready(function(){
                                            $("#binhluan").load("view/client/binhluan/binhluanform.php", {idpro: <?=$id?>});
                                        });
                                        </script>
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single product tab end -->
        <!-- upsell product area start-->

        <!-- upsell product area end-->
        <!-- related product area start-->
        <div class="related-product home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-title">
                            <h2>Sản phẩm cùng loại</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="related-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img"> 
                                <a href="single-product.html">
                                            <img src="<?=$img?>" alt="" class="primary-img">
                                            <img src="<?=$img?>" alt="" class="secondary-img"></a> 
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$170.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>