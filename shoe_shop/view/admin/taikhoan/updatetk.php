


    <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách tài khoản</li>
        <li class="breadcrumb-item"><a href="#">Sửa tài khoản</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Chỉnh sửa tài khoản</h3>
          <div class="tile-body">
            <form class="row" action="index.php?act=suatk" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-3">
                <label  class="control-label">Tất cả</label>
                <select name="id" class="form-control">
                <option value="<?=$id?>" selected ></option>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                   if($id==$taikhoan['id']) echo '<option value="'.$taikhoan['id'].'" selected>'.$taikhoan['user'].'</option>';
                    }
                    ?>
                </select>
              </div>  
            <div class="form-group col-md-3">
                <label class="control-label">Tên đăng nhập</label>
                <input class="form-control" type="text"  name="user" value="<?=$user?>" require>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Mật khẩu</label>
                <input class="form-control" type="password"  name="pass" value="<?=$pass?>"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Mật khẩu phải chứa 8 ký tự trở lên có ít nhất một số và một chữ hoa và chữ thường">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Email</label>
                <input class="form-control" type="email"  name="email" value="<?=$email?>"require pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Bạn phải nhập đúng định dạng của email !">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Địa chỉ</label>
                <input class="form-control" type="text"  name="address" value="<?=$address?>" require>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="text"  name="tel" value="<?=$tel?>"pattern="(\+84|0)\d{9,10}" require title="Nhập số điện thoại từ 10 đến 11 số không bao gồm chữ">
              </div>
              <?php
                        foreach ($listtaikhoan as $taikhoan) {    
                            extract($taikhoan);
                            $vaitro=get_vaitro($role);
                            echo '<div class="form-group col-md-3">
                            <label class="control-label">Vai trò</label>
                              <select name="role"  class="form-control form-control-sm" >
                                <option value="'. $vaitro .'" selected>'.get_vaitro($role).'</option>
                                <option value="0" >Khách hàng</option>
                                <option value="1">Admin</option>
                              </select>
                            </div>  ';
                        }
                        ?>
            </div>
            <input type="hidden" name="id" value="<?=$id?>">

            <input class="btn btn-save" type="submit" value="Cập nhật" name="capnhattk" id="">
              <input type="reset" value="Nhập lại" class="btn btn-save">
              <a href="index.php?act=dskh"><input type="button" value="Danh sách" class="btn btn-save"></a>
              <?php
                    if (isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>

                </form>
            
        </div>
  </main>
