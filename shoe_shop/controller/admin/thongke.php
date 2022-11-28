<?php
function listthongke()
{
    $listthongke = loadall_thongke();
    include "thongke/list.php";
}
function listbieudo()
{
    $listthongke = loadall_thongke();
    include "thongke/bieudo.php";
}
function doanhthu()
{
    include "thongke/doanh_thu.php";
}

?>