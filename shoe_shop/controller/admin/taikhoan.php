<?php
function listtaikhoan()
{
    $listtaikhoan = loadall_taikhoan();
    include "taikhoan/list.php";
}
function uptadetk(){
    if(isset($_POST['capnhattk'])&&($_POST['capnhattk'])){
        $id=$_POST['id'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $role=$_POST['role'];
        update_taikhoan($id,$user,$pass,$email,$address,$tel,$role);
          $thongbao="Cập nhật thành công";
          echo $thongbao;
         }
        
        $listtaikhoan=loadall_taikhoan();
        include "taikhoan/updatetk.php";
}
function deletetk(){
    if (isset($_GET['id']) && ($_GET['id'] > 0)){
        delete_taikhoan($_GET['id']);
    }
    $listtaikhoan = loadall_taikhoan();
    
    include "taikhoan/list.php";
}
