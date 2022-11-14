



<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Thống kê sản phẩm theo loại</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">

                          <table class="table table-hover table-bordered" id="sampleTable">
                          <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $thongke) {
                       extract($thongke);
                       echo '<tr>
                       <td>'.$madm.'</td>
                       <td>'.$tendm.'</td>
                       <td>'.$countsp.'</td>
                       <td>'.$maxprice.'</td>
                       <td>'.$minprice.'</td>
                       <td>'.$avgprice.'</td>
                   </tr>';
                    }
                    ?>
                        
                    </table>
                    </div>
                    <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ" class="btn btn-primary btn-sm edit"></a>
        </div>
                </div>
            </div>
        </div>
    </main>
