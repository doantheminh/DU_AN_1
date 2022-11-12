<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath="../../upload/".$img;
if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."' height='50'>";   
}else {
    $hinh="no photo";
}
?>


    <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-body">

      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
          </span>
        </div>
      </div>
      <div class="row">
      <div class="form-group col-md-6">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <label for="exampleSelect1" class="control-label">Danh mục</label>
            <select name="iddm" class="form-control">
                        <option value="0" selected  >Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                           if($iddm==$danhmuc['id']) echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                            echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                            }
                            ?>
                       </select>
          </div>
          <div class="form-group col-md-6">
                        Tên tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" value="<?=$price?>" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        Hình sản phẩm <br>
                        <input type="file" name="hinh" id="" class="form-control">
                        <?=$hinh?>
                    </div>
                    <div class="form-group col-md-6">
                        Mô tả sản phẩm <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea class="form-control">
                    </div>
      </div>

      <BR>
      <input type="hidden" name="id" value="<?=$id?>">
      <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-save">
      <input type="reset" value="Nhập lại" class="btn btn-cancel">
      <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-cancel"></a>

      <BR>   </form>
    </div>
 
    <div class="modal-footer">
    </div>
  </div>
</div>