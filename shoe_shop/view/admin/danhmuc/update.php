<?php
if (is_array($dm)) {
    extract($dm);
}
?>
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
          
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Cập nhật danh mục </h5>
              </span>
            </div>
            <form action="index.php?act=updatedm" method="post">
            <div class="form-group col-md-12">
              <label class="control-label">ID danh mục </label>
              <input class="form-control" type="text" name="maloai" id="" disabled require>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label"> Tên danh mục </label>
              <input type="text" name="tenloai" class="form-control" id="" value="<?php if(isset($name)&&($name!="")) echo $name ;?>" required>
            </div>
          </div>
          <BR>
          <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
          <button class="btn btn-save" type="submit" value="Cập nhật" name="capnhat">Lưu lại</button>
          <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-save"></a>

          <BR>
          <?php
            if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao
            ?>
           </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
   </div>




