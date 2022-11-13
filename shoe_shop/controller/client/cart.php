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
        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
    } else {
        $_SESSION['mycart'] = [];
    }
    header('Location:index.php?act=viewcart');
}
?>