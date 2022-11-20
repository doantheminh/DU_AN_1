<?php
include "../../model/pdo.php";
include "../../model/sanpham.php";
include "../../model/danhmuc.php";
include "../../model/taikhoan.php";
include "../../model/binhluan.php";
include "../../model/cart.php";
include "../../controller/admin/danhmuc.php";
include "../../controller/admin/sanpham.php";
include "../../controller/admin/binhluan.php";
include "../../controller/admin/thongke.php";
include "../../controller/admin/taikhoan.php";
include "../../controller/admin/bill.php";

include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //
            adddm();
            break;
        case 'xoadm':
            xoadm();
            break;
        case 'suadm':
            suadm();
            break;
        case 'updatedm':
            updatedm();
            break;
        case 'lisdm':
            listdm();
            break;
            /**controller cho sp */
        case 'addsp':
            addsp();
            break;
        case 'xoasp':
            xoasp();
            break;
        case 'suasp':
            suasp();
            break;
            /**  ------------------------    */
        case 'dskh':
            listtaikhoan();
            break;
        case 'suatk':
            uptadetk();
            break;
        case 'xoatk':
            deletetk();
            break;
            /**------------------------------- */
        case 'listbill':
            listbill();
            break;

        case 'xoabill':
            xoabill();
            break;
        case 'updatebill';
            updatebill();
            /**------------------------------- */

        case 'xoabl':
            xoabl();
            break;
        case 'listsp':
            listsp();
            break;
        case 'updatesp':
            updatesp();
            break;

        case 'dsbl':
            dsbl();
            break;
        case 'thongke':
            listthongke();
            
            break;
        case 'bieudo':
            listbieudo();
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
