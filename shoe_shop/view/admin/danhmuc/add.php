
<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
          <style>
              .error{
                  color: red;
              }
          </style>
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới danh mục </h5>
              </span>
            </div>
            <form action="index.php?act=adddm" method="post">
            <div class="form-group col-md-12">
              <label class="control-label">ID danh mục mới</label>
              <input class="form-control" type="text" name="maloai" id="" disabled require>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên danh mục mới</label>
              <input class="form-control" type="text" name="tenloai" pattern="{1,30}" required>
            </div>
            <div class="error">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>

           
          </div>
          <BR>
          <button class="btn btn-save" type="submit" value="Thêm mới" name="themmoi">Lưu lại</button>
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




