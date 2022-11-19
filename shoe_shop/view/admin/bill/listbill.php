
<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách hóa đơn</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">

                            <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="dataTables_length" id="sampleTable_length">
      <form action="index.php?act=listbill" method="post">

        <label> 
                    
      </div>
    </div>
    <div class="col-sm-12 col-md-6">
      <div id="sampleTable_filter" class="dataTables_filter">
        <label>Tìm kiếm:<input type="text" class="form-control form-control-sm" placeholder="Nhập mã đơn hàng" name="kyw">
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
                                    <th>Mã đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Số lượng hàng</th>
                                    <th>Giá trị đơn hàng</th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tháo tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($listbill as $bill) {
                                    extract($bill);
                                    $kh=$bill["bill_name"].'
                                    <br>'.$bill["bill_email"].'
                                    <br>'.$bill["bill_address"].'
                                    <br>'.$bill["bill_tel"];
                                    $countsp=loadall_cart_count($bill["id"]);
                                    $ttdh=get_ttdh($bill["bill_status"]);
                                    echo '<tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td><strong>'.$bill["total"].'</strong>VND</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill["ngaydathang"].'</td>

                                    <td>
                                    <a href="index.php?act=xoabill"><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a></td>
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