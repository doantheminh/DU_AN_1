<?php
    include "../../model/pdo.php";
    include "../../model/danhmuc.php";
    include "../../admin/danhmuc.php";
    include "../../model/sanpham.php";
    // goi controller
    include "../../admin/sanpham.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                    adddm();
                    break;
            case 'lisdm':
                    listdm();
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
            case 'addsp';
                addsp();
                break;
            case 'listsp';
                listsp();
                break;
            default:
                include "home.php";
                break;
            case 'xoasp':
                xoasp();
                break;
            case 'suasp':
                suasp();
                break;
            case 'updatesp':
                updatesp();
                break;
        }
        # code...
    }else {
        include "home.php";
    }
    include "footer.php"
?>
