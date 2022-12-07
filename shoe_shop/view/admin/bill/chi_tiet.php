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

                            <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="dataTables_length" id="sampleTable_length">
      <form action="index.php?act=listsp" method="post">



      </div>
    </div>
    <div class="col-sm-12 col-md-6">

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
                            <?php
                                            bill_chi_tiet($billct);
                                        ?>
                                         <td><a href="index.php?act=listbill"><input class="btn btn-primary btn-sm trash" type="button" value="Quay lại"></a>
                                    </td>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>