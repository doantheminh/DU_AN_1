<?php
function dsbl()
{
    $listbinhluan = loadall_binhluan(0);
    include "binhluan/list.php";
}
function xoabl(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_binhluan($_GET['id']);
    }
    $listbinhluan = loadall_binhluan("", 0);
    include "binhluan/list.php";
}
?>