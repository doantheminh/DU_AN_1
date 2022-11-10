<?php
    function adddm()
    {
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            if($_POST['tenloai']==''){
                $error = "Chưa nhập tên loại";
            }
            else{
                insert_danhmuc($_POST['tenloai']);
                $thongbao = "thêm thành công";
            }
            
        }
        include "../danhmuc/add.php";
    }
?>