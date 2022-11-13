<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/cart.php";
include "model/sanpham.php";
// goi header vao index
include "view/client/header.php";
include "controller/client/taikhoan.php";
include "controller/client/sanpham.php";
include "controller/client/cart.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            sanpham();
            break;
        case 'sanphamct':
            // goi controller san pham de xu ly
            sanphamct();
            break;
        case 'dangky':
            dangky();
            break;
        case 'dangnhap': 
            dangnhap();
            break;
        case 'edit_taikhoan':
            edit_taikhoan();
            break;
        case 'quenmk':
            quenmk();
            break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;
        case 'addtocart':
            addtocart();
            break;
        case 'delcart':
            //lỗi
            delcart();
            break;
        case 'viewcart':
            include "view/client/cart/viewcart.php";
            break;
        case 'bill':
            include "view/client/cart/bill.php";
            break;
        case 'gioithieu':
            include "view/client/gioithieu.php";
            break;
        case 'lienhe':
            include "view/client/lienhe.php";
            break;
        default:
            include "view/client/home.php";
            break;
    }
} else {
    include "view/client/home.php";
}
include "view/client/footer.php";