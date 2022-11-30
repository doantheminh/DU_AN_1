<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#binhluan").load("view/client/binhluan/binhluanform.php", {
            idpro: <?= $id ?>
        });
    });
</script>

<!-- single product area start -->
<div class="Single-product-location home2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="location">
                    <ul>
                        <li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
                        <li><strong>Chi tiết sản phẩm</strong></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- single product area end -->
        <!-- single product details start -->
        <div class="single-product-details">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6">
                    <div class="nav product-page-slider">
                    <?php
                        foreach ($anh_mo_ta as $key => $value) {
                            $hinh="upload/".$value['image'];
                           echo'
                            
                                <div class="single-product-slider"> 
                                    <a class="active" href="#pro-large-img-1" data-bs-toggle="tab">
                                        <img src="'.$hinh.'" alt="">
                                    </a>
                                </div>
                                
                            
                        ';
                        }
                        ?>
                        </div>
                        <div class="single-product-img tab-content">
                        
                        <?php
                        extract($onesp);
                        ?>
                            <div class="single-pro-main-image tab-pane active" id="pro-large-img-1">
                            <?php
                        $img="upload/".$img;

                              echo  '<a href=""><img class="optima_zoom" src="'.$img.'" data-zoom-image="img/product/7.png" alt="optima"/></a>

                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="single-product-details">
                            <a href="#" class="product-name">' . $name . '</a>
                           

                            <div class="item-price">
                           
                                    <p><span>$' . number_format($price) . 'VND</span></p>
                               
                                
                            </div>
                            <div class="single-product-info">
                               
                                     <p>' . $mota . '</p>
                             
                                
                                <div class="share">
                                    <img src="img/product/share.png" alt="">
                                </div>
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
                                    <span></span>
                                </div>
                                <div class="single-cart">

                                    <div class="actions">
                                                    <form action="index.php?act=addtocart" method="post">
                                                      <input type="hidden" name="id" value="' . $id . '">
                                                      <input type="hidden" name="name" value="' . $name . '">
                                                      <input type="hidden" name="img" value="' . $img . '">
                                                      <input type="hidden" name="price" value="' . $price . '">
                                                      <input type="submit" value="Mua" name="addtocart" class="btn btn-dark">
                                                        </form>
                                                   </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                              ';
                        ?>

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
                                                        <p><?= $mota ?></p>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                    <div class="single-p-tab-content">
                                                        <div class="row" id="binhluan">
                                                            <div class="col-md-5">

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

                                        <?php
                                        foreach ($sp_cung_loai as $sp_cung_loai) {
                                            extract($sp_cung_loai);
                                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                            $img = "upload/" . $img;

                                            echo '
                                <div class="col-md-12">
                                <div class="single-product">
                                <div class="product-img"> 
                                <a href="' . $linksp . '">
                                            <img src="' . $img . '" alt="" class="primary-img">
                                            <img src="' . $img . '" alt="" class="secondary-img"></a> 
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="single-product.html" title="Fusce aliquam">' . $name . '</a>
                                    </div>
                                    <div class="price-rating">
                                        <span>' . number_format($price) . '</span>
                                    </div>
                                    
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