<?php
function listbill()
{
    if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        $kyw = $_POST['kyw'];
    } else {
        $kyw = "";
    }
    $listbill = loadall_bill($kyw, 0);
    include "bill/listbill.php";
}
function xoabill()
{
    if (isset($_GET['id']) && ($_GET['id'] > 1)) {

        delete_bill($_GET['id']);
    }
    $listbill = loadall_bill("", 0);
    include "bill/listbill.php";
}

function detailbill()
{
    if (isset($_GET['id']) && ($_GET['id'] > 1)) {
        $bill = loadone_bill($_GET['id']);
        include "bill/listdetail.php";
    }
}
    
function updatebill(){
    if(isset($_POST['update'])){
        $id_bill = $_POST['id_bill'];
        $id = $_POST['bill_status'];
        $sql="update bill set bill_status=$id where id=".$id_bill;
        pdo_execute($sql);
        $listbill=loadall_bill("",0);
        header("Location: ../../view/admin/index.php?act=listbill");
    }

}
function ct(){
    if (isset($_GET['bill']) && ($_GET['bill'] > 0)) {
        $id = $_GET['bill'];
        $billct=chi_tiet_bill($id);
        include "bill/chi_tiet.php";
    }
}