<?php
function listtaikhoan()
{
    $listtaikhoan = loadall_taikhoan();
    include "taikhoan/list.php";
}
