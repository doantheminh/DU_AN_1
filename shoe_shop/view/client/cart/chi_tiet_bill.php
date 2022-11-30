

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
                                   
                                </thead>
                                
                                        <?php
                                            bill_chi_tiet($billct);
                                        ?>
                                </thead>
          
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
