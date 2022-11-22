<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
         pdo_execute($sql);
    }
    
    // function loadall_binhluan(){
    //     $sql="SELECT binhluan.id,sanpham.name,taikhoan.user,binhluan.noidung,binhluan.ngaybinhluan
    //     FROM ((binhluan
    //     INNER JOIN taikhoan ON binhluan.iduser=taikhoan.user)
    //           inner JOIN sanpham ON binhluan.iduser=sanpham.name)";
    //     $listbl=pdo_query($sql);
    //     return $listbl;
    // }
    //nối câu lệnh để lúc load ra nó có thể hiện tên người dùng và tên sản phẩm
    // hiện tại chỗ bill trong asdmin đang lỗi vì thay đổi giá trị trong phần list
    // nếu có một mình câu lệnh bên trên sẽ ra nhưng bị lỗi đến phần bình luận
    function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";
        $sql.=" order by id  desc limit 0,5";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$_GET['id'];
          pdo_execute($sql);
    }

?>