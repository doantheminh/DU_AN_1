<?php
    session_start();
    $idpro=$_REQUEST['idpro'];
    include "../../../model/pdo.php";
    include "../../../model/binhluan.php";
    $dsbl=loadall_binhluan($idpro);

?>

                    <?php
                    if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $iduser=$_SESSION['user']['id'];
                        $ngaybinhluan=date('h:i:sa d/m/Y');
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
                                                    <p> <a href="#"></a> <span>Review by - </span>'.$iduser.'</p>
                                                    
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
                                                    <div class="rate-product-heading">  
                                                        <h3>You're reviewing: Fusce aliquam</h3>
                                                        <h3>How do you rate this product? <em>*</em></h3>
                                                    </div>
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

                                                            <li>
                                                                <label> Review <em>*</em> </label>
                                                                <textarea cols="3" rows="5" name="noidung"></textarea>
                                                            </li>
                                                        </ul>
                                                        <input type="submit" value="Bình luận" name="guibinhluan">

                                                        <!-- <button type="submit"> submit review</button> -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>