<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

function addtocart(){
    
    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $soluong = 1;
        $ttien = $soluong * $price;
        $spadd = [$id, $name, $img, $price, $soluong, $ttien];
        array_push($_SESSION['mycart'], $spadd);
        
    }
    include "view/client/cart/viewcart.php";
}

function delcart(){
    if (isset($_GET['idcart'])) {
        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
    } else {
        $_SESSION['mycart'] = [];
    }
    include "view/client/cart/viewcart.php";
    // header('Location: index.php?act=viewcart');
}
function billcomfirm(){
    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
        else $id=0;
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $pttt=$_POST['pttt'];
        $ngaydathang=date('h:i:sa d/m/Y');
        $tongdonhang=tongdonhang();
        $name_product = $_POST['name_product'];
       $idbill=insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang,$name_product);
       foreach ($_SESSION['mycart'] as $cart) {
            insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
       }
       $_SESSION['cart']=[];
    }
    $bill=loadone_bill($idbill);
    $billct=loadall_cart($idbill);
    include "view/client/cart/billcomfirm.php";
}

function mybill(){
    $listbill=loadall_bill($_SESSION['user']['id']);
    include "view/client/cart/mybill.php";
}
function ctdh(){
    if (isset($_GET['bill']) && ($_GET['bill'] > 0)) {
        $id = $_GET['bill'];
        $billct=chi_tiet_bill($id);

        include "view/client/cart/chi_tiet_bill.php";
    } else {
        include "view/client/home.php";
    }
}
?>
   
   </body>
</html>