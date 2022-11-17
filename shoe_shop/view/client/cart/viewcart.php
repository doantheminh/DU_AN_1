<div class="shopping-cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a>  </li>
                                <li><strong> Shopping cart</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                            <?php
                                    viewcart(2);
                                ?>
                            </table>
                            
                        </div>
                        <div class="shopping-button">

                                <div class="shopping-cart-left">
                                    <button type="submit"><a href="index.php?act=delcart">Xóa giỏ hàng  </a></button>
                                    <button type="submit"><a href="index.php?act=bill">Đồng ý đặt hàng</button>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
