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
        if(isset($_GET['id']) && ($_GET['id']>1)){
            
            delete_bill($_GET['id']);
              }
              $listbill=loadall_bill("",0);
              include "bill/listbill.php";
    }
    
function updatebill(){
    if(isset($_GET['id']) && ($_GET['id']>1)){
        $bill = loadone_bill($_GET['id']);
        if($bill['bill_status'] == 0){
            $sql="update bill set ttdh='1' where id=".$_GET['id'];
        }
        else if($bill['bill_status'] == 1){
            $sql="update bill set ttdh='2' where id=".$_GET['id'];
        }
        else if($bill['bill_status'] == 2){
            $sql="update bill set ttdh='3' where id=".$_GET['id'];
        }
        $listbill=loadall_bill("",0);
              include "bill/listbill.php";
    }

}
