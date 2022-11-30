
<!DOCTYPE html>
<html>
 <head>
  <title>Biểu đồ thống kê doanh thu</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Biểu đồ thống kê doanh thu <span id="text-date"></span></h2>
   <br /><br />
   <div id="chart" style="height: 250px;"></div>
   <script type="text/javascript">
    $(document).ready(function() {
        thong_ke();
 var chart = new Morris.Area({
 element : 'chart',
 xkey:'date',
 ykeys:['date', 'order', 'sales','quantity'],
 labels:['Ngày ','Đơn hàng', 'Doanh thu', 'Số lượng']

});
function thong_ke() {
    var text='365 ngày qua';
    $('#text-date').text(text);
        $.ajax({
            url:"doanh_thu.php",
            method:"POST",
            dataType:"JSON",
            success:function (data) {
              chart.setData(data);
              $('#text-date').text(text);
            }
        });
}
});
</script>
  </div>
 </body>
</html>

