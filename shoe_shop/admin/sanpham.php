<?php

// include "model/sanpham.php";
function listsp(){
    if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
    } else {
        $kyw = '';
        $iddm = 0;
    }
    $listdanhmuc = loadall_danhmuc();
    $listsanpham = loadall_sanpham($kyw, $iddm);
    include "sanpham/list.php";
}

function addsp(){
    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $mota = $_POST['mota'];
        $hinh = $_FILES['hinh']['name'];
        $error = [];
        $target_dir = "../../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " Thành công";
        } else {
            // echo "Lỗi!";
        }
        if($tensp==''){
            $error['tensp'] = "Chưa nhập tên sản phẩm";
        }
        if($giasp==''){
            $error['giasp'] = "Chưa nhập tên giá";
        }
        if($mota==''){
            $error['mota'] = "Chưa nhập tên mô tả";
        }
        else{
            insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
            $thongbao = "thêm thành công";
        }
    }
    $listdanhmuc = loadall_danhmuc();
    include "sanpham/add.php";
}

function updatesp(){
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $id = $_POST['id'];
        $iddm = $_POST['iddm'];
        $name = $_POST['tensp'];
        $price = $_POST['giasp'];
        $mota = $_POST['mota'];
        $img = $_FILES['hinh']['name'];
        $target_dir = "../../upload/";
        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        }
        update_sanpham($id, $iddm, $name, $price, $mota, $img);
        $sanpham = loadall_sanpham($id);
        $thongbao = "Cập nhật thành công";
    }

    $listdanhmuc = loadall_danhmuc();
    // $listsanpham = loadall_sanpham();
    include "sanpham/update.php";
}

function xoasp(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_sanpham($_GET['id']);
    }
    $listsanpham = loadall_sanpham("", 0);
    include "sanpham/list.php";
}

function suasp(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $sanpham = loadone_sanpham($_GET['id']);
    }
    $listdanhmuc = loadall_danhmuc();
    include "sanpham/update.php";
}
?>