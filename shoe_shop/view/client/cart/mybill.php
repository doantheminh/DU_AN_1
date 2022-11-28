
<div class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> Đơn hàng của bạn</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Mã đơn hàng</th>
                                        <th class="unit-price">Ngày đặt</th>
                                        <th class="quantity">Tổng số lượng hàng</th>
                                        <th class="subtotal">Tổng thanh toán</th>
                                        <th class="remove-icon">Tình trạng đơn hàng</th>
                                    </tr>
                                </thead>
                                <?php
                                    if(is_array($listbill)){
                                        foreach ($listbill as $bill) {
                                            extract($bill);
                                            $ttdh=get_ttdh($bill['bill_status']);
                                            $countsp=loadall_cart_count($bill['id']);
                                        echo '                      <tbody class="text-center">
                                        <tr>
                                            <!-- <td class="cart-item-img">
                                                <a href="single-product.html">
                                                    <img src="img/cart/3.png" alt="">
                                                </a>
                                            </td> -->
                                            <td class="cart-product-name">
                                                <a href="#">'.$bill['id'].'</a>
                                            </td>
                     
                                            <td class="unit-price">
                                                <span>'.$bill['ngaydathang'].'</span>
                                            </td>
                                            <td class="quantity">
                                                <span>'.$countsp.'</span>
                                            </td>
                                            <td class="subtotal">
                                                <span>'.$bill['total'].'</span>
                                            </td>
                                            <td class="subtotal">
                                            <span>'.$ttdh.'</span>
                                        </td>
                                 
                                        </tr>
    
                                    </tbody>';
                                        }
                                    }
                                ?>
          
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>