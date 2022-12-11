<?php
    function insert_danhmuc($tenloai){
        $sql="insert into danhmuc(name) values('$tenloai')";
                                    pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function delete_danhmuc($id){
        $sql="delete from danhmuc where id=".$id;
        $sql_id = "delete from sanpham where iddm=".$id;
        
        $sanpham = "select*from sanpham where iddm=".$id;
        $spALl = pdo_query($sanpham);

        foreach($spALl as $sp){
            $sql_img = "delete from img_products where id_product=".$sp['id'];
            pdo_execute($sql_img);
        }
        pdo_execute($sql_id);
        pdo_execute($sql);

    }
    // $sql="delete from sanpham where id=".$id;
    // $sql_img = "delete from img_products where id_product=".$id;
    // pdo_execute($sql_img);
    // pdo_execute($sql);
    function update_danhmuc($id,$tenloai)
    {
        $sql="update danhmuc set name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $sql="select*from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
?>