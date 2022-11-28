<?php
include "model/taikhoan.php";
function dangnhap()
{
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $error = [];
        if ($user == '') {
            $error['user1'] = 'Ban chua nhap user' ;
        }
        if ($pass == '') {
            $error['pass1'] = 'Ban chua nhap pass';
        } else {
            $checkuser = checkuser($user, $pass);
            
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                echo '<script>alert("Đăng nhập thành công");</script>';
                // include "index.php";

            } else {
                echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
                include "view/taikhoan/dangnhap.php";

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
            // echo '<script>alert("'.$error['email'].'");</script>';
        }
        if ($user == '') {
            $error['user'] = 'Ban chua nhap user';
            // echo '<script>alert("'.$error['user'].'");</script>';
        }
        if ($pass == '') {
            $error['pass'] = 'Ban chua nhap pass';
            // echo '<script>alert("'.$error['pass'].'");</script>';
        } else {
            insert_taikoan($email, $user, $pass);
            echo '<script>alert("Bạn đã đăng ký thành công");</script>';
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
        echo '<script>alert("Cập nhật thành công");</script>';

    }
    include "view/taikhoan/edit_taikhoan.php";
}

function quenmk()
{
    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        $email = $_POST['email'];
        $checkemail = checkemail($email);
        if (is_array($checkemail)) {
            echo '<script>alert("Mật khẩu của bạn là :'.$checkemail['pass'].' ");</script>';
            include "view/taikhoan/dangnhap.php";
        } else {
            echo '<script>alert("Email này không tồn tại");</script>';
        }
    }
    include "view/taikhoan/quenmk.php";
}
function thoat(){
    session_unset();
    header('<Location:view');
}
