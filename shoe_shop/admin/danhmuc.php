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
        function listdm()
    {
        $listdanhmuc = loadall_danhmuc();
        include "../danhmuc/list.php";
    }

    function xoadm()
    {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_danhmuc($_GET['id']);
        }

        $listdanhmuc = loadall_danhmuc();
        include "../danhmuc/list.php";
    }
    function suadm()
    {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $sql = "select*from danhmuc where id=" . $_GET['id'];
            $dm = pdo_query_one($sql);
        }
        $listdanhmuc = loadall_danhmuc();

        include "../danhmuc/update.php";
    }
    function updatedm()
    {
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $tenloai = $_POST['tenloai'];
            $id = $_POST['id'];
            update_danhmuc($id, $tenloai);
            $thongbao = "Cập nhật thành công";
        }

        $listdanhmuc = loadall_danhmuc();
        include "../danhmuc/list.php";
    }
?>