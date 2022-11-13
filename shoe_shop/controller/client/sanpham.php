<?php
function sanpham(){
    $error = [];
    if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        $kyw = $_POST['kyw'];
    } else {
        $kyw = "";
        $error['timkiem'] = "Chua nhap tim kiem";
    }
    if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
        $iddm = $_GET['iddm'];
    } else {
        $iddm = 0;
    }
    $dssp = loadall_sanpham("$kyw", $iddm);
    $tendm = load_ten_dm($iddm);
    include "view/client/sanpham.php";
}

function sanphamct(){
    if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
        $id = $_GET['idsp'];
        $onesp = loadone_sanpham($id);
        extract($onesp);
        $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
        include "view/client/sanphamct.php";
    } else {
        include "view/client/home.php";
    }
}