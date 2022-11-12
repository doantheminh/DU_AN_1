

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <form class="row" action="index.php?act=addsp" method="post" enctype="multipart/form-data">

              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text"  name="tensp">
              </div>

              <div class="form-group col-md-3">
                <label  class="control-label">Danh mục</label>

                <select name="iddm" class="form-control">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {

                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="text"  name="giasp" >
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="hinh">
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
    
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" ></textarea>
              </div>
              <input class="btn btn-save" type="submit" value="Thêm mới" name="themmoi" id="">

              <input type="reset" value="Nhập lại" class="btn btn-save">

              <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-save"></a>


</form>
          </div>
            
        </div>
  </main>
