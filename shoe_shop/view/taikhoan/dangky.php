<style>
  .error{
    color: red;
  }
</style>
<div class="row mb ">
  <div class="boxtrai mr">
    <div class="row mb">

      <div class="boxtitle">Đăng ký thành viên</div>
      <div class=" row boxcontent formtaikhoan">
        <form action="index.php?act=dangky" method="post">
          <div class="row mb10">
            Email
            <input type="email" name="email" id="" require>
          </div>
          <div class="error">
            <?php
            if (isset($error['email'])) {
              echo $error['email'];
            }
            ?>
          </div>
          <div class="row mb10">
            Tên đăng ký
            <input type="text" name="user" id="">
          </div>
          <div class="error">
            <?php
            if (isset($error['user'])) {
              echo $error['user'];
            }
            ?>
          </div>
          <div class="row mb10">
            Mật khẩu
            <input type="password" name="pass" id="">
          </div>
          <div class="error">
            <?php
            if (isset($error['pass'])) {
              echo $error['pass'];
            }
            ?>
          </div>
          <div class="row mb10">

            <input type="submit" value="Đăng ký" name="dangky">
          </div>
          <div class="row mb10">
            <input type="reset" value="Nhập lại">
          </div>
        </form>
        <h2 class="thongbao">
          <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
          ?>
        </h2>
      </div>
    </div>


  </div>
  <div class="boxphai ">
    <?php
    include "view/client/boxright.php";
    ?>
  </div>
</div>