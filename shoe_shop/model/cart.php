
<?php
    function viewcart($dell)
    {
        global $img_path;
        $tong=0;
        $i=0;
        $number=0;
        $name_product = '';
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
                $number+=$cart[4];
                $name_product .= ' - '. $cart[1];
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
                        <span>'.number_format($cart[3]).' vnd</span>
                    </td>
                    <td class="quantity">
                        <span>'.$cart[4].'</span>
                    </td>
                    <td class="subtotal">
                        <span>'.number_format($ttien).' vnd</span>
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
           <input type="text" placeholder="Tên" name="name_product"  value="'.$name_product.'" hidden>
           <div class="col-md-4">   
           <div class="totals">
               <h3>Tổng: <span>'.number_format($tong).' vnd</span></h3>

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

function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$name_product){
    $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total,name_product) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang','$name_product')";
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
    // 
               
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
             <td>Sản phẩm</td>
                <th>Tên</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
            </tr>';
        foreach ($billct as $cart) {
            $tong+=$cart['thanhtien'];
            echo'<tr> 
                <td><img src="../../'.$cart['img'].'" style="width: 110px;"></td> 
                <td>'.$cart['name'].'</td>
                <td>'. number_format($cart['price']).' vnd</td>
                <td>'.$cart['soluong'].'</td>
                </tr>';
                $i+=1;
        }
      


}
function bill_chi_tiet_view($billct)
{
    global $img_path;
    $tong=0;
    $i=0;
            echo'<tr>
             <td>Sản phẩm</td>
                <th>Tên</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
            </tr>';
        foreach ($billct as $cart) {
            $tong+=$cart['thanhtien'];
            echo'<tr> 
                <td><img src="'.$cart['img'].'" style="width: 110px;"></td> 
                <td>'.$cart['name'].'</td>
                <td>'. number_format($cart['price']).' vnd</td>
                <td>'.$cart['soluong'].'</td>
                </tr>';
                $i+=1;
        }
      


}
function get_ttdh($n){
   
  
    switch  ($n) {
        case '0':
           $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
             break;
        case '3':
            $tt="Đã mua";
             break;         
        default:
            $tt="Đơn hàng mới";
            break;
    }
  
    return $tt;
}
function get_vaitro($v){
    switch  ($v) {
        case '0':
           $tt="Khách hàng";
            break;
        case '1':
            $tt="Admin";
            break;      
        default:
            $tt="Admin";
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
function doanh_thu(){
    $sql="select*from bill where ngaydathang";
    $dt=pdo_query($sql);
    return $dt;
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

                        