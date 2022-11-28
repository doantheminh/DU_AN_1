

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
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="unit-price">Tên sản phẩm</th>
                                        <th class="quantity">Giá sản phẩm</th>
                                        <th class="subtotal">Số lượng</th>
                                        <th class="remove-icon">Thành tiền</th>

                                    </tr>
                                </thead>
                                <?php
                                        foreach ($billct as $bill) {
                                            extract($bill);
                                            $img="upload/".$img;
                                            echo '
                                        <tbody class="text-center">
                                        <tr>
                                            <td class="cart-item-img">
                                                <a href="single-product.html">
                                                    <img src="'.$img.'" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name">
                                                <a href="#">'.$name.'</a>
                                            </td>
                    
                                            <td class="unit-price">
                                                <span>'.$name.'</span>
                                            </td>
                                            <td class="quantity">
                                                <span>'.$name.'</span>
                                            </td>
                                            <td class="subtotal">
                                                <span>'.$cả['name '].'</span>
                                            </td>
                                            <td class="subtotal">
                                            <span>'.$ttdh.'</span>
                                            </td>
                                           <td class="cart-item-img">
                                                <a href="'.$ctdh.'">
                                                Chi tiết
                                            </td> 
                                        </tr>
                                        </tbody>';
                                        }
                                    
                                ?>
          
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
