

        <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách bình luận</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">

                          <table class="table table-hover table-bordered" id="sampleTable">
                        <tr>
                            <th width="10"><input type="checkbox" ></th>
                            <th>ID</th>
                            <th>Nội dung bình luận</th>
                            <th>IDUser</th>
                            <th>IDpro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>

                            <td><a href="'.$xoabl.'"> <input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a></td>
                        </tr>';
                        }
                        ?>
                        
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
