<?php
    session_start();
    $idpro=$_REQUEST['idpro'];
    include "../../../model/pdo.php";
    include "../../../model/binhluan.php";
    include "../../../model/taikhoan.php";

    $dsbl=loadall_binhluan($idpro);
    $listtaikhoan = loadall_taikhoan();
    foreach($listtaikhoan as $key => $value) {
        $arrtaikhoan[$value['id']] = $value['user'];
    }
?>
                    <?php
                    if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $iduser=$_SESSION['user']['id'];
                        $ngaybinhluan=date('G.i:s d/m/Y');
                        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                        header("Location:".$_SERVER['HTTP_REFERER']);
                    }
                    ?>
<div class="row">
                                            <div class="col-md-5">
                                            <?php
                                            foreach ($dsbl as $bl) {
                                                extract($bl);
                                                echo '
                                                <div class="product-review">
                                                    <p> <a href="#"></a> <span>Bình luận bởi - </span>'.$arrtaikhoan[$iduser].'</p>
                                                    <div class="review-date">
                                                        <p>'.$noidung.'</p>
                                                        <p>'.$ngaybinhluan.'</p><br>
                                                    </div>
                                                </div>';
                                 

                                            }
                                        ?>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="rate-product hidden-xs">

                                                 
                                                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                                                        <!-- <table class="product-review-table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>1 star</th>
                                                                    <th>2 star</th>
                                                                    <th>3 star</th>
                                                                    <th>4 star</th>
                                                                    <th>5 star</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[1]"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[2]"> </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Quality</th>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                    <td> <input type="radio" class="radio" name="ratings[3]"> </td>
                                                                </tr>
                                                            </tbody>
                                                        </table> -->
                                                        <ul class="form-list">
                                                            <!-- <li>    
                                                                <label> nickname <em>*</em> </label>
                                                                <input type="text">
                                                            </li>
                                                            <li>
                                                                <label> Summary of Your Review <em>*</em> </label>
                                                                <input type="text">
                                                            </li> -->
                                                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                                                            <?php if (isset($_SESSION['user'])) {
                              ?>
                                                            <div class="rate-product-heading">  
                                                        <h3>Bạn muốn nói gì về sản phẩm này</h3>
                                                        <h3>Hãy để lại cảm nhận về sản phẩm. <em>*</em></h3>
                                                        </div>
                                                            <li>
                                                                <label> Bình luận <em>*</em> </label>
                                                                <textarea cols="3" rows="5" name="noidung"></textarea>
                                                            </li>
                                                        </ul>
                                                        <input type="submit" value="Bình luận" name="guibinhluan">
                                                        <?php } ?>
                                                        <!-- <button type="submit"> submit review</button> -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>