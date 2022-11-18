<?php
    function listbill(){
        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
            $kyw=$_POST['kyw'];
        }else {
            $kyw="";
        }
        $listbill=loadall_bill($kyw,0);
                    include "bill/listbill.php";

    }
    function xoabill(){
        if (isset($_GET['id'])&&($_GET['id']>0)){
            delete_bill($_GET['id']);
              }
              $listbill=loadall_bill("",0);
              include "bill/listbill.php";
    }
?>