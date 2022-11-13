<div class="row mb" >
    <div class="boxtrai rm">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">Thông tin đặt hàng</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])){
                                $name=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                            }else {
                                $name="";
                                $address="";
                                $email="";
                                $tel="";

                            }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" id="" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" id="" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" id="" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Phương thức thanh toán</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked id="">Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt" >Thanh toán online</td>

                        </tr>
                    </table>
                </div>
            </div>
                            <div class="row mb">
                                <div class="boxtitle">Thông tin giỏ hàng</div>
                                <div class="row boxcontent cart">
                                    <table>
                                       
                                        <?php
                                            viewcart(0);
                                        ?>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb bill">
                                <input type="submit" value="Tiếp tục đặt hàng" name="dongydathang">
                            </div>

        </form>
    </div>
    <div class="boxphai">
        <?php include "view/client/boxright.php"; ?>
    </div>
</div>