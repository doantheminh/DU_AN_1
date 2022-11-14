
  </aside>
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh muc</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="index.php?act=adddm" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới danh muc</a>
                            </div>
                            

                          </div>
                          <table class="table table-hover table-bordered" id="sampleTable">
                        <tr>
                            <th width="10"><input type="checkbox" ></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;

                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa" class="btn btn-primary btn-sm edit"></a><a href="'.$xoadm.'"> <input type="button" value="Xóa" class="btn btn-primary btn-sm edit"></a></td>
                        </tr>';
                        }
                        ?>
                        
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

