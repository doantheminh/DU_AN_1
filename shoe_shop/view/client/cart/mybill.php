    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle">Đơn hàng của bạn</div>
                   <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng đặt hàng</th>
                        <th>Tổn giá trị thanh toán</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh=get_ttdh($bill['bill_status']);
                                $countsp=loadall_cart_count($bill['id']);
                               echo '   <tr>
                               <td>'.$bill['id'].'</td>
                               <td>'.$bill['ngaydathang'].'</td>
                               <td>'.$countsp.'</td>
                               <td>'.$bill['total'].'</td>
                               <td>'.$ttdh.'</td>
       
                           </tr>';
                            }
                        }
                    ?>
                 
                </table>
            </div>
        </div>
        </div>

    <div class="boxphai">
            <?php include "view/client/boxright.php";?>
    </div>
</div>