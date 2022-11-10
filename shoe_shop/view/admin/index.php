<?php
    include "../../model/pdo.php";
    include "../../model/danhmuc.php";
    include "../../admin/danhmuc.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                adddm();
                break;
            
            default:
                include "home.php";
                break;
        }
        # code...
    }else {
        include "footer.php";
    }
?>