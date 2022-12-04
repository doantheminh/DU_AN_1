<?php
function dsbl()
{
    $listbinhluan = loadall_binhluan(0);
    $listtaikhoan = loadall_taikhoan();
    $listsanpham = loadall_sanpham();
    foreach($listtaikhoan as $key => $value) {
        $arrtaikhoan[$value['id']] = $value['user'];
    }
    foreach($listsanpham as $key => $value) {
        $listsanpham[$value['id']] = $value['name'];
    }
    include "binhluan/list.php";
}
function xoabl(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_binhluan($_GET['id']);
    }
    $listbinhluan = loadall_binhluan("", 0);
    $listtaikhoan = loadall_taikhoan();
    $listsanpham = loadall_sanpham();
    foreach($listtaikhoan as $key => $value) {
        $arrtaikhoan[$value['id']] = $value['user'];
    }
    foreach($listsanpham as $key => $value) {
        $listsanpham[$value['id']] = $value['name'];
    }
    include "binhluan/list.php";
}
?>