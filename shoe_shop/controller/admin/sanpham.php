<?php


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


if (isset($_FILES["images"])) {
    $images=$_FILES['images'];
    $image_name=$images['name'];
    $target_dir = "../../upload/";
    foreach ($image_name as $key => $value) {
        move_uploaded_file($_FILES["images"]["tmp_name"][$key], $target_dir.$value);
    }
}   
        if($tensp==''){
            $error['tensp'] = "Chưa nhập tên sản phẩm";
        }
        if($giasp==''){
            $error['giasp'] = "Chưa nhập tên giá";
        }
        if($mota==''){
            $error['mota'] = "Chưa nhập  mô tả sản phẩm";
        }
        if($hinh==''){
            $error['hinh'] = "Chưa có ảnh";
        }
   
        else{
            // insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
            $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
            $last_id = pdo_execute_return_lastInsertID($sql);
            foreach ($image_name as $key => $value) {
                $sql="insert into img_products(id_product,image) values($last_id,'$value')";
                $add_img = pdo_execute($sql);
            }
            echo '<script>alert("Thêm thành công");</script>';
            
             
            
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
        echo $thongbao;
    }

    $listdanhmuc = loadall_danhmuc();
    // $listsanpham = loadall_sanpham();
    include "sanpham/update.php";
}

function xoasp(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_sanpham($_GET['id']);
    }
    $listsanpham = loadall_sanpham("",0);
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