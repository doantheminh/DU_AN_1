
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
        <label>Tìm kiếm:<input type="text" class="form-control form-control-sm" placeholder="Nhập tên khách hàng..." name="kyw">
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
              <div class="form-group col-md-6">
                        Tên tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" value="<?=$price?>" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        Hình sản phẩm <br>
                        <input type="file" name="hinh" id="" class="form-control">
                        <?=$hinh?>
                    </div>
                    <div class="form-group col-md-6">
                        Mô tả sản phẩm <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea class="form-control">
                    </div>
                  
            
                    </div>
                </div>
            </div>
        </div>
    </main>