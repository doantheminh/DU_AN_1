<?php
function dangnhap()
{
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $error = [];
        if ($user == '') {
            $error['user1'] = 'Bạn Chưa Nhập User' ;
        }
        if ($pass == '') {
            $error['pass1'] = 'Bạn Chưa Nhập Pass';
        } else {
            $checkuser = checkuser($user, $pass);
            
            if (is_array($checkuser)) {
                $_SESSION['user'] = $checkuser;
                echo '<script>alert("Đăng nhập thành công");</script>';
                echo "Đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
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
            $error['email'] = 'Bạn Chưa Nhập Email';
            // echo '<script>alert("'.$error['email'].'");</script>';
        }
        if ($user == '') {
            $error['user'] = 'Bạn Chưa Nhập User';
            // echo '<script>alert("'.$error['user'].'");</script>';
        }
        if ($pass == '') {
            $error['pass'] = 'Bạn Chưa Nhập Pass';
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
    echo '<script>alert("Thoát thành công");</script>';
    // header('location: index.php');

    include "view/taikhoan/dangnhap.php";
}
