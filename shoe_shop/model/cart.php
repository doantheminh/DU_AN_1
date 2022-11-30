<?php
    function viewcart($dell)
    {
        global $img_path;
        $tong=0;
        $i=0;
        if($dell==1){
            $xoasp_th='<th>Thao tác</th>';
            $xoa_td2='<th></th>';
        }else {
            $xoasp_th='';
            $xoa_td2='';

        }
       echo'
       <thead>
                                    <tr>
                                        <th class="cart-item-img">Sản phẩm</th>
                                        <th class="cart-product-name">Tên sản phẩm</th>
                                        <th class="unit-price">Giá sản phẩm</th>
                                        <th class="quantity">Số lượng</th>
                                        <th class="subtotal">Thành tiền</th>
                                        <th class="remove-icon"></th>

                                    </tr>
                                </thead>';
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh=$img_path.$cart[2];
                $ttien=$cart[3]*$cart[4];   
                $tong+=$ttien;
                if($dell==1){
                    $xoasp_td='index.php?act=delcart&idcart='.$i.'';
                }else {
                    $xoasp_td='';

                }
                echo'
                        <tbody class="text-center">

                        <tr>
                        <td class="cart-item-img">
                            <img src="'.$hinh.'" style="width: 100px;">
                        </td>

                    <td class="#">
                        <a href="single-product.html">'.$cart[1].'</a>
                    </td>

                    <td class="unit-price">
                        <span>'.$cart[3].'</span>
                    </td>
                    <td class="quantity">
                        <span>'.$cart[4].'</span>
                    </td>
                    <td class="subtotal">
                        <span>'.$ttien.'</span>
                    </td>
                    <td class="remove-icon">
                        <a href="'.$xoasp_td.'">
                            <img src="view/client/img/cart/btn_remove.png" alt="">
                        </a>
                    </td>
                </tr>
                
            </tbody>
            ';
                    $i+=1;
            }
           echo '
           <div class="col-md-4">   
           <div class="totals">
               <h3>Tổng: <span>'.$tong.'</span></h3>
           </div>
           ';
        
    }

 function tongdonhang(){
        $tong=0;
            foreach ($_SESSION['mycart'] as $cart) {
                $ttien=$cart[3]*$cart[4];
                $tong+=$ttien;
                }
                return $tong;

}
function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute_return_lastInsertID($sql);
}

function loadone_bill($id){
    $sql="select*from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql="select*from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill){
    $sql="select*from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw="",$iduser=0){
    $sql="select*from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    // if($kyw!="") $sql.=" AND bill_name like '%".$kyw."%'";
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function bill_chi_tiet($billct)
{
    global $img_path;
    $tong=0;
    $i=0;
   echo'<tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
            </tr>';
        foreach ($billct as $cart) {
            $hinh=$img_path.$cart['img'];
            $tong+=$cart['thanhtien'];
            echo'<tr> 
                <td><img src="'.$hinh.'" height="70px"></td>
                <td>'.$cart['name'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                </tr>';
                $i+=1;
        }


}
function get_ttdh($n){
    switch ($n) {
        case '0':
           $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Dang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
             break;
        case '3':
            $tt="Mua thành công";
             break;         
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke(){
    $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice,max(sanpham.price) as maxprice,avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}



function delete_bill($id){
    $sql="delete from bill where id=".$_GET['id'];
      pdo_execute($sql);
}

function chi_tiet_bill($id){
    $sql="select*from cart where idbill='$id'";
    $billct=pdo_query($sql);
    return $billct;
}
?>

                        