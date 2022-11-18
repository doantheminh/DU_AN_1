<?php
include "model/taikhoan.php";
function dangnhap()
{
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $error = [];
        if ($user == '') {
            $error['user1'] = 'Ban chua nhap user';
        }
        if ($pass == '') {
            $error['pass1'] = 'Ban chua nhap pass';
        } else {
            $checkuser = checkuser($user, $pass);
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                $thongbao = "Đã đăng nhập thành công.";
                // include "index.php";
                    // header('Location:index.php');
            } else {
                $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra lại.";
            }
        }
    }
    include "view/taikhoan/dangnhap.php";
}

function dangky()
{
    if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $error = [];
        if ($email == '') {
            $error['email'] = 'Ban chua nhap email';
        }
        if ($user == '') {
            $error['user'] = 'Ban chua nhap user';
        }
        if ($pass == '') {
            $error['pass'] = 'Ban chua nhap pass';
        } else {
            insert_taikoan($email, $user, $pass);
            $thongbao = "Đã đăng ký thành công.Vui lòng đăng nhập để thực hiện chức năng khác.";
        }
    }
    include "view/taikhoan/dangky.php";
}

function edit_taikhoan()
{
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $id = $_POST['id'];
        update_taikhoan($id, $user, $pass, $email, $address, $tel);
        $_SESSION['user'] = checkuser($user, $pass);

        $thongbao = "Cap nhat thành công";
    }
    include "view/taikhoan/edit_taikhoan.php";
}

function quenmk()
{
    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        $email = $_POST['email'];
        $checkemail = checkemail($email);
        if (is_array($checkemail)) {
            $thongbao = "Mật khẩu của bạn là " . $checkemail['pass'];
        } else {
            $thongbao = "Email không tồn tại.";
        }
    }
    include "view/taikhoan/quenmk.php";
}
function thoat(){
    session_unset();
    header('Location:index.php');
}
