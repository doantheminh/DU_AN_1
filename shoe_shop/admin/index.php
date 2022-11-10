<?php
    include "../model/pdo.php";
    include "../model/danh_muc.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {
            case '':
                # code...
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