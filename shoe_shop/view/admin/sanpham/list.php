
        <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                            
                              <a class="btn btn-add btn-sm" href="index.php?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                            <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="dataTables_length" id="sampleTable_length">
      <form action="index.php?act=listsp" method="post">

        <label>Hiện <select name="iddm" id=""class="form-control form-control-sm">>
                        <option value="0" selected>All</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                       </select>  
                    
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div id="sampleTable_filter" class="dataTables_filter">
        <label>Tìm kiếm:<input type="text" class="form-control form-control-sm" placeholder="Tìm theo tên..." name="kyw">
        <input type="submit" value="Go" name="listok">

        </label>
      </div>
    </div>
    </form>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-hover table-bordered js-copytextarea dataTable no-footer" cellpadding="0"
        cellspacing="0" border="0" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
        <thead>
          <tr role="row">
            <th width="10" class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
              aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 13.0104px;"><input
                type="checkbox" id="all"></th>
            
          </tr>
        </thead>
              <tbody>
                 <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Lượt xem</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $img="<img src='".$hinhpath."' height='50'>";   
                                    }else {
                                        $img="no photo";
                                    }
                                    echo '<tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$img.'</td>
                                    <td>'.number_format($price).' vnd</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$suasp.'"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                        <a href="'.$xoasp.'"> <input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a></td>
                                    </td>
                                </tr>';
                                }
                                ?>
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>