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
          <form class="row" action="index.php?act=uptadetk" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-3">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" type="text" name="user" value="<?= $taikhoan['user'] ?>" required>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="password" name="pass" value="<?= $taikhoan['pass'] ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password phải chứa 8 ký tự trở lên có ít nhất một số và một chữ hoa và chữ thường">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="email" name="email" value="<?= $taikhoan['email'] ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Bạn phải nhập đúng định dạng của email !">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text" name="address" value="<?= $taikhoan['address'] ?>" required>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" type="text" name="tel" value="<?= $taikhoan['tel'] ?>" required pattern="(\+84|0)\d{9,10}" title="Nhập số điện thoại từ 10 đến 11 số không bao gồm chữ">
            </div>
            <div class="form-group col-md-3">
              <?php $vaitro=get_vaitro($taikhoan['role']);?>
              <label class="control-label">Vai trò</label>
              <select name="role" class="form-control form-control-sm">
                <option value="<?= $taikhoan['role']?>" selected><?=$vaitro?></option>
                <option value="0">Khách hàng</option>
                <option value="1">Admin</option>
              </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?= $taikhoan['id'] ?>">

        <input class="btn btn-save" type="submit" value="Cập nhật" name="capnhattk" id="">
        <input type="reset" value="Nhập lại" class="btn btn-save">
        <a href="index.php?act=dskh"><input type="button" value="Danh sách" class="btn btn-save"></a>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
          echo $thongbao;
        ?>

        </form>

      </div>
</main>